<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        return Inertia::render('Dashboard',['contacts' => Contact::query()->orderByDesc('id')->get()]);
    }


    public function setRead(Request $request): \Illuminate\Http\RedirectResponse
    {
       $contact = Contact::find($request->get('id'));
       $contact->update(['read_at' => now()]);
        return Redirect::route('dashboard');
    }
}
