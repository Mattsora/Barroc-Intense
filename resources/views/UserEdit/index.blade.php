<?php

?>
@extends('layouts/mainlayout')
@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <form action="{{ route('UserEdit.update', $userID->id)}}" method="POST">
                @csrf
                @method('PUT')
                <label for="">Naam</label><br>
                <input type="text" name="name" placeholder="{{$userID->name}}">
                <br><br>
                Email:<br>
                <input type="email" name="email" placeholder="{{$userID->email}}">
                <br><br>
                Password:<br>
                <input type="password" name="password" placeholder="Password">
                <br>
                <div class="btn">
                    <input type="submit" value="Submit">
                </div>
            </form>
            <div class="box">
                <h3>Persoonlijke info</h3>
                <p>{{$userID->name}}</p>
                <p>{{$userID->email}}</p>
            </div>
            <div class="box">
                <h3>Lease gegevens</h3>
                <p>{{$LeaseID[0]->name}} - {{$supplyName[0]->name}}</p>
            </div>
            <div class="box">
                <h3>Gekochte producten</h3>
                <p>{{$products[0]->name}} </p>
            </div>
        </div>
    </section>
    <style>
        .box {
            border: solid;
        }
        p {
            font-size : 18px;
        }
    </style>
