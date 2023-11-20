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

    public function ContactUs()
    {
        return view('website.contactus', [
            'title' => 'Contact / Support us'
        ]);
    }
    public function Gallery()
    {
        return view('website.gallery', [
            'title' => 'Gallery'
        ]);
    }
}