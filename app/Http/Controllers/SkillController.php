<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SkillController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function __invoke(Request $request)
    {
        return Inertia::render('Code/Blade/Skill', [
            'skills' =>
                [
                    'PHP',
                    'Laravel',
                    'PHPStrom',
                    'Git',
                    'Github',
                    'Bitbucket',
                    'Jira - SCRUM',
                    'Jira - Confluence',
                    'MySQL',
                    'Datagrip',
                    'JavaScript',
                    'Vue',
                    'Alpine.js',
                    'CSS',
                    'Tailwind CSS',
                    'Bootstrap',
                    'NPM',
                    'Yarn',
                    'Webpack',
                    'Vite',
                    'SSH',
                    'MVC',
                    'OOP',
                    'Coverage testing',
                    'Unit testing',
                    'TDD',
                ]
        ]);
    }
}
