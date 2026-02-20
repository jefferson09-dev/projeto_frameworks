<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2>Lista de Clientes</h2>

    <form action="{{ route('clients.create') }}" method="GET" style="display: inline;">
        <button type="submit" class="btn btn-success">
            Novo Cliente
        </button>
    </form>
<hr>

<div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td class="ps-4 align-middle">{{ $client->id }}</td>
                            <td class="align-middle fw-semibold">{{ $client->name }}</td>
                            <td class="align-middle">{{ $client->phone }}</td>
                            <td class="align-middle text-muted">{{ $client->email }}</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-outline-primary">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>