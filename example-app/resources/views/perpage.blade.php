<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('per_page') }}" method="get">
        @csrf
        <input type="text" name="per_page" value="
            @if (isset($per_page)) {{ $per_page }} @endif ">
        <input type="submit" value="Submit" />

    </form>
</body>

</html>
