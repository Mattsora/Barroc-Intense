<?php
?>

@extends('layouts/mainlayout')
@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <form action="{{ route('finance.store') }}" class="offerte" method="post">
                @csrf

                <label for="customer_id">Klant nummer</label>
                <input type="text" id="customer_id" name="customer_id" required>

                <label for="start_date">Start datum</label>
                <input type="date" id="start_date" name="start_date" required>

                <label for="end_date">Eind datum</label>
                <input type="date" id="end_date" name="end_date" required>

                <label for="lease_type">Contract type</label>
                <select name="lease_type" id="lease_type">
                    @foreach ($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>

                <input type="submit" value="Submit">
            </form>
        </div>
    </section>
@endsection
