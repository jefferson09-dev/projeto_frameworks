@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Novo Cliente</h5>
            </div>

            <div class="card-body">

                <form action="{{ route('clients.store') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="tel" name="phone" class="form-control" pattern="[0-9]+" required>
                    </div>

                    <button type="submit" class="btn btn-success w-100">
                        Cadastrar
                    </button>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection