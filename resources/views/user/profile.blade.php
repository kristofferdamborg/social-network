@extends('layouts.app')

<style type="text/css">
    .profile-img {
        max-width: 150px;
        border: 5px solid #fff;
        border-radius: 100%;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
    }
</style>

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <img class="profile-img" src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295392_960_720.png" alt="Profile Picture">

                    <h1>{{ $user->name }}</h1>
                    <h5>{{ $user->email }}</h5>
                    <h5>{{ $user->date_of_birth->format('j F Y') }} ({{ $user->date_of_birth->age }} years old)</h5>

                    <button class="btn btn-success">Follow</button>
                </div>
            </div>
        </div>
    </div>

@endsection