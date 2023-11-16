<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WellBeingYouthController extends Controller
{
    //Well Being for Youths
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
}
