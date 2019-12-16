<?php

namespace App\Http\Controllers;

use App\error;
use App\User;
use Illuminate\Http\Request;

class errorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = user::all();
        return view('errors/index', ['users'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        error::insert([
            'errorMessage'          =>  $request->errorMessage,
            'CompanyName'           =>  $request->CompanyName
        ]);
        return redirect('error');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $error = error::where('id', $id)->get();
        $users = User::all();
        return view('errors/planner', ['error' => $error, 'users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


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
        $error = error::findOrFail($id);
        $error->update([
            'planned' =>  $request->date,
            'user_id' => $request->Dropdown1
        ]);
        $errorCalander = error::all();
        return view('errors/calander', ['errors'=>$errorCalander]);


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

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function erroroverview()
    {
        $error = error::all();
        return view('errors/erroroverview', ['errors'=>$error]);
    }
}
