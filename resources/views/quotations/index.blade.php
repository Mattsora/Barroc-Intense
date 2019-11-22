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

<form method="POST" action="{{ route('quotations.store') }}" aria-label="{{ __('My form') }}">
    @csrf

    <div class="form-group row">
        <label for="dropdown" class="col-sm-4 col-form-label text-md-right">{{ __('Shop') }}</label>
        <div class="col-md-12">
            <select class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="dropdown">
                @foreach($supplies as $supplie)
                    <option value="{{ $supplie->id }}">{{ $supplie->name }}</option>
                @endforeach
            </select>
            <input type="number" name="quantity" min="1" max="10">

            <input type="submit" value="Submit">

        </div>
    </div>
</body>
</html>