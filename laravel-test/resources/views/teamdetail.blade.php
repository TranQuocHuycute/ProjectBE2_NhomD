<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/01.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/02.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/13.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/14.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/15.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
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
                    @include('module/12-content')
                    @include('module/15-content')

                </div>
                <div class="col-4 ">
                    @include('module/13-content')
                </div>
            </div>
        </div>

    </main>

    <footer>
        @include('module/02-content')
    </footer>

    @section('scripts')
    <script src="/public/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/public/js/jquery-2.2.1.min.js" type="text/javascript"></script>
    <script src="{{ asset('/public/js/jquery-2.2.1.min.js') }}"></script>
    <script src="{{ asset('/public/js/bootstrap.min.js') }}"></script>
    @endsection
</body>



</html>
