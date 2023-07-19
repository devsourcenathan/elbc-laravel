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
        <div class="row" style="margin-bottom: -40px;">
            <div class="col-12">
                <div class="intro">
                    <h1>Ici se trouve l'ensemble des formations que nous offrons</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Start Features Area -->
                <section id="features" class="features section">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Start Single Feature -->
                                <img class="mb-3" src="./img/elbd/propre/6.jpg" alt="..." />
                                <div class="small text-muted">January 1, 2022</div>
                                <!-- End Single Feature -->
                            </div>
                            <div class="col-lg-8 col-md-6 col-12">
                                <!-- Start Single Feature -->
                                <div class="card mb-4">
                                    <div class="card-header">Titre de la formation</div>
                                    <div class="card-body">description de ce qui a été fait!</div>
                                </div>
                                <!-- End Single Feature -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="fs-5">
                                    Remplissez ce formation pour votre adhésion à la formation (nom de formation)
                                </div>
                                <div>
                                    <img src="./img/elbd/cv_aanmaken_2.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form>
                                    <!-- Name input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form4Example1">Nom</label>
                                        <input type="text" id="form4Example1" class="form-control" />
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form4Example2">Adresse Mail</label>
                                        <input type="email" id="form4Example2" class="form-control" />
                                    </div>

                                    <!-- Name input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form4Example1">Nom</label>
                                        <input type="text" id="form4Example1" class="form-control" />
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form4Example2">Adresse Mail</label>
                                        <input type="email" id="form4Example2" class="form-control" />
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form4Example2">Adresse Mail</label>
                                        <input type="email" id="form4Example2" class="form-control" />
                                    </div>

                                    <!-- Message input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form4Example3">Message</label>
                                        <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-block mb-4 text-white" style="background-color: #ff4d29;">Envoyer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Features Area -->
            </div>
        </div>
    </div>
</section>

@endsection