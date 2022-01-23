@extends('layout.admin-master')
@include('layout.partials.message')

@section('content')
    <form method="post" action="/student/login">
        @csrf
        
        <h1 class="h3 mb-3 fw-normal">Login</h1>


        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" >
            <label for="floatingName">Email</label>
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        
    </form>
    <br><br>
    <a href="{{ url('/student') }}" class="btn btn-secondary">Back</a>
@endsection
