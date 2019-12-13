<?php

namespace App\Http\Controllers;

use App\supplies;
use Illuminate\Http\Request;
use App\prijsopgave;

class prijsopgaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prijsopgaves = prijsopgave::all();
        return view('prijsopgave/index', ['prijsopgaves' => $prijsopgaves]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $supplies = supplies::all();
        $prijsopgave = prijsopgave::all();
        return view('prijsopgave/create', ['prijsopgave'=>$prijsopgave, 'supplies'=>$supplies]);
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

        prijsopgave::insert([
            'customer_id'          =>  $request->customer_id,
            'start_date'           =>  $request->start_date,
            'end_date'             =>  $request->end_date,
            'supply_id'            =>  $request->supply_id,
            'supply_id1'           =>  $request->supply_id1,
            'supply_id2'           =>  $request->supply_id2,
            'count'                =>  $request->count,
            'count1'               =>  $request->count1,
            'count2'               =>  $request->count2
        ]);
        return view('prijsopgave/index');
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
        $supplies = \DB::select('select supplies.id, supplies.name FROM supplies
        INNER JOIN prijsopgaves
        ON supplies.id = prijsopgaves.supply_id
        WHERE supplies.id = prijsopgaves.supply_id
        ');
        $prijsopgave = prijsopgave::find($id);

        return view('prijsopgave/show', ['prijsopgave' => $prijsopgave, 'supplies' => $supplies] );
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
