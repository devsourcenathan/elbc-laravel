@extends('partials.main')

@section('content')

<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <h6>Pour plus d'information, </h6>
                    <h1>Contactez-nous</h1>
                    <p class="mx-auto">Nous équipes est présente pour vous donner d'ample informations</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card border-2" style="border-color: #ff4d29;">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    <i class='bx bxl-facebook'></i>
                                </h5>
                                <p class="card-text text-center">Address</p>
                                <p class="card-text text-center">title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card border-2" style="border-color: #ff4d29;">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    <i class='bx bxl-facebook'></i>
                                </h5>
                                <p class="card-text text-center">Address</p>
                                <p class="card-text text-center">title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-6 col-md-12">
                        <div class="card border-2" style="border-color: #ff4d29;">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    <i class='bx bxl-facebook'></i>
                                </h5>
                                <p class="card-text text-center">Address</p>
                                <p class="card-text text-center">title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card border-2" style="border-color: #ff4d29;">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    <i class='bx bxl-facebook'></i>
                                </h5>
                                <p class="card-text text-center">Address</p>
                                <p class="card-text text-center">title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <form>
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example1">Nom</label>
                        <input type="text" id="form4Example1" class="form-control border-2" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example2">Adresse Mail</label>
                        <input type="email" id="form4Example2" class="form-control border-2" />
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example3">Message</label>
                        <textarea class="form-control border-2" id="form4Example3" rows="4"></textarea>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-block mb-4 text-white" style="background-color: #ff4d29;">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection