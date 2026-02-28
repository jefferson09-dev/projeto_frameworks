@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Novo Agendamento</h5>
            </div>

            <div class="card-body">

                <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
                    @csrf
                    @method('PUT')    
                    
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

                    {{-- <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="Pendente">Pendente</option>
                            <option value="Confirmado">Confirmado</option>
                            <option value="Cancelado">Cancelado</option>
                        </select>
                    </div> --}}

                    <select name="status" class="form-select">
                        <option value="Pendente" {{ old('status') == 'Pendente' ? 'selected' : '' }}>
                            Pendente
                        </option>
                        <option value="Confirmado" {{ old('status') == 'Confirmado' ? 'selected' : '' }}>
                            Confirmado
                        </option>
                        <option value="Cancelado" {{ old('status') == 'Cancelado' ? 'selected' : '' }}>
                            Cancelado
                        </option>
                    </select>

                    <button type="submit" class="btn btn-success w-100">
                        Agendar
                    </button>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection