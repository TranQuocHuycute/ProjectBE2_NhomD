<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/test.css') }}">
    <title>Document</title>
</head>

<body>
@foreach ($player as $player)
    <p class="title">{{ $player->name }}</p>
@endforeach
</body>

</html>