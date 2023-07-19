
@extends('partials.main')

@section('content')
<div class="container-fluid">
    <div class="formation-bg row text-light">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="text-light mt-5 ms-5">Inscrivez-vous ici</h1>
                    <hr class="hr ms-5" style="width: 100px;">
                </div>
                <div class="d-flex mt-5 justify-content-center">
                    <a href="index.html" class="text-light fw-bold me-3">Accueil</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="bg-light" id="portfolio" style="padding-top: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="card text-bg-light" style="max-width: 50rem;">
                    <div class="card-header text-center fs-3">Inscription</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name" class="form-control" :value="old('name')" id="floatingNom" placeholder="nom">
                                        <label for="floatingNom">Nom</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="code_fisc" class="form-control" id="floatingCode" placeholder="Code">
                                        <label for="floatingCode">Code Fiscal</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="add1" class="form-control" id="floatingAddress1" placeholder="Addresse 1">
                                        <label for="floatingAddress1">Addresse 1</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="add2" class="form-control" id="floatingAddress2" placeholder="Addresse 2">
                                        <label for="floatingAddress2">Addresse 2</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="city" class="form-control" id="floatingVille" placeholder="Ville">
                                        <label for="floatingVille">Ville</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="code_post" class="form-control" id="floatingCodeP" placeholder="code">
                                        <label for="floatingCodeP">Code Postal</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="country" class="form-control" id="floatingPays" placeholder="pays">
                                        <label for="floatingPays">Pays</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="password_confirmation"placeholder="Password">
                                        <label for="floatingPassword2">Confirm Password</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating d-flex justify-content-between">
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __("Se connecter") }}
                                </a>
                                <button type="submit" class="btn btn-primary btn-sm">S'inscrire</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
