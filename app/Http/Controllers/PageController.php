<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use views;

class PageController extends Controller
{
    public function index()
    {
        return view('website.home', [
            'title' => 'HomePage'
        ]);
    }

    public function AboutUs()
    {
        return view('website.aboutus', [
            'title' => 'About US'
        ]);
    }

    public function NewServicesCourses()
    {
        return view('website.newservicescourses.NewServicesCourses', [
            'title' => 'New services & courses'
        ]);
    }

    public function CraftingCareers()
    {
        return view('website.newservicescourses.CraftingCareers', [
            'title' => 'Crafting Careers'
        ]);
    }

    public function DigitalEmpowerment()
    {
        return view('website.newservicescourses.DigitalEmpowerment', [
            'title' => 'Digital Empowerment'
        ]);
    }

    public function EnglishFluencyBootcamp()
    {
        return view('website.newservicescourses.EnglishFluencyBootcamp', [
            'title' => 'English Fluency Bootcamp'
        ]);
    }

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
    public function WellBeingForYouths()
    {
        return view('website.wellbeingforyouths.WellBeingForYouths', [
            'title' => 'Well Being For Youths'
        ]);
    }

    public function MentalHealth()
    {
        return view('website.wellbeingforyouths.MentalHealth', [
            'title' => 'Mental Health'
        ]);
    }

    public function PhysicalWellBeing()
    {
        return view('website.wellbeingforyouths.PhysicalWellBeing', [
            'title' => 'Physical Well Being'
        ]);
    }

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

    public function ContactUs()
    {
        return view('website.contactus', [
            'title' => 'Contact US'
        ]);
    }
}