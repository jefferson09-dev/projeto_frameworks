<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                💈 Barbearia System
            </a>

            <div class="d-flex gap-2">
                <a href="{{ route('clients.index') }}" class="btn btn-outline-light btn-sm px-3">
                    👤 Clientes
                </a>

                <a href="{{ route('appointments.index') }}" class="btn btn-outline-light btn-sm px-3">
                    📅 Agendamentos
                </a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="main-container">
            @yield('content')
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>