@extends('partials.main')

@section('content')

<div class="container-fluid">
    <div class="formation-bg row text-light">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="text-light mt-5 ms-5">Nos Formations</h1>
                    <hr class="hr ms-5" style="width: 100px;">
                </div>
                <div class="d-flex mt-5 justify-content-center">
                    <a href="index.html" class="text-light fw-bold me-3">Accueil</a>
                    <div class="vr" style="height: 30px;"></div>
                    <a class="ms-3 text-light me-5" style="text-decoration: none;">Nos formations</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="bg-light" id="portfolio" style="padding-top: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h1>Ici se trouve l'ensemble des formations que nous offrons</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-5">
                <article class="blog-post">
                    <img src="./img/formation/aze11.jpeg" alt="">
                    <a href="portfolio-details.html" class="tag">Web Design</a>
                    <div class="content">
                        <small>01 Dec, 2022</small>
                        <h5>Web Design trends in 2022</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                            piece of classical Latin literature from
                        </p>
                        @auth
                            <button class="btn btn-primary ms-lg-3">Telecharger</button>
                        @endauth
                            
                    </div>

                </article>



            </div>
            <div class="col-md-4 mb-5">
                <article class="blog-post">
                    <img src="./img/formation/aze12.jpeg" alt="">
                    <a href="portfolio-details.php" class="tag">Programming</a>
                    <div class="content">
                        <small>01 Dec, 2022</small>
                        <h5>Web Design trends in 2022</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                            piece of classical Latin literature from
                        </p>

                        @auth
                            <button class="btn btn-primary ms-lg-3">Telecharger</button>
                        @endauth
                    </div>
                </article>
            </div>
            <div class="col-md-4 mb-5">
                <article class="blog-post">
                    <img src="./img/formation/aze17.jpeg" alt="">
                    <a href="portfolio-details.html" class="tag">Marketing</a>
                    <div class="content">
                        <small>01 Dec, 2022</small>
                        <h5>Web Design trends in 2022</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                            piece of classical Latin literature from</p>
                    </div>
                </article>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-5">
                <article class="blog-post">
                    <img src="./img/formation/aze14.jpeg" alt="">
                    <a href="portfolio-details.html" class="tag">Web Design</a>
                    <div class="content">
                        <small>01 Dec, 2022</small>
                        <h5>Web Design trends in 2022</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                            piece of classical Latin literature from</p>
                    </div>
                </article>
            </div>
            <div class="col-md-4 mb-5">
                <article class="blog-post">
                    <img src="./img/formation/aze15.jpeg" alt="">
                    <a href="portfolio-details.html" class="tag">Programming</a>
                    <div class="content">
                        <small>01 Dec, 2022</small>
                        <h5>Web Design trends in 2022</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                            piece of classical Latin literature from</p>
                    </div>
                </article>
            </div>
            <div class="col-md-4 mb-5">
                <article class="blog-post">
                    <img src="./img/formation/aze16.jpeg" alt="">
                    <a href="portfolio-details.html" class="tag">Marketing</a>
                    <div class="content">
                        <small>01 Dec, 2022</small>
                        <h5>Web Design trends in 2022</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                            piece of classical Latin literature from</p>
                    </div>
                </article>
            </div>
        </div>

    </div>
</section>

@endsection