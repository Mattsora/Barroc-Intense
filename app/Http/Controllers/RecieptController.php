<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reciept;
use App\User;
use App;

class RecieptController extends Controller
{
    public function index()
    {
        $users = User::all();
      
        return view('Maintenance/reciept', ['users' => $users]);
     
    }
    public function create()
    {
        
        return view('privacy');
    }
    public function store(Request $request)
    {
       
        Reciept::insert([
            'user_id'   => $request->user_id,
            'lease_id'   => 1,
            'description'   => $request->description,
        ]);
        return view('Maintenance/success');
    }

}
