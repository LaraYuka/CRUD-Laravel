<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>@yield('title','Clientes')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap via CDN (simples) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('clientes.index') }}">CRUD Clientes</a>
        </div>
    </nav>

    <div class="container">

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ops!</strong> Verifique os erros abaixo:
            <ul class="mb-0">
                @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @yield('content')
    </div>

</body>

</html>