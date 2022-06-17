<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/02.css') }}">
    <link rel="stylesheet" href="{{ url('css/21.css') }}">
    <link rel="stylesheet" href="{{ url('css/boostrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="container">
        {!! Form::open(['method' => 'POST', 'route' => 'category.update']) !!}
        @csrf
        <div class="mb-3">
            {!! Form::label('id', 'Id') !!}
            {{ Form::number('id', $category->id, ['class' => 'form-control', 'disabled' => true]) }}
            {{ Form::number('id', $category->id, ['class' => 'form-control', 'hidden' => true]) }}
            @if ($errors->has('id'))
                <span class="text-danger">{{ $errors->first('id') }}</span>
            @endif
        </div>
        <div class="mb-3">
            {!! Form::label('name', 'Name') !!}
            {{ Form::text('name', $category->name, array_merge(['class' => 'form-control'])) }}
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="mb-3">
            {!! Form::label('slug', 'Slug') !!}
            {{ Form::text('slug', $category->slug, array_merge(['class' => 'form-control'])) }}
            @if ($errors->has('slug'))
                <span class="text-danger">{{ $errors->first('slug') }}</span>
            @endif
        </div>
        <div class="mb-3">
            {!! Form::label('priority', 'Priority') !!}
            {{ Form::text('priority', $category->priority, array_merge(['class' => 'form-control'])) }}
            @if ($errors->has('priority'))
                <span class="text-danger">{{ $errors->first('priority') }}</span>
            @endif
        </div>
        <div class="mb-3">
            {!! Form::label('flag', 'Flag') !!}
            {{ Form::text('flag', $category->flag, array_merge(['class' => 'form-control'])) }}
            @if ($errors->has('flag'))
                <span class="text-danger">{{ $errors->first('flag') }}</span>
            @endif
        </div>
        <div class="mb-3">
            {!! Form::label('alpha2', 'Alpha2') !!}
            {{ Form::text('alpha2', $category->alpha2, array_merge(['class' => 'form-control'])) }}
            @if ($errors->has('alpha2'))
                <span class="text-danger">{{ $errors->first('alpha2') }}</span>
            @endif
        </div>
        <div class="modal-footer">
            {!! Form::button('Close', ['class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal']) !!}
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

</body>

</html>
