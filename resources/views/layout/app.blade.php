<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.css") }}">
    <title>@yield('title')</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container">
            <a class="navbar-brand text-light" href="{{ url('/') }}">E-commerce</a>
            <button
                class="navbar-toggler" type="button" ata-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{ url('/products') }}">Products</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="">Category</a>
                    </li> -->
                    
                    <!-- only for admins -->
                    {{-- {{ session_start() }} --}}
                    @if (Auth::user() && Auth::user()->role == 'admin' )
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{ url('/products/create') }}">Create Product</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{ route("category") }}">Create Category</a>
                    </li> --}}
                    @endif

                    @if ( !Auth::user() )
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="{{ route('register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="{{ route('login') }}">Login</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" name="Logout" href="">Welcome {{ Auth::user()->fname . " " . Auth::user()->lname }}</a>
                            {{-- <a class="nav-link active text-light" aria-current="page" name="Logout" href="">Welcome {{ Auth::user()->fname_lname }}</a> --}}
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" name="Logout" href="{{ route('logout') }}">Logout</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield("basic-section")

    <footer class=" container text-center bg-danger text-light p-5">
        <p>COPYRIGHT to Peter Samy</p>
    </footer>

    <script src="assets/js/bootstrap.bundle.js"></script>

</body>
</html>