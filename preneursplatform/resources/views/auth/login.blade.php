@extends('layouts.app')

@section('content')
    <div id="app">
        <section>
            <div class="container login-page">
                <div class="row justify-content-center align-items-center login-box">
                    <div class="col-md-6 brainsterAds" id="sign-up">
                        <img src="{{ asset('img/500x70brainsterads.png') }}" alt="Sign up">
                        <p class="login-ads">Get together and share your experience with other people..</p>
                    </div>
                    <div class="col-md-4 loginForm">
                        <div class="card p-2">
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="Email address">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary logginButton">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link forgetPassword" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif

                                    <hr>

                                    <a href="{{ route('register') }}" class="btn btn-info logginButton" role="button">Register</a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('js/login-ads.js') }}"></script>
@endsection
