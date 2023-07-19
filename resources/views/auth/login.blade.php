@extends('partials.main')

@section('content')
<div class="container-fluid">
    <div class="formation-bg row text-light">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="text-light mt-5 ms-5">Connectez-vous ici</h1>
                    <hr class="hr ms-5" style="width: 100px;">
                </div>
                <div class="d-flex mt-5 justify-content-center">
                    <a href="/" class="text-light fw-bold me-3">Accueil</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="bg-light" id="portfolio" style="padding-top: 10px;">
    <div class="container">
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center">
                <div class="card text-bg-light" style="max-width: 25rem;">
                    <div class="card-header text-center fs-3">Connexion</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-body mx-5">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" :value="old('email')" required autofocus>
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" type="password"
                                name="password"
                                required autocomplete="current-password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating d-flex justify-content-between">
                                <a class="m-2" href="{{ route('register') }}">
                                    {{ __("S'inscrire") }}
                                </a>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-check"></i>&nbsp;
                                    Se Connecter
                                </button>
                            </div>
                        </div>

                        {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}
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

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
