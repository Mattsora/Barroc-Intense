
<!doctype html>
<html lang="en">
<head>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      


<form action="{{ route('sales.store') }}" method="post">
    @csrf
    Role ID<br>
    <input type="text" name="role_id" placeholder="Role">
    <br>
    Name:<br>
    <input type="text" name="name" placeholder="Name">
    <br><br>
    Email:<br>
    <input type="email" name="email" placeholder="Email">
    <br><br>
    Password:<br>
    <input type="password" name="password" placeholder="">
    <br><br>
    <div class="btn">
    <input type="submit" value="Submit">
    </div>
</form>
<form action="{{ route('notes.store') }}" method="post">
    @csrf
    Role ID<br>
    <input type="text" name="name" placeholder="Jouw Naam">
    <br>
    <input type="text" name="ownName" placeholder="Klant naam">
    <br>
    <input type="text" name="note" placeholder="Opmerking">
    <br>
    <div class="btn">

    <input type="submit" value="Submit">
    </div>
</form>
<ul>
    @foreach($users as $user)
        <p>{{ $user ->name }}</p>
    @endforeach
</ul>
</body>
</html>