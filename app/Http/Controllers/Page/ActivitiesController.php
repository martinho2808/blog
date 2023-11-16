<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    //Well Being Activities for Elders

    public function WellingActivitiesForElders()
    {
        return view('website.wellingactivitiesforelders.WellingActivitiesForElders', [
            'title' => 'Welling & activities for elders'
        ]);
    }

    public function ActivitiesEvents()
    {
        return view('website.wellingactivitiesforelders.ActivitiesEvents', [
            'title' => 'Activities Events'
        ]);
    }

    public function HealthWellness()
    {
        return view('website.wellingactivitiesforelders.HealthWellness', [
            'title' => 'Health Wellness'
        ]);
    }

    public function ResourcesSupport()
    {
        return view('website.wellingactivitiesforelders.ResourcesSupport', [
            'title' => 'Resources Support'
        ]);
    }

}
