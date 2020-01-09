<?php

namespace App\Http\Controllers;

use App\Bkrcheckmdl;
use App\Http\Middleware\RoleCheck;
use Illuminate\Http\Request;
/*use Illuminate\Support\Facades\Auth;*/

class BkrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if ( auth()->user()!==null && auth()->user()->role_id == 2 ){
            $bkr = Bkrcheckmdl::all();
            return view('bkrcheck', ['bkr' => $bkr]);


        }
        else {
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
