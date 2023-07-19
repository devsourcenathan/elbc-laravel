@extends('partials.partials.main')

@section('content')

<!-- SLIDER -->
<div class="owl-carousel owl-theme hero-slider">
    <div class="slide slide1">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-white">
                    <h6 class="text-white text-uppercase">Association Empower Lives for Better Care (ELBC)</h6>
                    <h1 class="display-3 my-4">Appui aux politiques<br />de santé</h1>
                    <a href="#" class="btn btn-brand">Faites un Don</a>
                    <a href="#" class="btn btn-outline-light ms-3">Nos Formations</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 text-white">
                    <h6 class="text-white text-uppercase">Association Empower Lives for Better Care (ELBC)</h6>
                    <h1 class="display-3 my-4">Amélioration des infrastructures pour <br />les Professionnels</h1>
                    <a href="#" class="btn btn-brand">Faites un Don</a>
                    <a href="#" class="btn btn-outline-light ms-3">Nos Formations</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MILESTONE -->
<section id="milestone">
    <div class="container">
        <div class="row text-center justify-content-center gy-4">
            <div class="col-lg-2 col-sm-6">
                <h1 class="display-4">1000+</h1>
                <p class="mb-0">Apprenants formés</p>
            </div>
            <div class="col-lg-2 col-sm-6">
                <h1 class="display-4">250+</h1>
                <p class="mb-0">Formation suivie</p>
            </div>
            <div class="col-lg-2 col-sm-6">
                <h1 class="display-4">190+</h1>
                <p class="mb-0">Nombres de formations organisées</p>
            </div>
            <div class="col-lg-2 col-sm-6">
                <h1 class="display-4">578+</h1>
                <p class="mb-0">Avis positifs</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Travail !!!</h6>
                    <h1>Notre expertise</h1>
                    <p class="mx-auto">Nous evoluons dans plusieurs secteurs nous permettant de mieux encadrer
                        et de mieux orienter nos apprennants dans leur formation et leutr futur emploi
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="projects-slider" class="owl-theme owl-carousel">
        <div class="project">
            <div class="overlay"></div>
            <img src="img/site/téléchargement (6).jpeg" alt="">
            <div class="content">
                <h2>Association de patients </h2>
                <h6>et de soignants</h6>
            </div>
        </div>
        <div class="project">
            <div class="overlay"></div>
            <img src="img/site/images (3).jpg" alt="">
            <div class="content">
                <h2>Communication médiatique et non médiatique </h2>
                <h6>(séminaire, colloques, conférences)</h6>
            </div>
        </div>
        <div class="project">
            <div class="overlay"></div>
            <img src="img/site/images.jpeg" alt="">
            <div class="content">
                <h2>Formation continue </h2>
                <h6>/ Renforcement des capacités</h6>
            </div>
        </div>
        <div class="project">
            <div class="overlay"></div>
            <img src="img/site/images (1).jpeg" alt="">
            <div class="content">
                <h2>Système d’information </h2>
                <h6>sanitaire</h6>
            </div>
        </div>
        <div class="project">
            <div class="overlay"></div>
            <img src="img/site/images (11).jpeg" alt="">
            <div class="content">
                <h2>Education thérapeutique</h2>
                <h6>du patient</h6>
            </div>
        </div>
    </div>
</section>


<section class="bg-light" id="reviews">

    <div class="owl-theme owl-carousel reviews-slider container">
        <div class="review">
            <div class="person">
                <img src="img/site/temoignage/child-1797636__340.jpg" alt="">
                <h5>Nadia Kamore</h5>
                <small>formation de production du savon</small>
            </div>
            <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quis, rem culpa labore voluptate
                ullam! In, nostrum. Dicta, vero nihil. Delectus minus vitae rerum voluptatum, excepturi incidunt ut,
                enim nam exercitationem optio ducimus!</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <i class='bx bxs-quote-alt-left'></i>
        </div>
        <div class="review">
            <div class="person">
                <img src="img/site/temoignage/testi3.jpg" alt="">
                <h5>Dienda Mourra</h5>
                <small>formation en soin de secour</small>
            </div>
            <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quis, rem culpa labore voluptate
                ullam! In, nostrum. Dicta, vero nihil. Delectus minus vitae rerum voluptatum, excepturi incidunt ut,
                enim nam exercitationem optio ducimus!</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <i class='bx bxs-quote-alt-left'></i>
        </div>
        <div class="review">
            <div class="person">
                <img src="img/site/temoignage/téléchargement (7).jpeg" alt="">
                <h5>Elisabeth Hamildash</h5>
                <small>formation en infographie</small>
            </div>
            <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quis, rem culpa labore voluptate
                ullam! In, nostrum. Dicta, vero nihil. Delectus minus vitae rerum voluptatum, excepturi incidunt ut,
                enim nam exercitationem optio ducimus!</h3>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class="bx bxs-star-half"></i>
            </div>
            <i class='bx bxs-quote-alt-left'></i>
        </div>
    </div>
</section>
@endsection