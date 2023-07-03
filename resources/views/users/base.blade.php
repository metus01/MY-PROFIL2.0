<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/users/style.css') }}">
    @livewireStyles
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MY-PROFIL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (!Route::has('login'))
                            active
                            @endif" href="#">Login</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link @if (!Route::has('register'))
                            active
                            @endif" href="#">Register</a>
                        </li>
                </div>
            </div>
            </div>
        </nav>
    </header>
    @yield('content')
    @livewireScripts
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
