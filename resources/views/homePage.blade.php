<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Movies Home Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1 class="heading">Laravel DB Movies</h1>

    <main>
        <div class="d-flex boxed">
            @foreach ($movies as $movie)
                <div class="movie-card">
                    <div class="movie-info">
                        <div class="title">
                            <h3 class="head">Titolo:</h3>
                            <p class="body">{{$movie->title}}</p>
                        </div>
                        <div class="original-title">
                            <h3 class="head">Titolo originale:</h3>
                            <p class="body">{{$movie->original_title}}</p>
                        </div>
                        <div class="nationality">
                            <h3 class="head">Nazionalità:</h3>
                            <p class="body">{{$movie->nationality}}</p>
                        </div>
                        <div class="date">
                            <h3 class="head">Data di uscita:</h3>
                            <p class="body">{{$movie->date}}</p>
                        </div>
                        <div class="vote">
                            <h3 class="head">Voto:</h3>
                            <p class="body">{{$movie->vote}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>