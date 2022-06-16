<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css -->

    <title>Document</title>
</head>

<body>
    <main>
        <header>
            @include('module01')
        </header>
        <div class="container">
            <div class="matches row">

                <div class="col-7">
                    @include('module14')
                    @include('module12')
                    @include('module15')
                </div>

                <div class="col-4 ">
                    @include('module13')
                </div>

            </div>


        </div>

    </main>

    <footer>
        @include('module02')
    </footer>


</body>

@section('scripts')
<script src="/public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/public/js/jquery.2.2.1.min.js" type="text/javascript"></script>
@endsection

</html>