<?php

namespace App\Http\Controllers;

use App\lease_contract;
use App\LeaseType;
use Illuminate\Http\Request;

class financeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('finance/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $types = LeaseType::all();
        return view('finance/create', ['types'=>$types]);

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
        lease_contract::insert([
            'customer_id'          =>  $request->customer_id,
            'start_date'           =>  $request->start_date,
            'end_date'             =>  $request->end_date,
            'lease_type'             =>  $request->lease_type
        ]);
        return view('finance/index');
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

    public function financecontractoverview()
    {
        $users = \DB::select('select users.id, users.role_id, users.name FROM users
        INNER JOIN lease_contracts
        ON users.id = lease_contracts.customer_id
        WHERE users.id = lease_contracts.customer_id');
        $contracttypes = \DB::select('select lease_type.id, lease_type.name FROM lease_type
        INNER JOIN lease_contracts
        ON lease_type.id = lease_contracts.lease_type
        WHERE lease_type.id = lease_contracts.lease_type');
        $contracts = lease_contract::all();
        return view('finance/contractoverview', ['contracts'=>$contracts,
            'users'=>$users,
            'contracttypes'=>$contracttypes]);
    }
}
