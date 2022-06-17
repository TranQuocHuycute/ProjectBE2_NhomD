<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/01.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/02.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/13.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style_title.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/14.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/15.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <main>
        <header>

            @include('module/01-content')

        </header>
        <div class="container">
            <div class="matches row">

                <div class="col-7">

                    @include('module/14-content')
                    @include('module/11-content')
                    @include('module/15-content')


                </div>
                <div class="col-4 ">

                    @include('module/13-content')

                </div>
            </div>
        </div>

    </main>
    <br>
    <br>
    <br>
    <br>

    <footer>

        @include('module/02-content')

    </footer>

    @section('scripts')

    <script src="{{ asset('/public/js/jquery-2.2.1.min.js') }}"></script>
    <script src="{{ asset('/public/js/bootstrap.min.js') }}"></script>
    @endsection
</body>



</html>
