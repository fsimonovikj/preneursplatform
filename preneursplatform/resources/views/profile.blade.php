@extends('layouts.app')

@section('content')
    <div id="app">

        @extends('layouts.navbar')

        {{-- <section> --}}
        <div class="container">

            {{-- Personal information --}}
            <div class="personal-information row d-flex">
                {{-- Profile Image --}}
                <div class="col-md-2">
                    <img src="/uploads/avatars/{{ $user->avatar }}" class="profile-img">
                </div>
                {{-- Personal information --}}
                <div class="col-md-10 row">
                    <div class="col-md-8">
                        <h4> {{ $user->first_name }} {{ $user->last_name }}</h4>
                        @if ($user->address != 'none' && $user->city != 'none' && $user->country != 'none')
                            <p class="text-secondary" id="address"><i class="fas fa-map-marker-alt"></i>
                                {{ $user->address }}, {{ $user->city }}, {{ $user->country }}</p>
                        @endif

                        @if ($user->bio != 'none')
                            <p class="text-secondary" id="biography">{{ $user->bio }}</p>
                        @endif
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="{{ route('edit-profile') }}" class="btn btn-primary" id="ProfileButton">Edit
                            profile</a>
                        <a href="{{ route('home') }}" class="btn btn-outline-dark" id="ProfileButton">Public
                            View</a>
                    </div>
                </div>
            </div>

            {{-- Personal skills --}}
            <div class="personal-skills py-4 row d-flex">
                {{-- Job experience and skills --}}
                <div class="col-md-12 row">
                    {{-- Experience --}}
                    @if ($user->experience != '0')
                        <div class="col-md-3 row personal-info">
                            <div class="col-md-2 justify-content-center my-auto text-secondary px-2"><i
                                    class="fal fa-clock fa-2x"></i></div>
                            <div class="col-md-10">
                                <p class="text-secondary mb-0 font-weight-bold">{{ $user->experience }}+ Years Job</p>
                                <p class="text-muted mb-0 font-weight-light">Experience</p>
                            </div>
                        </div>
                    @endif

                    {{-- Certificates --}}
                    @if ($user->certificates != 'none')
                        <div class="col-md-3 row personal-info">
                            <div class="col-md-2 justify-content-center my-auto text-secondary px-2"><i
                                    class="fal fa-trophy fa-2x"></i></div>
                            <div class="col-md-10">
                                <p class="text-secondary mb-0 font-weight-bold"> {{ $user->certificates }} Certificates
                                </p>
                                <p class="text-muted mb-0 font-weight-light"> Achieved</p>
                            </div>
                        </div>
                    @endif

                    {{-- Internship --}}
                    @if ($user->internship != 'none')
                        <div class="col-md-3 row personal-info">
                            <div class="col-md-2 justify-content-center my-auto text-secondary px-2"><i
                                    class="fal fa-clipboard-list-check fa-2x"></i></i></div>
                            <div class="col-md-10">
                                <p class="text-secondary mb-0 font-weight-bold"> {{ $user->internship }} Internship</p>
                                <p class="text-muted mb-0 font-weight-light"> Completed</p>
                            </div>
                        </div>
                    @endif
                </div>

            </div>

            {{-- Content feeds --}}
            {{-- Experience, portfolio and bigraphy --}}
            <div class="content-feeds py-3">
                <div class="filters col-md-12 row text-center border-bottom mx-0">
                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-3 px-0 pb-4" id="filter-experience">
                        <input type="radio" id="experience" />Experience
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-3 px-0 pb-4" id="filter-biography">
                        <input type="radio" id="biography" />Biography
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-3 px-0 pb-4" id="filter-projects">
                        <input type="radio" id="projects" />Projects
                    </div>
                </div>

                <div class="feeds my-3 p-4 bg-white">
                    <div class="feed experience">
                        <h3>experience</h3>
                    </div>
                    <div class="feed biography">
                        <h3>biography</h3>
                    </div>
                    <div class="feed projects">
                        <h3>projects</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="{{ asset('js/profile-filter.js') }}"></script>

        {{-- </section> --}}
    </div>

@endsection
