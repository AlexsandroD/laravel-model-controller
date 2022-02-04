
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @foreach ($movies as $movie )
            <div class="card">
                <h1 class="title">{{ $movie -> title }}</h1>
                <ul>
                    <li>Titolo originale:{{ $movie -> original_title }}</li>
                    <li>Nationalitá{{ $movie -> nationality}}</li>
                    <li>Data primo screen:{{ $movie -> date}}</li>
                    <li>Voto:{{ $movie -> vote }}</li>
                </ul>
            </div>
        @endforeach
    </div>
</body>
</html>
