<?php
?>


@extends('layouts/mainlayout')
@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h3><a href="{{ route('prijsopgave.create') }}">Prijsopgave aanmaken?</a></h3>

        </div>
    </section>
    <div class="container">
    @foreach ($prijsopgaves as $prijsopgave)
            <a href="prijsopgave/{{$prijsopgave->id}}" class="smallp"><p>{{$prijsopgave->id}}</p></a>

    @endforeach
    </div>
@endsection
