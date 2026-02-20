<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border-0">
                <div class="card-header bg-primary text-white py-3">
                    <h4 class="mb-0 fw-bold">Cadastrar Novo Cliente</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('clients.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Nome</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome completo" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label fw-bold">Telefone</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="(00) 00000-0000">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="exemplo@email.com" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg shadow-sm">
                                Salvar Cliente
                            </button>
                            <a href="{{ route('clients.index') }}" class="btn btn-link text-muted">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>