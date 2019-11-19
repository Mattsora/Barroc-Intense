<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H2>Barroc Intense Customer Login Portaal </H2>

    @if ($errors->any ())

    <ul>
    
    {{implode ('', $errors->all ('<li>: message</li>'))}}
    
    </ul>
    
    @endif
    
    {{Form::open (array ('url' => 'logincheck'))}}
    
    <p> {{Form::text ('username', ‘‘, array ('placeholder'=>'Username','maxlength'=>30))}} </p>
    
    <p> {{Form::password ('password', array('placeholder'=>'Password','maxlength'=>30)) }} </p>
    
    <p> {{Form::submit ('Submit')}} </p>
    
    {{Form::close ()}}
</body>
</html>
