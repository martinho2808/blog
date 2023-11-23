<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /*control url display view and titile */
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
}
