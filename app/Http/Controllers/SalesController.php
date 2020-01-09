<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\quotations;
use App;
use Illuminate\Http\Request;

class SalesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ( auth()->user()!==null && auth()->user()->role_id == 2 ) {
            $users = User::all();
            $quotations = quotations::all();
            return view('sales/index', ['users' => $users], ['quotations' => $quotations]);
        }
        else{
            ?>
            <script type="text/javascript">
                alert("Access Denied.");
                window.location = "/login";
            </script>
            <?php
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = \App\Roles::all();
        return view('auth/register', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::insert([

            'name'      => $request->name,
            'email'     => $request->email,
            'role_id'   => 7,
            'password'  => $request->password
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
