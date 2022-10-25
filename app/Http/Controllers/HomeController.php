<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function __invoke(Request $request)
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
                    'name'   => __('CODE'),
                    'skills' => [
                        'PHP'                  => 80,
                        'Laravel'              => 80,
                        'OOP'                  => 80,
                        'PHPStrom'             => 80,
                        'JavaScript'           => 70,
                        'Vue'                  => 70,
                        'Alpine.js & Livewire' => 80,
                        'CSS'                  => 90,
                        'Tailwind CSS'         => 90,
                        'Bootstrap'            => 90,
                    ]

                ],
                'management' => [
                    'name'   => __('MANAGEMENT'),
                    'skills' => [
                        'Git'               => 80,
                        'Github'            => 80,
                        'Bitbucket'         => 70,
                        'Jira - SCRUM'      => 70,
                        'Jira - Confluence' => 70,
                    ],
                ],
                'testing'    => [
                    'name'   => __('TESTING'),
                    'skills' => [
                        'Coverage testing' => 80,
                        'Unit testing'     => 80,
                        'TDD'              => 80,
                    ],
                ],
                'databases'  => [
                    'name'   => __('DATABASES'),
                    'skills' => [
                        'MySQL'    => 80,
                        'Datagrip' => 90,
                    ],
                ],
                'other'      => [
                    'name'   => __('OTHER SKILLS'),
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
            ]
        ]);
    }
}
