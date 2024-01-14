{{-- @extends('layout.nav') --}}
{{-- @include('layout.nav') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.css") }}">
    <title>Register</title>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-danger text-center">Welcome to Login Page</h1>
        <form method="POST" action="{{ url('login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">User Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <button class="btn btn-danger">Login</button>
            </div>
        </form>
    </div>
</body>
</html>