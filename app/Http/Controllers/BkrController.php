<?php

namespace App\Http\Controllers;

use App\Bkrcheckmdl;
use Illuminate\Http\Request;

class BkrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bkr = Bkrcheckmdl::all();
        return view('bkrcheck', ['bkr' => $bkr]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Bkrcheckmdl::find($id);

        return view('bkr_edit', ['company'=> $company]);
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
        $company = Bkrcheckmdl::find($id);

        if($request->bkr == 'Denied'){
            $bkr = 0;
        }
        else{
            $bkr = 1;
        }
        $company->update([
            'companyname' => $request ->companyname,
            'healthcheck' => $bkr

        ]);
        return redirect() ->action('BkrController@index');
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
