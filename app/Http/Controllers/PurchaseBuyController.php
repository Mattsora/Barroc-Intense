<?php

namespace App\Http\Controllers;

use App\purchase;
use App\purchase_rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseBuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        purchase::insert([
            'user_id'           => Auth::user()->id
        ]);

        $id = purchase::max('id');
        purchase_rules::insert([
            'purchase_id' => $id,
            'supply_id' => $request->Dropdown1
        ]);
        purchase_rules::insert([
            'purchase_id' => $id,
            'supply_id' => $request->Dropdown2
        ]);
        purchase_rules::insert([
            'purchase_id' => $id,
            'supply_id' => $request->Dropdown3
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
