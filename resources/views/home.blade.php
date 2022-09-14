<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <header>
        <ul>
            <li><a href="{{ route('test') }}">Pagina Due</a></li>
            <li><a href="{{ route('paginatre') }}">Pagina Tre</a></li>
            <li><a href="">Pagina Quattro</a></li>
        </ul>
    </header>
    <h1> Welcome I primi passi Laravel</h1>

    @foreach ($students as $student)
        <p>{{ $student }}

        </p>
    @endforeach
</body>

</html>
