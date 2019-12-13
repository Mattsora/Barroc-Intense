<?php

namespace App\Http\Controllers;

use App\Offerte;
use Illuminate\Http\Request;

class offerteController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'Offerte']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/Offerte');
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
        $this->validate($request, [
            'voornaam'          => 'required|max:50',
            'achternaam'          => 'required|max:50',
            'email'         => 'required|max:200',
            'nummer'         => 'required|max:40',
            'vraag'  => 'required|max:1000'
        ]);
            Offerte::insert([
                'voornaam' => $request->voornaam,
                'achternaam' => $request->achternaam,
                'email' => $request->email,
                'nummer' => $request->nummer,
                'vraag' => $request->vraag
            ]);
        return redirect()->route('/offerte');
    }

    /**
     * Display the specified resource.
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 1. id ophalen ($id)
        // 2. 1 categorie selecteren uit database
        // 3. show template returnen met opgehaalde data

        return view('/Offerte');
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
