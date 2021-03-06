


@extends('layouts.app')
@section('title', 'Home')

@section('content')
<!-- Jumbotron -->
<div class="jumbotron text-center blue-grey lighten-5 jumbotron-fluid mb-2 mt-5 ml-3 mr-3">
    <!-- Logo  -->
    <img class="img-fluid mt-5"
        src="https://user-images.githubusercontent.com/51726945/85145615-3326c600-b223-11ea-84bf-319fb54949b5.png"
        alt="" srcset="">
    <!-- Title -->
    <h2 class="mt-5 card-title h2">Test Laravel 7 - Posts Application</h2>

    <!-- Subtitle -->
    <p class="indigo-text my-4 font-weight-bold">Powered by Digital One</p>

    <!-- Grid row -->
    <div class="row d-flex justify-content-center">

        <!-- Grid column -->
        <div class="col-xl-7 pb-2 mt-5">

            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aliquid dolorem ea
                distinctio exercitationem delectus qui, quas eum architecto, amet quasi accusantium, fugit consequatur
                ducimus obcaecati numquam molestias hic itaque accusantium doloremque laudantium, totam rem aperiam.</p>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-4 pb-2">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Status') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jumbotron -->
@endsection
