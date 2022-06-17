<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-6.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-7.css') }}">

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('module/3-content')
                @include('module/4-content')
                @include('module/5-content')
            </div>
            <div class="col-md-5">
                @include('module/6-content')
            </div>
            <div class="col-md-4">
                @include('module/7-content')
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>