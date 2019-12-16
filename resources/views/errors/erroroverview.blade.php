<?php
?>
@extends('layouts/mainlayout')
@section('content')
    <div class="container">
        <div class="erroroverview">
            <div class="companynames">
                <h3>Gebruiker</h3>
                @foreach ($errors as $error)
{{--                <p class="companyname">{{$error->CompanyName}}</p>--}}
                    <a  href="{{ route('error.show', [$error->id]) }}" > {{$error->CompanyName}} </a>
                @endforeach
            </div>
            <div class="errormessages">
                <h3>Storingbericht</h3>
                @foreach($errors as $error)
                <p>{{$error->errorMessage}}</p>
                @endforeach
            </div>
        </div>
    </div>
    <style>
        .companynames a:link, a:visited {
            background-color: #f44336;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

       .companynames a:hover, a:active {
            background-color: red;
        }
    </style>
@endsection
