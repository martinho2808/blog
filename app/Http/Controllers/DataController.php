<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Eventreg;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
 
class DataController extends Controller
{
    /* submit db function */
    function event_submit(Request $request)
    {
        /* Data validation */
        $request->validate([
            'user_name' =>'required',
            'fname' => 'required|max:10|regex:/^[a-zA-Z\s]+$/',
            'lname' => 'required|max:10|regex:/^[a-zA-Z\s]+$/',
            'event_name' => [
                'required',
                /* According to the data changes in the db, it also needs to be obtained dynamically  */
                Rule::in(DB::table('event_information')->pluck('event_name')->toArray())
            ],
            'mobile' => 'required|regex:/^\d{8}$/',
            'date' => 'required|after_or_equal:today|date_format:Y-m-d',
        ]);
        /* call model and set data insert to table */
        $eventRegister = new Eventreg();
        $eventRegister->fname = $request->input('fname');
        $eventRegister->lname = $request->input('lname');
        $eventRegister->event_name = $request->input('event_name');
        $eventRegister->mobile = $request->input('mobile');
        $eventRegister->date = $request->input('date');
        $eventRegister->save();
        /* set session and return to website */
        $request->session()->flash('success');
        return Redirect::route('WellingActivitiesForElders.ActivitiesEvents'); //
}
}