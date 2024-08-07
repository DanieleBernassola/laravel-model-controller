<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel movies DB</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1>Movies</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>Titolo: {{ $movie['title'] }}</li>
            <li>Titolo in lingua originale: {{ $movie['original_title'] }}</li>
            <li>Nazione: {{ $movie['nationality'] }}</li>
            <li>Data di uscita: {{ $movie['date'] }}</li>
            <li>Voto medio: {{ $movie['vote'] }}</li>
            <hr>
        @endforeach
    </ul>
</body>

</html>
