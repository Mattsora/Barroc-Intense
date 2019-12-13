<?php
?>

@extends('layouts/mainlayout')
@section('content')
    <div class="container">
        <div class="erroroverview">
            <div class="companynames">
                <h3>Gebruiker</h3>
                @foreach ($users as $user)
                    <p class="companyname">{{$user->name}}</p>
                @endforeach
            </div>
            <div class="errormessages">
                <h3>Start datum</h3>
                @foreach($contracts as $contract)
                    <p>{{$contract->start_date}}</p>
                @endforeach
            </div>
            <div class="errormessages">
                <h3>Eind datum</h3>
                @foreach($contracts as $contract)
                    <p>{{$contract->end_date}}</p>
                @endforeach
            </div>
            <div class="errormessages">
                <h3>Contract type</h3>
                @foreach($contracttypes as $contracttype)
                    <p>{{$contracttype->name}}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
