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
                        <select name="client_id" class="form-control">
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}">
                                    {{ $client->name }}
                                </option>
                            @endforeach
                        </select>
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

@endsection