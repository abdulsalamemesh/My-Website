<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class EducationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Inertia\Response
     */
    public function __invoke(Request $request)
    {

        return Inertia::render('Code/Education', [
            'educations' => [
                [
                    'title'     => __('Training as IT Specialist For Application Development'),
                    'ort' => 'Meier AG / Wesel',
                    'date'      => __('from 2018 to 2021'),
                ],
                [
                    'title'     => __('C1 language course'),
                    'ort' => 'HHU / Düsseldorf',
                    'date'      => __('from 2017 to 2018'),
                ],
                [
                    'title'     => __('Language courses up to B2 level'),
                    'ort' => 'VHS / Wesel',
                    'date'      => __('from 2016 to 2017'),
                ],
                [
                    'title'     => __('Business study'),
                    'ort' => 'Kairo Uni / Kairo',
                    'date'      => __('from 2013 to 2015'),
                ],
                [
                    'title'     => __('Business study'),
                    'ort' => 'Alepp Uni / Aleppo',
                    'date'      => __('from 2011 to 2013'),
                ],
            ]
        ]);
    }
}
