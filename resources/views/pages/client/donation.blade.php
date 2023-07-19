@extends('partials.main')

@section('content')
<div class="container-fluid">
    <div class="formation-bg row text-light">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="text-light mt-5 ms-5">Faites Un Don</h1>
                    <hr class="hr ms-5" style="width: 100px;">
                </div>
                <div class="d-flex mt-5 justify-content-center">
                    <a href="index.html" class="text-light fw-bold me-3">Accueil</a>
                    <div class="vr" style="height: 30px;"></div>
                    <a href="formation.html" class="ms-3 text-light me-5" style="text-decoration: none;">Nos formations</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="bg-light" id="portfolio" style="padding-top: 10px;">
    <div class="container-fluid">
        <div class="row gy-4">
            <div class="col-lg-4 col-sm-12 bg-cover" style="background-image: url(./img/site/6.jpg); min-height:300px;">
                <div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="p-lg-5 col-12 row g-3">
                    <div>
                        <h1>Faites Un Don </h1>
                        <p>Svp veuillez remplir ce formulaire</p>
                    </div>
                    <div class="col-lg-6">
                        <label for="userName" class="form-label">Nom</label>
                        <input type="text" class="form-control" placeholder="Entrer le nom" id="userName" aria-describedby="emailHelp">
                    </div>
                    <div class="col-lg-6">
                        <label for="userName" class="form-label">Prénom</label>
                        <input type="text" class="form-control" placeholder="Doe" id="userName" aria-describedby="emailHelp">
                    </div>
                    <div class="col-lg-6">
                        <label for="userName" class="form-label">Numéro de téléphone</label>
                        <input type="text" class="form-control" placeholder="Entrer le nom" id="userName" aria-describedby="emailHelp">
                    </div>
                    <div class="col-lg-6">
                        <label for="userName" class="form-label">Ville</label>
                        <input type="text" class="form-control" placeholder="Doe" id="userName" aria-describedby="emailHelp">
                    </div>
                    <div class="col-lg-6">
                        <label for="userName" class="form-label">Code Postal</label>
                        <input type="text" class="form-control" placeholder="Entrer le nom" id="userName" aria-describedby="emailHelp">
                    </div>
                    <div class="col-lg-6">
                        <label for="userName" class="form-label">Adresse Email</label>
                        <input type="email" class="form-control" placeholder="Johndoe@example.com" id="userName" aria-describedby="emailHelp">
                    </div>
                    <div class="col-12">
                        <label for="userName" class="form-label">Raison sociale</label>
                        <input type="text" class="form-control" placeholder="" id="userName" aria-describedby="emailHelp">
                    </div>
                    <div class="col-12">
                        <label for="userName" class="form-label">N° Siret</label>
                        <input type="text" class="form-control" placeholder="" id="userName" aria-describedby="emailHelp">
                    </div>
                    <div class="col-7">
                        <label for="userName" class="form-label">Nom du responsable </label>
                        <input type="text" class="form-control" placeholder="" id="userName" aria-describedby="emailHelp">
                    </div>
                    <div class="col-5">
                        <label for="userName" class="form-label">Je joins mon don d’un montant de : </label>
                        <input type="number" class="form-control">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-brand">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection