<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Eventreg;
use Illuminate\Support\Facades\Redirect;
 
class DataController extends Controller
{
    /**
     * Store a new user.
     */
    function event_submit(Request $request)
    {
        $request->validate([
            'fname' => 'required|max:10',
            'lname' => 'required|max:10',
            'event_id' => 'required|in:A01,A02,A03,A04',
            'mobile' => 'required|regex:/^\d{8}$/',
            'email' => 'required|email',
            'date' => 'required|after_or_equal:today|date_format:Y-m-d',
        ]);
        $eventRegister = new Eventreg();
        $eventRegister->fname = $request->input('fname');
        $eventRegister->lname = $request->input('lname');
        $eventRegister->event_id = $request->input('event_id');
        $eventRegister->mobile = $request->input('mobile');
        $eventRegister->email = $request->input('email');
        $eventRegister->date = $request->input('date');
        $eventRegister->save();
        return Redirect::route('WellingActivitiesForElders.ActivitiesEvents'); //
}
}