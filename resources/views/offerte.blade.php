<?php
?>

@extends('layouts/mainlayout')
@section('content')


<div class="container">

    <form action="{{ route('offerte.store') }}" class="offerte" method="post">
        @csrf
        <h1>
            Contactformulier Offerte
        </h1>
        <label for="voornaam">Voornaam</label>
        <input type="text" id="voornaam" name="voornaam" placeholder="Uw naam..." required>

        <label for="achternaam">Achternaam</label>
        <input type="text" id="achternaam" name="achternaam" placeholder="Uw achternaam.." required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Uw E-mail.." required>

        <label for="nummer">Telefoonnummer</label>
        <input type="tel" id="nummer" name="nummer" placeholder="Uw telefoonnummer.." required>

        <label for="vraag">Uw vraag</label>
        <textarea id="vraag" name="vraag" placeholder="Type hier iets..." style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>
</div>
@endsection
<b></b>
