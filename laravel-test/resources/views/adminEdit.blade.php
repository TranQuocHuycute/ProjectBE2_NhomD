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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
        <form method="post" action="{{url('games/update?id='.$game->id)}}">
        @csrf <!-- {{ csrf_field() }} -->
            <div class="form-group">
                <label for="exampleInputEmail1">Home Team</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name ="HomeTeam" aria-describedby="emailHelp" value = "{{ $game->HomeTeam}}"
                    placeholder="">
                
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Away Team</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name ="AwayTeam" value = "{{ $game->AwayTeam}}" aria-describedby="emailHelp"
                    placeholder="Enter email">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Home Score</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name ="HomeScore" value = "{{ $game->HomeScore}}" aria-describedby="emailHelp"
                    placeholder="Enter email">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Away Score</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name ="AwayScore" value = "{{ $game->AwayScore}}" aria-describedby="emailHelp"
                    placeholder="Enter email">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Schedule</label>
                <input type="text" class="form-control" id="exampleInputEmail1" disabled value = "{{ $game->ScheduleDate}}" aria-describedby="emailHelp"
                    placeholder="Enter email">
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>