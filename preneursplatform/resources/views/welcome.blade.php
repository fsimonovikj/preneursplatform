@extends('layouts.app')

@section('content')

    {{-- Mobile version --}}
    <div class="mobile">
        <div class="welcome-img">
            <img src="{{ asset('img/Brainster-Logo.png') }}" alt="">
        </div>

        {{-- <div class="justify-content-center text-center Discover">
            <h2>Discover your Dream job Here</h2>
            <p>Explore all the most exiting jobs roles based on your interest And study major
        </div> --}}

        

            <div class="Get-Started d-flex justify-content-end">
                <a href="{{ route('login') }}">GET STARTED <i class="fad fa-chevron-double-right strelka"></i> </a>
            </div>


        {{-- <div class="wrapper text-center" id="Get-Started">
            <div class="Get-Started btn-group" role="group">
                <a href="{{ route('register') }}" class="btn register-button">Register</a>
                <a href="{{ route('login') }}" class="btn login-button">Sign in</a>
            </div>
        </div> --}}
    </div>

    {{-- Desktop version --}}
    <div class="desktop">
        {{-- <div class="container"> --}}
        <div class="row justify-content-md-center">
            <div class="left-side col-lg-4 col-md-4 align-self-center">
                <h2 class="pb-4">A whole world of <span class="freelance-color">freelance</span> talent at your fingertips</h2>
                <div>
                    <div class="py-2">
                        <p class="font-weight-bold mb-0"><i class="far fa-check-circle"></i> The best for every budget</p>
                        <p class="text-muted">Find high-quality services at every price point. No hourly rates,just project-based pricing.</p>
                    </div>

                    <div class="py-2">
                        <p class="font-weight-bold mb-0"><i class="far fa-check-circle"></i> The best for every budget</p>
                        <p class="text-muted">Find high-quality services at every price point. No hourly rates,just project-based pricing.</p>
                    </div>

                    <div class="py-2">
                        <p class="font-weight-bold mb-0"><i class="far fa-check-circle"></i> The best for every budget</p>
                        <p class="text-muted">Find high-quality services at every price point. No hourly rates,just project-based pricing.</p>
                    </div>
                </div>

                <div class="wrapper pt-5">
                    <div class="WelcomeButtons-Desktop btn-group">
                        <a href="{{ route('register') }}" class="btn btn-light">Register</a>
                        <a href="{{ route('login') }}" class="btn btn-outline-light text-dark">Sign in</a>
                    </div>
                </div>
            </div>
            <div class="right-side offset-1 col-lg-7 col-md-7 align-self-center align-middle">
                <img src="/img/desktop-welcome-mascot.jpg">
            </div>
        </div>
        {{-- </div> --}}
    </div>

@endsection
