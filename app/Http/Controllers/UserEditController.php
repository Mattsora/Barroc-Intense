<?php

namespace App\Http\Controllers;

use App\purchase;
use App\purchase_rules;
use App\supplies;
use App\User;
use App\Lease;
use App\LeaseType;
use App\lease_rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $idUser =  Auth::user();
        $lease = Lease::where('customer_id', $id)->get();
        $leaseID = $lease[0]->id;
        $test = lease_rules::all();
        $supplyID = lease_rules::where('lease_id', $leaseID)->get();
        $supplyName = supplies::where('id', $supplyID[0]->supply_id)->get();
        $leaseTest = $lease[0]->lease_type_id;
        $Type = LeaseType::where('id', $leaseTest)->get();

        $purchaseID = purchase::where('user_id', $id)->get();
        $PurchaseName = purchase_rules::where('purchase_id', $purchaseID[0]->id)->get();
        $products = supplies::where('id', $PurchaseName[0]->supply_id)->get();

        return view('UserEdit/index', ['userID' => $idUser, 'LeaseID' => $Type, 'supplyName' => $supplyName, 'products' => $products]);
    }

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
        $id = User::find($id);

        $id->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return view('welcome');
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
