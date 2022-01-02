@extends('layouts.app')

@section('content')
    <div id="app">

        @extends('layouts.navbar')

        <section>
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-8 offset-md-2">
                        <h5>Edit Profile</h5>
                        <div class="d-flex justify-content-center">
                            <img src="/uploads/avatars/{{ $user->avatar }}" class="profile-img">
                            {{-- <h4> {{ $user->first_name }} {{ $user->last_name }}</h4> --}}
                        </div>
                        <form enctype="multipart/form-data" action="/edit-profile" method="POST">
                            <div class="row">

                                <div class="col-6 pb-3">
                                    <label for="first_name">First Name</label>
                                    <input class="col-12" type="text" name="first_name" id="first_name"
                                        placeholder="{{ $user->first_name }}">
                                </div>

                                <div class="col-6 pb-3">
                                    <label for="last_name">Last Name</label>
                                    <input class="col-12" type="text" name="last_name" id="last_name"
                                        placeholder="{{ $user->last_name }}">
                                </div>

                                {{-- <div class="col-12 pb-3">
                                    <label for="email">E-mail</label>
                                    <input class="col-12" type="email" name="email" id="email" placeholder="{{ $user->email }}">
                                </div> --}}

                                <div class="col-12 pb-3">
                                    <label for="phone">Contacts Number</label>
                                    <input class="col-12" type="phone" name="phone" id="phone" placeholder="{{ $user->phone }}">
                                </div>

                                <div class="col-12 pb-3">
                                    <label for="address">Address</label>
                                    <input class="col-12" type="address" name="address" id="address" placeholder="{{ $user->address }}">
                                </div>

                                <div class="col-6 pb-3">
                                    <label for="city">City</label>
                                    <input class="col-12" type="address" name="city" id="city" placeholder="{{ $user->city }}">
                                </div>

                                {{-- <div class="col-6 pb-3">
                                    <label for="state">State</label>
                                    <input class="col-12" type="address" name="state" id="state" placeholder="{{ $user->state }}">
                                </div>

                                <div class="col-6 pb-3">
                                    <label for="zip-code">Zip code</label>
                                    <input class="col-12" type="address" name="zip-code" id="zip-code" placeholder="{{ $user->zipcode }}">
                                </div> --}}

                                <div class="col-6 pb-3">
                                    <label for="country">Country</label>
                                    <input class="col-12" type="address" name="country" id="country" placeholder="{{ $user->country }}">
                                </div>

                                <div class="col-12 pb-3">
                                    <label for="bio">Enter your bio: </label>
                                    <textarea class="col-12" name="bio" id="bio" cols="30" rows="5"
                                    placeholder="{{ $user->bio }}"></textarea>
                                </div>
                                
                                <div class="col-6 pb-3">
                                    <label>Upload profile photo: </label>
                                <input class="col-12" type="file" name="avatar">
                                <input class="col-12" type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                       
                                <div class="col-12 pb-3 d-flex justify-content-center">
                                    <input type="submit" class="pull-right btn btn-sm btn-primary" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
