<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\OtherInformationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\WorkExperienceController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'index');
Route::get('loading', fn() => Inertia::render('Code/Loading'))->name('loading');
Route::get('index', fn() => Inertia::render('Code/Index'))->name('index');
Route::get('me', fn() => Inertia::render('Code/Me'))->name('me');
Route::get('work', WorkExperienceController::class)->name('work');
Route::get('education', EducationController::class)->name('education');
Route::get('skill', SkillController::class)->name('skill');
Route::get('other-information', OtherInformationController::class)->name('other-information');
Route::get('web', fn() => Inertia::render('Code/Web'))->name('web');
Route::get('layout', fn() => Inertia::render('Code/Layout'))->name('layout');
Route::get('language/{language}', function ($language) {
    Session()->put('locale', $language);

    return redirect()->back();
})->name('language');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
