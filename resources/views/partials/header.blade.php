<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/about/css/swiper-bundle.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/about/css/style.css")}}">
    {{-- <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../css/about/css/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/about/css/style.css"> --}}

    <title>ELBC</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    <!-- TOP NAV -->
    <div class="top-nav" id="home">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p> <i class='bx bxs-envelope'></i> elbc.save@example.com</p>
                    <p> <i class='bx bxs-phone-call'></i> (237) 699887766</p>
                </div>
                <div class="col-auto social-icons">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-pinterest'></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">ELBC<span class="dot">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">A Propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/portfolio">Nos Réalisations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/formation">Formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contactez-nous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                </ul>
                <a href="/donation" class="btn btn-brand ms-lg-3">Faites un don</a>

                @guest
                <a href="{{ route('login') }}" class="btn btn-primary ms-lg-3">Se Connecter</a>
                @endguest

                @auth
                    <a href="" class="btn btn-danger ms-lg-3">Se Deconnecter</a>
                        @if (Auth::user()->isAdmin)
                        <a href="/dashboard" class="btn btn-primary ms-lg-3">Dashboard</a>
                        @endif
                @endauth


            </div>
        </div>
    </nav>
