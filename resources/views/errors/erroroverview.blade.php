<?php
?>

@extends('layouts/mainlayout')
@section('content')
    <div class="container">
        <div class="erroroverview">
            <div class="companynames">
                <h3>the errors</h3>
                @foreach ($errors as $error)
                <p class="companyname">{{$error->CompanyName}}</p>
                @endforeach
            </div>
            <div class="errormessages">
                <h3>the messages</h3>
                @foreach($errors as $error)
                <p>{{$error->errorMessage}}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
