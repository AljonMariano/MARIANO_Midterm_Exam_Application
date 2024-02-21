<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slice Of Life</title>
</head>
<body>
    <h1>Slice of Life Animes</h1>
    <p>Here are my recomendations</p>
    
    <a href="{{ route('Echi') }}"><button>Slife Of Life</button></a>
    <a href="{{ route('comedy') }}"><button>Comedy</button></a>

    <h2>Anime List</h2>
    <ul>
        @foreach($Slice as $Slice)
            <li>{{ $Slice }}</li>
        @endforeach
    </ul>
</body>
</html>
