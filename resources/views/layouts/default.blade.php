<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Home</title>
    
    {{-- richiamo al mio app.css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- /richiamo al mio app.css --}}


</head>
<body>

    <header>
        HEADER
    </header>

    <main>
       @foreach ($data as $movie )
           <div class="card" style="width: 18rem;">
               <div class="card-body">
                   <h5 class="card-title">{{$movie->title}}</h5>
                   <h5 class="card-title">{{$movie->original_title}}</h5>
                   <p class="card-text">{{$movie->nationality}}</p>
                   <p class="card-text">{{$movie->date}}</p>
                   <p class="card-text">{{$movie->vote}}</p>
                   <a href="#" class="btn btn-primary">Go!</a>
               </div>
           </div>

       @endforeach
    </main>


</body>
</html>
