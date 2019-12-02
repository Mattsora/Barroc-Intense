@extends('layouts/mainlayout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Werkbon maken</title>
</head>
<body>
        
    <form action = "reciept-create" method = "get">
        <h2> Werkbon Maken </h2>
        <h2>Klantnaam <h2>
        <select name = "user_id">
            @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        <h2>Schrijf heir de beschrijving van de werk order<h2><br><textarea rows=10 cols=30 name="description" type="text">
        </textarea>
        <br>
        <input type="submit" value ="Submit">
    </form>
</body>
</html>
@endsection