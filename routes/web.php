<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\Page\CoursesController;
use App\Http\Controllers\Page\ActivitiesController;
use App\Http\Controllers\Page\WellBeingYouthController;
use App\Http\Controllers\Page\ServicesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/a', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', [PageController::class, 'index'])->name('Home');
Route::get('/Home', [PageController::class, 'index'])->name('Home');
Route::get('/AboutUs', [PageController::class, 'AboutUs'])->name('AboutUs');
Route::get('/ContactUs', [PageController::class, 'ContactUs'])->name('ContactUs');
Route::get('/Gallery', [PageController::class, 'Gallery'])->name('Gallery');



Route::group(['prefix' => 'NewServicesCourses'], function () {
    Route::get('/', [CoursesController::class, 'NewServicesCourses'])->name('NewServicesCourses');
    Route::get('/DigitalEmpowerment', [CoursesController::class, 'DigitalEmpowerment'])->name('NewServicesCourses.DigitalEmpowerment');
    Route::get('/CraftingCareers', [CoursesController::class, 'CraftingCareers'])->name('NewServicesCourses.CraftingCareers');
    Route::get('/EnglishFluencyBootcamp', [CoursesController::class, 'EnglishFluencyBootcamp'])->name('NewServicesCourses.EnglishFluencyBootcamp');
    // Add more subpage routes as needed
});

Route::group(['prefix' => 'WellingActivitiesForElders'], function () {
    Route::get('/', [ActivitiesController::class, 'WellingActivitiesForElders'])->name('WellingActivitiesForElders');
    Route::get('/ActivitiesEvents', [ActivitiesController::class, 'ActivitiesEvents'])->middleware(['auth', 'verified'])->name('WellingActivitiesForElders.ActivitiesEvents');
    Route::get('/HealthWellness', [ActivitiesController::class, 'HealthWellness'])->name('WellingActivitiesForElders.HealthWellness');
    Route::get('/ResourcesSupport', [ActivitiesController::class, 'ResourcesSupport'])->name('WellingActivitiesForElders.ResourcesSupport');
    // Add more subpage routes as needed
});
Route::group(['prefix' => 'WellbeingForYouths'], function () {
    Route::get('/', [WellBeingYouthController::class, 'WellbeingForYouths'])->name('WellbeingForYouths');
    Route::get('/MentalHealth', [WellBeingYouthController::class, 'MentalHealth'])->name('WellbeingForYouths.MentalHealth');
    Route::get('/PhysicalWellBeing', [WellBeingYouthController::class, 'PhysicalWellBeing'])->name('WellbeingForYouths.PhysicalWellBeing');
    // Add more subpage routes as needed
});
Route::group(['prefix' => 'YouthServices'], function () {
    Route::get('/', [ServicesController::class, 'YouthServices'])->name('YouthServices');
    Route::get('/Volunteeractivities', [ServicesController::class, 'Volunteeractivities'])->name('YouthServices.Volunteeractivities');
    Route::get('/Leadershipskillstraining', [ServicesController::class, 'Leadershipskillstraining'])->name('YouthServices.Leadershipskillstraining');
    Route::get('/Seminarforschool', [ServicesController::class, 'Seminarforschool'])->name('YouthServices.Seminarforschool');
    // Add more subpage routes as needed
});
require __DIR__.'/auth.php';
