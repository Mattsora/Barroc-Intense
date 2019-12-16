<?php
?>

@extends('layouts/mainlayout')
@section('content')


<div class="container">

    <form method="post" action="{{url('SendEmailSales/send')}}">
        {{ csrf_field() }}
        @csrf
        <div class="form-group">
            <label>Enter Your Name</label>
            <input type="text" name="name" class="form-control" value="" />
        </div>
        <div class="form-group">
            <label>Enter Your Email</label>
            <input type="text" name="email" class="form-control" value="" />
        </div>
        <div class="form-group">
            <label>Enter the details about your quotation</label>
            <textarea name="message" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="send" class="btn btn-info" value="Send" />
        </div>
    </form>
</div>
@endsection
<b></b>
