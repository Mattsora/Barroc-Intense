<?php
?>

@extends('layouts.mainlayout')
@section('content')
    <div class="container">
        <div class="companynames">
            @foreach ($errors as $error)
            <h3>{{$error->CompanyName}}</h3>
                @endforeach
            <div class="errormessages">
            @foreach($errors as $error)
                <p>{{$error->errorMessage}}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
