@extends('layouts/mainlayout')
@section('content')
    <form action="{{route('bkrcheck.update', $company->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="container">
            <div>
                <label for="">Companyname</label>
                <input type="text" name="companyname" value="{{$company->companyname}}">
            </div>
            <div>
                <label for="">BKR</label>
                <select name="bkr" id="" class="custom-select-sm">
                    <option value="Denied">Denied</option>
                    <option value="Accepted">Accepted</option>
                </select>
            </div>

            <input type="submit" value="Confirm">
        </div>
    </form>
@endsection