<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Slackey&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Slackey&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/homestyle.css') }}" />

    @yield('style')
    <!-- Logo Title Bar -->
    <link rel="icon" href="{{ asset('assets/img/logo2.png') }}" type="image/x-icon" />
    <title>Chilo Pet Care - @yield('title')</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg w-100">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logo2.png') }}" alt="Logo" width="30" class="d-inline-block align-text-top me-3" />
                Chilo Pet Care</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="/#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/#pelayanan">Pelayanan</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/#info">Info</a>
                    </li>
                </ul>
                <div>
                    <div class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ request()->user()->name }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profil</a></li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <form class="d-inline" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="btn btn-link text-decoration-none p-0 m-0 text-dark">Logout</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                    {{-- <a href="{{ route('profile.edit') }}" class="btn button-primary rounded">{{ Auth::user()->name }}</a>
                    <form class="d-inline" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-secondary rounded">Logout</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
