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

        return Inertia::render('Code/Blade/Work', [
            'experiences' => [
                [
                    'title'     => __('Software Developer'),
                    'workplace' => 'LASE PeCo Systemtechnik GmbH',
                    'date'      => __('From 2021-09-01 until today'),
                    'text'      => __('My area of responsibility is: Test driven development (TDD), planing, implementation and maintenance of two (Laravel and Vue) cloud based platforms as well as connecting and implementing the API of various types of new and old laser-counting devices to the clouds. Configuration and installation of a local server on a local PC for a laser scanner device and connecting it to the Internet. Aggregating and saving the data of the laser scanner devices and generating statistics from the data and displaying it in various implementations in the clouds (Excel, diagrams, pivot tables)')
                ],
                [
                    'title'     => __('Minijob Software Developer'),
                    'workplace' => __('Meier AG / Wesel'),
                    'date'      => __('From 2021-09-01 until today'),
                    'text'      => __('In addition to my main job at LASE PeCo, I support and consult my old colleague at Meier AG with the planning and organization of several projects.'),
                ],
                [
                    'title'     => __('Freelancer'),
                    'workplace' => null,
                    'date'      => __('From 2019 until today'),
                    'text'      => __('In addition to my education, I have been freelancing in the field of website development and online hosting, for a couple of restaurants and small start-up companies in Wesel. I also created a program for ordering and storage, with the employees.'),
                ],
                [
                    'title'     => __('Training as IT Specialist For Application Development / Junior Software Developer'),
                    'workplace' => __('Meier AG / Wesel'),
                    'date'      => __('from 2018 to 2021-08-31'),
                    'text'      => __('During my apprenticeship and employment, I implemented many one-pager websites for various clients from different industries. I also worked with the team on various custom online shops and platforms using Laravel and Vue. I was responsible for planning the database structure, implementation, web user interfaces of various API interfaces (Paypal - ImmoScout24 - Coinbase - etc.).'),
                ],
                [
                    'title'     => __('Assistant'),
                    'workplace' => 'Kochlöffel, Wesel',
                    'date'      => __('From 2018 to 2019'),
                    'text'      => __('In my first year of apprenticeship as an IT specialist for application development, I worked as a temp at Kochlöffel. And I was responsible for entering the data and admission of the goods in the warehouse. Also ordering goods and help on the cashier and be friendly service of the customers.'),

                ],
                [
                    'title'     => __('Assistant'),
                    'workplace' => 'Café Extrablatt, Wesel',
                    'date'      => __('From 2017 to 2018'),
                    'text'      => __('While I was taking part in various German courses, I worked as a temp at Extrablatt. My duties included the following activities: Responsible for the registration of the acceptance and recording of the goods in the warehouse. Safety measures for the equipment in the facility. Friendly service to customers.'),

                ],
            ]
        ]);
    }
}

