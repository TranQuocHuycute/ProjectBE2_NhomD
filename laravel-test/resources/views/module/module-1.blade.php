<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/01.css')}}">
    <link rel="stylesheet" href="{{url('css/14.css')}}">
    <link rel="stylesheet" href="{{url('css/15.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
        <header>
            @include('module/01-content');
        </header>
        <main>
            <div class="container">
                <div class="matches row">

                    <div class="col-7">
                        @include('module/14-content');
                        @include('module/15-content');
                    </div>

                    <div class="col-4">

                    </div>
                </div>
            </div>

        </main>
</body>
</html>
