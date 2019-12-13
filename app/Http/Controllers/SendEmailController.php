<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use\App\Mail\SendEmail;


class SendEmailController extends Controller
{
    function index()
    {
        return view('send_email');
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>  $request->message
        );

        Mail::to('keesboot98@gmail.com')->send
        (new SendEmail($data));
        return back()->with('succes', 'thanks for contacting us');
    }
}