@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-4 mx-auto">
        <h1>Sign Up</h1>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <form action="{{route('user.setsignin')}}" method="post">
        @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" >Sign Up</button>
        </form>
    </div>
</div>
@endsection