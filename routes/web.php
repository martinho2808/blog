<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DataController;

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

Route::get('/', [PageController::class, 'index'])->name('Home');
Route::get('/AboutUs', [PageController::class, 'AboutUs'])->name('AboutUs');
Route::get('/ContactUs', [PageController::class, 'ContactUs'])->name('ContactUs');


Route::group(['prefix' => 'NewServicesCourses'], function () {
    Route::get('/', [PageController::class, 'NewServicesCourses'])->name('NewServicesCourses');
    Route::get('/DigitalEmpowerment', [PageController::class, 'DigitalEmpowerment'])->name('NewServicesCourses.DigitalEmpowerment');
    Route::get('/CraftingCareers', [PageController::class, 'CraftingCareers'])->name('NewServicesCourses.CraftingCareers');
    Route::get('/EnglishFluencyBootcamp', [PageController::class, 'EnglishFluencyBootcamp'])->name('NewServicesCourses.EnglishFluencyBootcamp');
    // Add more subpage routes as needed
});

Route::group(['prefix' => 'WellingActivitiesForElders'], function () {
    Route::get('/', [PageController::class, 'WellingActivitiesForElders'])->name('WellingActivitiesForElders');
    Route::get('/ActivitiesEvents', [PageController::class, 'ActivitiesEvents'])->name('WellingActivitiesForElders.ActivitiesEvents');
    Route::get('/HealthWellness', [PageController::class, 'HealthWellness'])->name('WellingActivitiesForElders.HealthWellness');
    Route::get('/ResourcesSupport', [PageController::class, 'ResourcesSupport'])->name('WellingActivitiesForElders.ResourcesSupport');
    // Add more subpage routes as needed
});
Route::group(['prefix' => 'WellbeingForYouths'], function () {
    Route::get('/', [PageController::class, 'WellbeingForYouths'])->name('WellbeingForYouths');
    Route::get('/MentalHealth', [PageController::class, 'MentalHealth'])->name('WellbeingForYouths.MentalHealth');
    Route::get('/PhysicalWellBeing', [PageController::class, 'PhysicalWellBeing'])->name('WellbeingForYouths.PhysicalWellBeing');
    // Add more subpage routes as needed
});
Route::group(['prefix' => 'YouthServices'], function () {
    Route::get('/', [PageController::class, 'YouthServices'])->name('YouthServices');
    Route::get('/Volunteeractivities', [PageController::class, 'Volunteeractivities'])->name('YouthServices.Volunteeractivities');
    Route::get('/Leadershipskillstraining', [PageController::class, 'Leadershipskillstraining'])->name('YouthServices.Leadershipskillstraining');
    Route::get('/Seminarforschool', [PageController::class, 'Seminarforschool'])->name('YouthServices.Seminarforschool');
    // Add more subpage routes as needed
});