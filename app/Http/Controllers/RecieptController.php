<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reciept;
use App\User;
use App\Lease;
use App;

class RecieptController extends Controller
{
    public function index()
    {
        $_users = User::all();
        $_leases = Lease::all();
        
        return view('Maintenance/reciept', ['_users' => $_users],['_leases' => $_leases]);
     
    }
    public function create()
    {
        
        return view('privacy');
    }
    public function store(Request $request)
    {
       
        Reciept::insert([
            'user_id'   => $request->user_id,
            'lease_id'   => $request->lease_type_id,
            'description'   => $request->description,
        ]);
        return view('Maintenance/success');
    }

}
