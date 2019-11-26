<?php
?>

@extends('layouts/mainlayout')
@section('content')
    <section class="jumbotron text-center">
        <div class="container">

            <h2>Storing Melden</h2>

            <form action="{{ route('error.store') }}" class="offerte" method="post">
                @csrf
                <label for="CompanyName">Naam Bedrijf</label>
                <input type="text" id="CompanyName" name="CompanyName" placeholder="Uw bedrijfsnaam..." required>

                <label for="errorMessage">Storing</label>
                <textarea type="textarea" id="errorMessage" name="errorMessage" placeholder="Bericht hier uw storing... (Lokatie, storingomvang, etc.)" required></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
    </section>

@endsection
