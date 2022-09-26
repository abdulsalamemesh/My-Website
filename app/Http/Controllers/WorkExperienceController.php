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
                    'title'     => __('Assistant (salesman)'),  //Aushilfe (Verkäufer)
                    'workplace' => 'Kochlöffel, Wesel',
                    'date'      => __('From 2018 until 2019'), //Von 2018 bis 2019
                    'text'      => [
                        __('In the first year of my apprenticeship as an IT specialist'), // Im ersten Ausbildungsjahr zum Fachinformatiker für Anwendungsentwicklung
                        __('for development, I worked as a temp at the Kochlöffel worked'), // habe ich als Aushilfe beim Kochlöffel gearbeitet
                    ],
                    'pointBullets' =>[
                        __('Responsible for the registration of the acceptance and recording of the goods in the warehouse.'), // Zuständig für die Eintragung der Abnahme und Aufnahmen der Waren Im Lager
                        __('Purchase orders for goods.'), // Bestellungen von Waren.
                        __('Cashier and friendly customer service'), // Kassierer und freundliche Bedienung der Kunden
                    ]
                ],
            ]
        ]);
    }
}
