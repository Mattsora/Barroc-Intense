@extends('layouts/mainlayout')
@section('content')
<table>
    <h3>Overzicht verbruikten producten :</h3>
    @foreach($maintance as $maintances)
        <td>Product : {{ $maintances ->supplies->name }}</td>
        <td> Datum : {{ $maintances ->date }}</td>
        <td> Naam : {{ $maintances ->customer->name }}</td>
        <td>------------------------------------</td>
    @endforeach
</table>
<form action="{{ route('maintanceUsed.store') }}" method="post">
    @csrf
    Gebruikte product<br>
    <select class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="Dropdown1">
        @foreach($supplies as $supplie)
            <option value="{{ $supplie->id }}">{{ $supplie->name }}</option>
        @endforeach
    </select>
    <div class="btn">
        <input type="submit" value="Submit">
    </div>
</form>

</body>
<style>
    td {
        display: block;

    }
    table {
        text-align: center;
        margin-left: 44%;
    }
    h3 {
        text-align: center;
    }
</style>
</html>