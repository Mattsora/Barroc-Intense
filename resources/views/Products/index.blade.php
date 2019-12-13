<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('purchase.store') }}" method="post">
    @csrf
     Naam<br>
    <input type="text" name="name" placeholder="Naam Product">
    <br>
    <div class="btn">
        <input type="submit" value="Submit">
    </div>
</form>

<table style="width:100%">
    <tr>
            @foreach($supplies as $supplie)
                <td>Naam : {{ $supplie ->name }}</td>
                <td> Kosten : {{ $supplie ->lease_cost }}</td>
                <td> Stock : {{ $supplie ->in_stock }}</td>
                <td> Amount : {{ $supplie ->roll_id }}</td>
                <td> Stock : {{ $supplie ->roll->roll }}</td>
                <td>------------------------------------</td>
            @endforeach
    </tr>


</table>
<form action="{{ route('purchaseBuy.store') }}" method="post">
    @csrf
    Naam<br>e
    <select class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="Dropdown1">
        @foreach($supplies as $supplie)
            <option value="{{ $supplie->id }}">{{ $supplie->name }}</option>
        @endforeach
    </select>
    <select class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="Dropdown2">
        @foreach($supplies as $supplie)
            <option value="{{ $supplie->id }}">{{ $supplie->name }}</option>
        @endforeach
    </select>
    <select class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="Dropdown3">
        @foreach($supplies as $supplie)
            <option value="{{ $supplie->id }}">{{ $supplie->name }}</option>
        @endforeach
    </select>
    <div class="btn">
        <input type="submit" value="Submit">
    </div>
</form>
</body>
</html>
<style>
    table {
        text-align: center;
    }
    td {
        display: block;
    }
</style>