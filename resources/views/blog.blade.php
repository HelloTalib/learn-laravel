

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOG</title>
    <link rel="stylesheet" href="<?php echo asset('assets/css/style.css')?>" type="text/css">
</head>
<body>
<div class="card-grid">
    @if (!empty($blog))
        @foreach ($blog as $bl)
            <div class="card">
                <div class="card">
                    <h2>{{ $bl->title }}</h2>
                    <p> {{ $bl->description }} </p><br>
                </div>
            </div>
        @endforeach
        @endif
</div>
</body>
</html>
