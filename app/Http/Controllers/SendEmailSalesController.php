<?php

namespace App\Http\Controllers;

use App\Mail\SendEmailSales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailSalesController extends Controller
{
    //
    function index()
    {
        return view('send_email_sales');
    }

    function send(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'message' => $request->message
        );

        Mail::to('salesbarrocintens@gmail.com')->send
        (new SendEmailSales($data));
        return back()->with('succes', 'thanks for contacting us');
    }
}
