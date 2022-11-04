<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class OtherInformationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function __invoke(Request $request)
    {
        return Inertia::render('Code/Blade/Other', [
            'information' =>
                [
                    'hobbies'      => [
                        __('Swimming'),
                        __('Music'),
                        __('Programming'),
                        __('Cycling'),
                        __('Archery'),
                    ],
                    'achievements' => [
                        [
                            'title'    => __('Training as IT Specialist For Application Development'),
                            'subtitle' => 2021,
                            'text'     => [],
                        ],
                        [
                            'title'    => __('German courses from A1 to C1'),
                            'subtitle' => 2017 - 2018,
                            'text'     => [],
                        ],
                        [
                            'title'    => __('Driving license'),
                            'subtitle' => __('Class B'),
                            'text'     => [],
                        ],
                    ],
                    'references'   => [
                        [
                            'name'  => 'Ahmed Dabak',
                            'ort'   => __('Meier AG / Software Developer'),
                            'phone' => '+49 152 020 87576',
                            'email' => 'a.dabak@meier-ag.com'
                        ],
                        [
                            'name'  => 'Monika Ibrom',
                            'ort'   => __('Kochlöffel GmbH/ Branch Manager'),
                            'phone' => '+49 281 15996',
                            'email' => 'kl@kochloeffel.de'
                        ],
                    ],
                ]
        ]);
    }
}
