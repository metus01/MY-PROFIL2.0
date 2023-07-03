@extends('users.base')
@section('content')
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
    <main>
        <div class="container">
            <h1 class="my-3text-center text" style="">Bienvenue sur MY-PROFIL</h1>
            <div class="m-2  accordion" data-aos="fade-left" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            Welcome User
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            Bienvenue sur MY-PROFIL.
                            Retrouvez ici des profils de personnes de la même communauté que vous!!
                            WELCOME!!!
                            Incrivez vous et bénéficiez de ses vues palpintantes.
                            Prêt pour de nouvelles aventure???
                            Just , registre yourself.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4 justify-content-center align-items-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/portfolio/paysage1.jpg') }}"
                            style="border-radius:7px;width:50%;height:200px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/portfolio/paysage5.jpg') }}"
                            style="border-radius:7px;width:50%;height:200px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/portfolio/paysage6.jpg') }}"
                            style="border-radius:7px;width:50%;height:200px" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container d-flex justify-content-center align-items-center">
            <a href="#" style=" border-radius:7px;width: 100%" class="mt-3 btn btn-dark">Register</a>
        </div>
        {{-- <livewire:user-number-counter> --}}
    </main>

@endsection
