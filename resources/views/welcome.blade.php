<?php
?>
@extends('layouts/mainlayout')
@section('content')
    <div class="container box">
        <h3 align="center">Contact? stuur een mailtje!</h3><br />
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if ($user->cookies == 0)
            <p>Test</p>
            <form action="{{ route('cookies.update', $user->id )}}" method="post">
                @method('PUT')
                @csrf
                <input type="checkbox" name="cookies" value="cookies"> Accepteer<br>
                <input type="submit" value="Submit">
            </form>
        @endif


        <div style="display: flex">
            <div>
                <a class="btn btn-info" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
            <div>
                <a class="btn btn-info" href="{{ route('register') }}">{{ __('Register') }}</a>
            </div>
        </div>


        <form method="post" action="{{url('sendemail/send')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Enter Your Name</label>
                <input type="text" name="name" class="form-control" value="" />
            </div>
            <div class="form-group">
                <label>Enter Your Email</label>
                <input type="text" name="email" class="form-control" value="" />
            </div>
            <div class="form-group">
                <label>Enter Your Message</label>
                <textarea name="message" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="send" class="btn btn-info" value="Send" />
            </div>
        </form>
@endsection
<b></b>
