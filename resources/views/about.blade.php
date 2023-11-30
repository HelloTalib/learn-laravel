<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="route()">
</head>

<body>
    <div class="card-grid">
        @if (!empty($about))
            @foreach ($about as $ab)
                <div class="card">
                    <div class="card">
                        <h2>{{ $ab['name'] }}</h2>
                        <p> {{ $ab['name'] }} </p><br>
                        <p> {{ $ab['version'] }} </p><br>
                        <p> {{ $ab['author'] }} </p> <br>
                        <p> {{ $ab['website'] }} </p> <br>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

</body>

</html>
