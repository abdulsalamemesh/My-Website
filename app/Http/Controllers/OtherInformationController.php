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
        return Inertia::render('Code/Other', [
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
                            'title'    => __('Graduation project'),
                            'subtitle' => __('Trainee management system'),
                            'text'     => [
                                __('Trainees in different training areas can use the system'),
                                __('to keep and manage their training-report portfolio.'),
                                __('The report books can be checked and signed by trainers.'),
                            ],
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
