@extends('layouts.default')

@section('main')

    <div class="container d-flex justify-content-center flex-wrap">

        @foreach ($data as $movie )
            <div class="card mb-3 mx-2 mt-5" style="width: 18rem;">
                <div class="card-body card-movie text-center">
                    <h5 class="card-title">Title: {{$movie->title}}</h5>
                    <h5 class="card-title">Original Title: {{$movie->original_title}}</h5>
                    <p class="card-text">Nationality: {{$movie->nationality}}</p>
                    <p class="card-text">Date: {{$movie->date}}</p>
                    <p class="card-text">Vote: {{$movie->vote}} <i class="fas fa-star"></i></p>
                    <a href="#" class="btn btn-dark">Go!</a>
                </div>
            </div>
        @endforeach

    </div>

@endsection

