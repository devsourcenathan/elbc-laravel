@extends('partials.main')

@section('content')
<div class="container-fluid">
    <div class="about-bg row text-light">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="text-light mt-5 ms-5">A Propos de nous</h1>
                    <hr class="hr ms-5" style="width: 100px;">
                </div>
                <div class="d-flex mt-5 justify-content-center">
                    <a href="index.html" class="text-light fw-bold me-3">Accueil</a>
                    <div class="vr" style="height: 30px;"></div>
                    <a class="ms-3 text-light me-5" style="text-decoration: none;">A propos de nous</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <img src="../img/apropos/testi2.jpg" alt="" class="img-responsive mb-5">
                <img src="../pages/$HTTP_RAW_POST_DATA" alt="" class="img-responsive">
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="info-box">
                            <img src="../img/apropos/icon6.png" alt="" style="margin-top: -70px;">
                            <div class="ms-4">
                                <h5>Description de l'association</h5>
                                <p>L’association Empower Lives for Better Care est créée à Douala, Région du Littoral, conformément à la loi N°90/053 du 19 décembre 1990, une Association des professionnels de la santé, facilitateurs et animateurs de développement communautaire.
                                    Elle a pour but l’amélioration des conditions de vie des populations démunies par la baie de la formation, la promotion des règles d’hygiène de base, sensibilisation, social et culturel!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <img src="../img/apropos/icon4.png" alt="" style="margin-top: -70px;">
                            <div class="ms-4">
                                <h5>Notre expertise</h5>
                                <p>Association de patients et de soignants
                                    <br>Communication médiatique et non médiatique (séminaire, colloques, conférences)
                                    <br>Formation continue / Renforcement des capacités
                                    <br>Système d’information sanitaire
                                    <br>Education thérapeutique du patient
                                    <br>Mobilisation communautaire
                                    <br>Management de projet!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <img src="../img/apropos/icon5.png" alt="" style="margin-top: -70px;">
                            <div class="ms-4">
                                <h5>Notre méthodologie d’intervention </h5>
                                <p>Analyser et planifier les actions de renforcement des compétences, en fonction d'un état des lieux et de la détermination d'objectifs d'amélioration de la qualité.!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TEAM -->

<section id="team" style="margin-top: -70px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Membres</h6>
                    <h1>Nos Membres</h1>
                    <p class="mx-auto">La Mise au point d'un tel organisme nécessite l'intervention de plusieurs personnes ayant un sens de l'éthique, de la morale, et du prochain</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!--<div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/team_1.jpg" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Marvin McKinney</h5>
                        <p>Marketing Coordinator</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/team_2.jpg" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Kathryn Murphy</h5>
                        <p>Ethical Hacker</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/team_3.jpg" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Darrell Steward</h5>
                        <p>Software Developer</p>
                    </div>
                </div>-->
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="../img/apropos/images (10).jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Mr SAGU KENFACK ROSTAND</h2>
                                <p class="description">RESPONSABLE QUALITE</p>

                                <button class="button">Voir plus</button>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="../img/apropos/testi2.jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Mme MEGHA’A KAMGANG RUTH</h2>
                                <p class="description">VICE-PRESIDENT</p>

                                <button class="button">Voir plus</button>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="../img/apropos/testi1.jpeg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Mme NUM YONOMO ANITA</h2>
                                <p class="description">SECRETAIRE GENERALE.</p>

                                <button class="button">Voir plus</button>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="../img/apropos/istockphoto-1146831636-612x612.jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Mr KINGSLEY NZANWE FOMI</h2>
                                <p class="description">SECRETAIRE GENERAL ADJOINT</p>

                                <button class="button">Voir plus</button>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="../img/apropos/images (10).jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Mme MAKOUGANG AUGUSTINE</h2>
                                <p class="description">TRESORIERE.</p>

                                <button class="button">Voir plus</button>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="../img/apropos/istockphoto-936927896-170667a.jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Mme SOPHIE NALOVA EVAKISE</h2>
                                <p class="description">CONSEILLERE.</p>

                                <button class="button">Voir plus</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICE ou OBJECTIF -->

<section id="services" class="text-center" style="margin-top: -70px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Nos Services</h6>
                    <h1>Que faisons-nous?</h1>
                    <p class="mx-auto">Nous améliorons les conditions de vie des populations démunies par la baie de la formation, la promotion des règles d’hygiène de base, sensibilisation, social et culturel</p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="../img/apropos/icon1.png" alt="">
                    <p class="h5 mt-4">Association de patients et de soignants</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="../img/apropos/icon2.png" alt="">
                    <p class="h5 mt-4">Communication médiatique et non médiatique(séminaire, colloques, conférences)</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="../img/apropos/icon3.png" alt="">
                    <p class="h5 mt-4">Formation continue / Renforcement des capacités</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="../img/apropos/icon4.png" alt="">
                    <p class="h5 mt-4">Système d’information sanitaire</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="../img/apropos/icon5.png" alt="">
                    <p class="h5 mt-4">Education thérapeutique du patient</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service">
                    <img src="../img/apropos/icon6.png" alt="">
                    <p class="h5 mt-4">Mobilisation communautaire</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-top text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h4 class="navbar-brand">Empower Lives for Better Care<span class="dot">.</span></h4>
                    <p>Avoir une population saine et travailleuse est un gage d'assurance et de sécurité pour une famille et pour une nation !!!</p>
                    <div class="col-auto social-icons">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-pinterest'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p class="mb-0">TechflectionDesign</p>
    </div>
</footer>



<!-- Modal -->
<div class="modal fade" id="contact-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-12 bg-cover" style="background-image: url(../img/c2.jpg); min-height:300px;">
                            <div>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form class="p-lg-5 col-12 row g-3">
                                <div>
                                    <h1>Get in touch</h1>
                                    <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                </div>
                                <div class="col-lg-6">
                                    <label for="userName" class="form-label">First name</label>
                                    <input type="text" class="form-control" placeholder="Jon" id="userName" aria-describedby="emailHelp">
                                </div>
                                <div class="col-lg-6">
                                    <label for="userName" class="form-label">Last name</label>
                                    <input type="text" class="form-control" placeholder="Doe" id="userName" aria-describedby="emailHelp">
                                </div>
                                <div class="col-12">
                                    <label for="userName" class="form-label">Email address</label>
                                    <input type="email" class="form-control" placeholder="Johndoe@example.com" id="userName" aria-describedby="emailHelp">
                                </div>
                                <div class="col-12">
                                    <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                    <textarea name="" placeholder="This is looking great and nice." class="form-control" id="" rows="4"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-brand">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection