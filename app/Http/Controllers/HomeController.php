<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmaitionMail;
use App\Mail\SomeoneContactedYou;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Home', [
            'educations'  => [
                [
                    'title' => __('Training as IT Specialist For Application Development'),
                    'ort'   => 'Meier AG / Wesel',
                    'date'  => __('from 2018 to 2021'),
                ],
                [
                    'title' => __('C1 language course'),
                    'ort'   => 'HHU / Düsseldorf',
                    'date'  => __('from 2017 to 2018'),
                ],
                [
                    'title' => __('Language courses up to B2 level'),
                    'ort'   => 'VHS / Wesel',
                    'date'  => __('from 2016 to 2017'),
                ],
                [
                    'title' => __('Business study'),
                    'ort'   => 'Kairo Uni / Kairo',
                    'date'  => __('from 2013 to 2015'),
                ],
                [
                    'title' => __('Business study'),
                    'ort'   => 'Alepp Uni / Aleppo',
                    'date'  => __('from 2011 to 2013'),
                ],
            ],
            'experiences' => [
                [
                    'title'        => __('Software Developer'),
                    'workplace'    => 'LASE PeCo Systemtechnik GmbH',
                    'date'         => __('From 2021-09-01 until today'),
                    'text'         => null,
                    'pointBullets' => null,
                ],

                [
                    'title'        => __('Freelancer'),
                    'workplace'    => null,
                    'date'         => __('From 2019 until today'),
                    'text'         => 'In addition to my education, I have been freelancing in the field of website development and online hosting, for a couple of restaurants in Wesel. I also created a program for ordering and storage, with the employees.',
                    'pointBullets' => null,
                ],
                [
                    'title'     => __('Assistant (salesman)'),
                    'workplace' => 'Kochlöffel, Wesel',
                    'date'      => __('From 2018 to 2019'),
                    'text'      => 'In the first year of my apprenticeship as an IT specialist for development, I worked as a temp at the Kochlöffel worked Responsible for the registration of the acceptance and recording of the goods in the warehouse. Purchase orders for goods. Cashier and friendly customer service ',
                ],
                [
                    'title'     => __('Assistant (salesman)'),
                    'workplace' => 'Café Extrablatt, Wesel',
                    'date'      => __('From 2017 to 2018'),
                    'text'      => 'While I was taking part in various German courses, I worked as a temporary as a temp at Extrablatt. My duties included the following activities: Responsible for the registration of the acceptance and recording of the goods in the warehouse. Safety measures for the equipment in the facility. Friendly service to customers. ',
                ],
            ],
            'skills'      => [
                'code'       => [
                    'name'   => __('Code'),
                    'skills' => [
                        'PHP',
                        'Laravel',
                        'OOP',
                        'PHPStrom',
                        'JavaScript',
                        'Vue',
                        'Alpine.js & Livewire',
                        'CSS',
                        'Tailwind CSS',
                        'Bootstrap',
                    ]

                ],
                'management' => [
                    'name'   => __('Management'),
                    'skills' => [
                        'Git',
                        'Github',
                        'Bitbucket',
                        'Jira - SCRUM',
                        'Jira - Confluence',
                    ],
                ],
                'testing'    => [
                    'name'   => __('Testing'),
                    'skills' => [
                        'Coverage testing',
                        'Unit testing',
                        'TDD',
                    ],
                ],
                'databases'  => [
                    'name'   => __('Databases'),
                    'skills' => [
                        'MySQL',
                        'Datagrip',
                    ],
                ],

                'other'     => [
                    'name'   => __('Other technologies'),
                    'skills' => [
                        'MVC',
                        'NPM',
                        'Yarn',
                        'Webpack',
                        'Vite',
                        'SSH',
                        'FTP/FTPS',
                        'JSON',
                    ],
                ],
                'languages' => [
                    'name'   => __('Other skills'),
                    'skills' => [
                        __('German - C1'),
                        __('English - B2'),
                        __('Arabic - Native language'),
                        __('Driving license'),
                    ],
                ],
            ]
        ]);
    }

    public function contactForm(Request $request)
    {
        $data = $this->validate($request, [
            'name'    => ['required'],
            'email'   => ['required', 'email'],
            'phone'   => ['required'],
            'message' => ['required', 'min:20'],
        ], [
            'name.required'    => __('Your name is required'),
            'email.required'   => __('Your email is required'),
            'email.email'      => __('Your email is not a real email'),
            'phone.required'   => __('Your phone number is required'),
            'message.required' => __('Your message is required'),
            'message.min'      => __('Your message should be longer than 20 characters'),
        ]);

        $contact = Contact::query()->create([
            'name'    => $data['name'],
            'email'   => $data['email'],
            'phone'   => $data['phone'],
            'message' => $data['message'],
        ]);

        Mail::to($contact->email)->send(new ConfirmaitionMail());
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new SomeoneContactedYou($data));

        return Redirect::route('home');
    }
}
