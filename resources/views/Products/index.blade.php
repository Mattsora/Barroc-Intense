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
</body>
</html>
<style>
    td {
        display : block;
    }
    table {
        text-align: center;
    }
</style>