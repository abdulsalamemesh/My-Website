<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Inertia\Response
     */
    public function __invoke(Request $request)
    {
        return Inertia::render('Code/Blade/Project', [
            'projects' =>
                [
                    [
                        'title' => __('Dipos online shop'),
                        'text' => __('A custom-made multilingual online Shop where you can shop for your next screen protection foils for any device. The system has an admin area where the admin can upload weekly an over 500 MB CSV file with the new products and export the new orders.'),
                        'hashtags' => '#'. __('Teamwork') .' #'. __('API') .' #'. __('Export') .' #'. __('Import') .' #'. __('Orders') ,
                        'link' => 'shop.dipos.de'
                    ],
                    [
                        'title' => __('Apprentices Management System'),
                        'text' => __('Trainees in different training areas can use the system to carry out, sign and manage their report books. The report books can be checked, controlled and signed by trainers.'),
                        'hashtags' =>'#'. __('Individual-work') .' #'. __('Export') .' #PDF #'. __('Permissions')  ,
                        'link' => 'azubi.ideenkonzept.de'
                    ],
                    [
                        'title' => 'Cloud LASE',
                        'text' =>__('A Laravel multi tenancy cloud based platform with supervision area, where the Clients can connect their own Laser counting devices in an automated process. The platform is also responsible for the aggregation of the data and generating statistic.'),
                        'hashtags' =>'#'. __('Teamwork').' #'. __('API').' #'. __('Data-aggregation').' #'. __('Multi-Tenancy').' #'. __('Statistics').' #'. __('Permissions'),
                        'link' =>'cloud-lase.com',
                    ],
                    [
                        'title' =>__('My portfolio'),
                        'text' =>__('I built my portfolio with the following technologies: latest Laravel version and PHP version - Inertiajs - Vue - Vite - Tauilwindcss - PostCss.'),
                        'hashtags' => '#'.__('Individual-work') .' #'.__('Custom'),
                        'link' =>'abdulsalam-emesh.me',
                    ],
                    [
                        'title' =>'What to do API',
                        'text' =>__('A small API that gives you random tasks when you don\'t know what to do. The website uses DeepL.com API interface to translate the tasks into different languages. It has a user interface to add new tasks.'),
                        'hashtags' =>'#'. __('Individual-work') .' #'. __('API'),
                        'link' =>'what-to-do-api.com',
                    ],
                ]
        ]);
    }
}
