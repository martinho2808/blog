<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WellBeingYouthController extends Controller
{
    /*control url display view and titile */
    public function WellBeingForYouths()
    {
        return view('website.wellbeingforyouths.WellBeingForYouths', [
            'title' => 'Welling for Youths'
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
