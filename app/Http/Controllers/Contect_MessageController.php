<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Contect_Message;
use Illuminate\Support\Facades\Redirect;
 
class Contect_MessageController extends Controller
{
    /**
     * Store a new user.
     */
    function contect_request(Request $request)
    {
        $request->validate([
            'contect_name' =>'required|regex:/^[a-zA-Z\s]+$/',
            'contect_email' => 'required|email',
            'message' => 'required',
        ]);
        $eventRegister = new Contect_Message();
        $eventRegister->contect_name = $request->input('contect_name');
        $eventRegister->contect_email = $request->input('contect_email');
        $eventRegister->message = $request->input('message');
        $eventRegister->save();
        return Redirect::route('ContactUs'); //
}
}