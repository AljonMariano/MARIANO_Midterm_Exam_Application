<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comedy Animes</title>
</head>
<body>
    <h1>Comedy Animes</h1>
    <p>Here are my recomendations</p>
    
    <a href="{{ route('Slice') }}"><button>Slife Of Life</button></a>
    <a href="{{ route('Echi') }}"><button>Echi</button></a>

    <h2>Anime List</h2>
    <ul>
        @foreach($Echi as $Echi)
            <li>{{ $Echi }}</li>
        @endforeach
    </ul>
</body>
</html>
