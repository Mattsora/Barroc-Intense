<?php
?>

@extends('layouts/mainlayout')
@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <form action="{{ route('prijsopgave.store') }}" class="offerte" method="post">
                @csrf

                <label for="customer_id">Klant nummer</label>
                <input type="text" id="customer_id" name="customer_id" required>

                <label for="start_date">Start datum</label>
                <input type="date" id="start_date" name="start_date" required>

                <label for="end_date">Eind datum</label>
                <input type="date" id="end_date" name="end_date" required>

                <div class="orderproducts">
                    <label for="supplies_id">Welk product</label>
                    <select name="supply_id" id="supply_id">
                        <option value="0">---</option>
                        @foreach ($supplies as $supply)
                            <option value="{{$supply->id}}">{{$supply->name}}</option>
                        @endforeach
                    </select>

                    <label for="count">Hoeveel?</label>
                    <select name="count" id="count">
                        @for($i = 0; $i < 6; $i++ )
                            <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>

                    <label for="supply_id1">Welk product?</label>
                    <select name="supply_id1" id="supply_id1">
                        <option value="0">---</option>
                        @foreach ($supplies as $supply)
                            <option value="{{$supply->id}}">{{$supply->name}}</option>
                        @endforeach
                    </select>

                    <label for="count1">Hoeveel?</label>
                    <select name="count1" id="count1">
                        @for($i = 0; $i < 100; $i++ )
                            <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>

                    <label for="supply_id2">Welk product?</label>
                    <select name="supply_id2" id="supply_id2">
                        <option value="0">---</option>
                        @foreach ($supplies as $supply)
                            <option value="{{$supply->id}}">{{$supply->name}}</option>
                        @endforeach
                    </select>

                    <label for="count2">Hoeveel?</label>
                    <select name="count2" id="count2">
                        @for($i = 0; $i < 100; $i++ )
                            <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </div>




                <input type="submit" value="Submit">
            </form>
        </div>
    </section>
@endsection
