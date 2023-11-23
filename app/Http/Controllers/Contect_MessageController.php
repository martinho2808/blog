<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Contect_Message;
use Illuminate\Support\Facades\Redirect;
 
class Contect_MessageController extends Controller
{
    /* submit db function */
    function contect_request(Request $request)
    {
        /* Data validation */
        $request->validate([
            'contect_name' =>'required|regex:/^[a-zA-Z\s]+$/',
            'contect_email' => 'required|email',
            'message' => 'required',
        ]);
        /* call model and set data insert to table */
        $eventRegister = new Contect_Message();
        $eventRegister->contect_name = $request->input('contect_name');
        $eventRegister->contect_email = $request->input('contect_email');
        $eventRegister->message = $request->input('message');
        $eventRegister->save();
        /* set session and return to website */
        $request->session()->flash('success');
        return Redirect::route('ContactUs'); //
}
}