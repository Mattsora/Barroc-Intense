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
<form action="{{ route('error.update', $error[0]->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Gebruiker</label><br>
    <input type="text" name="CompanyName" disabled="disabled" placeholder="{{$error[0]->CompanyName}}">
    <br><br>
    Melding:<br>
    <input type="text" name="errorMessage" disabled="disabled" placeholder="{{$error[0]->errorMessage}}">
    <br><br>
    Datum:<br>
    <input type="date" name="date" placeholder="Password">
    <br>
    <select class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="Dropdown1">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <div class="btn">
        <input type="submit" value="Submit">
    </div>
</form>

</body>
</html>