<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivitiesController extends Controller
{
    /*control url display view and titile */

    public function WellingActivitiesForElders()
    {
        return view('website.wellingactivitiesforelders.WellingActivitiesForElders', [
            'title' => 'Welling & activities for elders'
        ]);
    }

    public function ActivitiesEvents()
    {

        $eventlists = DB::table('event_information')->pluck('event_name')->toArray();
        return view('website.wellingactivitiesforelders.ActivitiesEvents', [
            'title' => 'Activities Events',
            'eventlists' => $eventlists
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
            'title' => 'What is dementia'
        ]);
    }

}
