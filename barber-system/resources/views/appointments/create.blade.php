@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Novo Agendamento</h4>
            </div>

            <div class="card-body">

                <form action="{{ route('appointments.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Cliente</label>

                        @if($clients->isEmpty())
                            <div class="alert alert-warning d-flex justify-content-between align-items-center">
                                <span>Nenhum cliente cadastrado.</span>

                                <button type="button"
                                        class="btn btn-sm btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalCliente">
                                    + Cadastrar Cliente
                                </button>
                            </div>
                        @else
                            <select name="client_id" class="form-control" required>
                                <option value="">Selecione um cliente</option>
                                @foreach($clients as $client)
                                    <option value="{{ $client->id }}">
                                        {{ $client->name }}
                                    </option>
                                @endforeach
                            </select>

                            <div class="mb-2">
                                <button type="button"
                                        class="btn btn-sm btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalCliente">
                                    + Cadastrar Cliente
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Data</label>
                        <input type="date" name="date" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Hora</label>
                        <input type="time" name="time" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Serviço</label>
                        <input type="text" name="service" class="form-control">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('appointments.index') }}" class="btn btn-secondary">
                            Voltar
                        </a>

                        <button type="submit" class="btn btn-success">
                            Agendar
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

<!-- Modal Cliente -->
<div class="modal fade" id="modalCliente" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Novo Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('clients.store') }}" method="POST">
                    @csrf

                    {{-- <div class="mb-3">
                        <label class="form-label">Nome do Cliente</label>
                        <input type="text" name="name" class="form-control" required>
                    </div> --}}
                    <div class="mb-3">
                        <label class="form-label">Nome do Cliente</label>

                        <input type="text"
                            name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}"
                            required>

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div> --}}
                    <div class="mb-3">
                        <label class="form-label">Telefone</label>

                            <input type="text"
                            name="phone"
                            class="form-control @error('phone') is-invalid @enderror"
                            value="{{ old('phone') }}"
                            required>

                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>

                    <button type="submit" class="btn btn-success w-100">
                        Salvar Cliente
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection