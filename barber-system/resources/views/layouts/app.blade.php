<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">💈 Barbearia</a>
            <div>
                <a href="{{ route('clients.index') }}" class="btn btn-outline-light btn-sm">Clientes</a>
                <a href="{{ route('appointments.index') }}" class="btn btn-outline-light btn-sm">Agendamentos</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>  

</body>

</html>