@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Editar Cliente</h4>
            </div>

            <div class="card-body">

                <form action="{{ route('clients.update', $client) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" 
                               name="name" 
                               value="{{ $client->name }}" 
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" 
                               name="phone" 
                               value="{{ $client->phone }}" 
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" 
                               name="email" 
                               value="{{ $client->email }}" 
                               class="form-control">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('clients.index') }}" 
                           class="btn btn-secondary">
                           Voltar
                        </a>

                        <button type="submit" 
                                class="btn btn-success">
                            Atualizar Cliente
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection