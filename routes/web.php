<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtherInformationController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('contact-form', [HomeController::class, 'contactForm'])->name('contact');

// REDIRECT
Route::get('loading', fn() => Inertia::render('Code/Loading'))->name('loading');

// BLADE
Route::get('index', fn() => Inertia::render('Code/Index'))->name('index');
Route::get('me', fn() => Inertia::render('Code/Me'))->name('me');
Route::get('work', WorkExperienceController::class)->name('work');
Route::get('education', EducationController::class)->name('education');
Route::get('skill', SkillController::class)->name('skill');
Route::get('other-information', OtherInformationController::class)->name('other-information');
Route::get('layout', fn() => Inertia::render('Code/Layout'))->name('layout');
Route::get('project', ProjectController::class)->name('project');

// ROOT
Route::get('env', fn() => Inertia::render('Code/Root/Env'))->name('env');
Route::get('env-example', fn() => Inertia::render('Code/Root/EnvExample'))->name('env-example');
Route::get('empty', fn() => Inertia::render('Code/Root/Empty'))->name('empty');
Route::get('gitignore-root', fn() => Inertia::render('Code/Root/GitignoreRoot'))->name('gitignore-root');
Route::get('artisan', fn() => Inertia::render('Code/Root/Artisan'))->name('artisan');
Route::get('composer', fn() => Inertia::render('Code/Root/Composer'))->name('composer');
Route::get('package', fn() => Inertia::render('Code/Root/Package'))->name('package');
Route::get('phpunit', fn() => Inertia::render('Code/Root/PHPUnit'))->name('phpunit');

//ROUTS
Route::get('web', fn() => Inertia::render('Code/Routes/Web'))->name('web');
Route::get('console-route', fn() => Inertia::render('Code/Routes/ConsoleRoute'))->name('console-route');
Route::get('channels', fn() => Inertia::render('Code/Routes/Channels'))->name('channels');
Route::get('api', fn() => Inertia::render('Code/Routes/API'))->name('api');



Route::get('language/{language}', function ($language) {
    Session()->put('locale', $language);
    return redirect()->back();
})->name('language');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::post('/dashboard/set-read', [DashboardController::class,'setRead'])->name('set-read');
});
