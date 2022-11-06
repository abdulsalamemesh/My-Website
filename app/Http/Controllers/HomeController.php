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
                    'ort'   => 'Business Technical College / Duisburg-Mitte',
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
                    'title'     => __('Mid-Level Software Developer'),
                    'workplace' => 'LASE PeCo Systemtechnik GmbH',
                    'date'      => __('From 2021-09-01 until today'),
                    'text'      => __('My area of responsibility is: Test driven development (TDD), planing, implementation and maintenance of two (Laravel und Vue) cloud based platforms as well as connecting and implementing the API of various types of new and old laser-counting devices to the clouds. Configuration and installation of a local server on a local PC for a laser scanner device and connecting it to the Internet. Aggregating and saving the data of the laser scanner devices and generating statistics from the data and displaying it in various implementations in the clouds (Excel, diagrams, pivot tables)'),
                ],
                [
                    'title'     => __('Minijob Software Developer'),
                    'workplace' => 'Meier AG / Wesel',
                    'date'      => __('From 2021-09-01 until today'),
                    'text'      => __('In addition to my main job at LASE PeCo, I support and consult my old colleague at Meier AG with the planning and organisation of several projects.'),
                ],
                [
                    'title'     => __('Freelancer'),
                    'workplace' => __('Germany'),
                    'date'      => __('From 2020 until today'),
                    'text'      => __('In addition to my education, I have been freelancing in the field of website development and online hosting, for a couple of restaurants and small start-up companies in Wesel. I also created a program for ordering and storage, with the employees.'),
                ],
                [
                    'title'     => __('Training as IT Specialist For Application Development / Junior Software Developer'),
                    'workplace' => 'Meier AG / Wesel',
                    'date'      => __('from 2018 to 2021-08-31'),
                    'text'      => __('During my apprenticeship and employment, I implemented many one-pager websites for various clients from different industries. I also worked with the team on various custom online shops and platforms using Laravel and Vue. I was responsible for planning the database structure, implementation, web user interfaces of various API interfaces (Paypal - ImmoScout24 - Coinbase - etc.).'),
                ],
                [
                    'title'     => __('Assistant (salesman)'),
                    'workplace' => 'Kochlöffel, Wesel',
                    'date'      => __('From 2018 to 2019'),
                    'text'      => __('In my first year of apprenticeship as an IT specialist for application development, I worked as a temp at Kochlöffel. And I was responsible for entering the data and admission of the goods in the warehouse. Also ordering goods and help on the cashier and be friendly service of the customers.'),
                ],
                [
                    'title'     => __('Assistant (salesman)'),
                    'workplace' => 'Café Extrablatt, Wesel',
                    'date'      => __('From 2017 to 2018'),
                    'text'      => __('While I was taking part in various German courses, I worked as a temp at Extrablatt. My duties included the following activities: Responsible for the registration of the acceptance and recording of the goods in the warehouse. Safety measures for the equipment in the facility. Friendly service to customers. '),
                ],
            ],
            'skills'      => [
                'code'       => [
                    'name'   => __('Code'),
                    'skills' => [
                        ['name'=>'PHP','logo'=>'PHPIcon'],
                        ['name'=>'Laravel','logo'=>'Laravel'],
                        ['name'=>'OOP','logo'=>'OOP'],
                        ['name'=>'PHPStrom','logo'=>'PHPStrom'],
                        ['name'=>'JavaScript','logo'=>'JavaScript'],
                        ['name'=>'Vue','logo'=>'Vue'],
                        ['name'=>'Alpine.js','logo'=>'Alpine'],
                        ['name'=>'Livewire','logo'=>'Livewire'],
                        ['name'=>'CSS','logo'=>'CSS'],
                        ['name'=>'Tailwind CSS','logo'=>'Tailwindcss'],
                        ['name'=>'Bootstrap','logo'=>'Bootstrap'],
                    ]

                ],
                'management' => [
                    'name'   => __('Management'),
                    'skills' => [
                        ['name'=>'Git','logo'=>'Git'],
                        ['name'=>'Github','logo'=>'Github'],
                        ['name'=>'Bitbucket','logo'=>'Bitbucket'],
                        ['name'=>'Jira - SCRUM','logo'=>'Jira'],
                        ['name'=>'Jira - Confluence','logo'=>'Jira'],
                    ],
                ],
                'testing'    => [
                    'name'   => __('Testing'),
                    'skills' => [
                        ['name'=>'Coverage testing','logo'=>'PHPUnitIcon'],
                        ['name'=>'Unit testing','logo'=>'PHPUnitIcon'],
                        ['name'=>'TDD','logo'=>'PHPUnitIcon'],
                    ],
                ],
                'databases'  => [
                    'name'   => __('Databases'),
                    'skills' => [
                        ['name'=>'MySQL','logo'=>'MySQL'],
                        ['name'=>'Datagrip','logo'=>'Datagrip'],
                    ],
                ],

                'other'     => [
                    'name'   => __('Other technologies'),
                    'skills' => [
                        ['name'=>'MVC','logo'=>'Laravel'],
                        ['name'=>'NPM','logo'=>'NPMIcon'],
                        ['name'=>'Yarn','logo'=>'Yarn'],
                        ['name'=>'Webpack','logo'=>'Webpack'],
                        ['name'=>'Vite','logo'=>'Vite'],
                        ['name'=>'SSH','logo'=>'SSH'],
                        ['name'=>'FTP/FTPS','logo'=>'SFTP'],
                        ['name'=>'JSON','logo'=>'JSON'],
                    ],
                ],
                'languages' => [
                    'name'   => __('Other skills'),
                    'skills' => [
                        ['name'=>__('German - C1'),'logo'=>'Language'],
                        ['name'=>__('English - B2'),'logo'=>'Language'],
                        ['name'=>__('Arabic - Native language'),'logo'=>'Language'],
                        ['name'=>__('Driving license'),'logo'=>'Drive'],
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
