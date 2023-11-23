<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /*control url display view and titile */
    public function YouthServices()
    {
        return view('website.youthServices.YouthServices', [
            'title' => 'Youth services'
        ]);
    }

    public function Leadershipskillstraining()
    {
        return view('website.youthServices.Leadershipskillstraining', [
            'title' => 'Leadership Skill Straining'
        ]);
    }

    public function Seminarforschool()
    {
        return view('website.youthServices.Seminarforschool', [
            'title' => 'Seminar for School'
        ]);
    }

    public function Volunteeractivities()
    {
        return view('website.youthServices.Volunteeractivities', [
            'title' => 'Volunteer activities'
        ]);
    }
}
