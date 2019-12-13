@extends('layouts/mainlayout')
@section('content')
    <div class="container">
        <ul>
    @foreach($bkr as $bk)
        <li><a href="{{route('bkrcheck.edit',$bk->id)}}">{{$bk->companyname}}</a></li>
        @endforeach
        </ul>
    </div>
@endsection