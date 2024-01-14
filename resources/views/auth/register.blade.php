@include('layout.nav')
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
        <h1 class="text-danger text-center">Welcome to Register Page</h1>
        <form method="POST" action="{{ url('register') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="fname">
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lname">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">User Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <button class="btn btn-danger">Register</button>
            </div>
        </div>
    </form>
</body>
</html>