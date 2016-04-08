@extends('layouts.master')

@section('title')
The figg...

@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
    <h3>Sign Up</h3>
        <form action="{{ route('signup') }}" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input class="form-control" type="text" name="email" id="email"></input>
        </div>
        <div class="form-group">
            <label for="first_name">First name</label>
            <input class="form-control" type="text" name="first_name" id="first_name"></input>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password"></input>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>  
        <input type="hidden" name="_token" value="{{ Session::token() }}">  
        </form>
    </div>
        <div class="col-md-6">
    <h3>Sign in</h3>
        <form action="#" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input class="form-control" type="text" name="email" id="email"></input>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password"></input>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>    
        </form>
    </div>



</div>


@endsection