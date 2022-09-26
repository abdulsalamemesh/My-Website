<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WorkExperienceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function __invoke(Request $request)
    {

        return Inertia::render('Code/Work', [
            'experiences' => [
                [
                    'title'     => __('Software Developer'),
                    'workplace' => 'LASE PeCo Systemtechnik GmbH',
                    'date'      => __('From 2021-09-01 until today'),
                    'text'      => [],
                    'pointBullets' => []
                ],
                [
                    'title'     => __('Freelancer'),
                    'workplace' => null,
                    'date'      => __('From 2019 until today'),
                    'text'      => [
                        __('In addition to my education, I have been freelancing in the field'),
                        __('of website development and online hosting,'),
                        __('for a couple of restaurants in Wesel.'),
                        __('I also created a program for ordering and storage, with the employees.'),
                    ],
                    'pointBullets' => []
                ],
                [
                    'title'     => __('Assistant (salesman)'),
                    'workplace' => 'Kochlöffel, Wesel',
                    'date'      => __('From 2018 to 2019'),
                    'text'      => [
                        __('In the first year of my apprenticeship as an IT specialist'),
                        __('for development, I worked as a temp at the Kochlöffel worked'),
                    ],
                    'pointBullets' =>[
                        __('Responsible for the registration of the acceptance and recording of the goods in the warehouse.'),
                        __('Purchase orders for goods.'),
                        __('Cashier and friendly customer service'),
                    ]
                ],
                [
                    'title'     => __('Assistant (salesman)'),
                    'workplace' => 'Café Extrablatt, Wesel',
                    'date'      => __('From 2017 to 2018'),
                    'text'      => [
                        __('While I was taking part in various German courses,'),
                        __('I worked as a temporary as a temp at Extrablatt.'),
                        __('My duties included the following activities:'),
                    ],
                    'pointBullets' =>[
                        __('Responsible for the registration of the acceptance and recording of the goods in the warehouse.'),
                        __('Safety measures for the equipment in the facility.'),
                        __('Friendly service to customers.'),
                    ]
                ],
                [
                    'title'     => __('Project Management'),
                    'workplace' => 'Datasoft, Kairo, Ägypten',
                    'date'      => __('From 2013 to 2015'),
                    'text'      => [
                        __('In the last two years of my business studies I was employed by'),
                        __('Datasoft as a part-time project manager.'),
                        __('Thereby my my scope of duties expanded to the following:'),
                    ],
                    'pointBullets' =>[
                        __('Leading a team consisting of three people.'),
                        __('Planning and organizing projects.'),
                        __('Supervision during project implementation.'),
                    ]
                ],
                [
                    'title'     => __('Assistant'),
                    'workplace' => 'Syriansoft, Aleppo',
                    'date'      => __('From 2013 to 2015'), //
                    'text'      => [
                        __('During the first two years of my business studies,'), //
                        __('I had a part-time part-time job as a temp at Syriansoft.'), //
                        __('My area of responsibility included the following tasks:'), //
                    ],
                    'pointBullets' =>[
                        __('Establish contact with the various customers.'), //
                        __('Responsible for gathering necessary information for projects.'), //
                        __('Analysis of the collected information.'), //
                    ]
                ],
            ]
        ]);
    }
}
