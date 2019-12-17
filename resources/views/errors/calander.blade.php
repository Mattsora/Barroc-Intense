@extends('layouts/mainlayout')
<h2>Kalender</h2>
<div class="calander">
    @foreach($errors as $error)
     <p>{{$error->planned}}</p>
        <p>{{$error->errorMessage}}</p>
    <p>{{$error ->customer->name }} </p>
        <p>--------------------------------------------------------------</p>
    @endforeach
</div>
<style>

    .calander {
        display: inline-block;
        margin-left: 44%;
        border: solid;
    }
    h2 {
        text-align: center;
    }
</style>


