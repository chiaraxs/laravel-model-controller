@extends('layouts.default')

@section('main')

<div class="container d-flex justify-content-center flex-wrap">

    @foreach ($data as $movie )
    <div class="card mb-3 mx-2 mt-5" style="width: 18rem;">
        <div class="card-body card-movie text-center">
            <h5 class="card-title">{{$movie->title}}</h5>
            <h6 class="card-title">Original Title: <span class="fst-italic">{{$movie->original_title}}</span></h6>
            <p class="card-text">Nationality: <span class="fst-italic"> {{$movie->nationality}}</span></p>
            <p class="card-text">Realease date: <span class="fst-italic">{{$movie->date}}</span></p>
            <p class="card-text">Vote: <span class="fst-italic"> {{$movie->vote}}</span></p>
            <p>
                {{-- stars  --}}
                @for($i = 1; $i <= 10; $i++) 
                    @if ($i <= ceil($movie->vote) / 2)
                        <i class="fas fa-star"></i>
                    @endif
                @endfor
                {{-- /stars --}}
            </p>

            {{-- button --}}
            <a href="#" class="btn btn-dark btn-outline-warning">Go!</a>
            {{-- /button --}}
            
        </div>
    </div>
    @endforeach

</div>

@endsection