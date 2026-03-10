@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Lista de Agendamentos</h2>

    <a href="{{ route('appointments.create') }}" class="btn btn-success">
        + Novo Agendamento
    </a>
</div>

@if($appointments->isEmpty())
    <div class="alert alert-info">
        Nenhum agendamento cadastrado ainda.
    </div>
@else

<div class="card shadow-sm">
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead class="table-dark">
                <tr>
                    <th>Cliente</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Serviço</th>
                    <th>Status</th> {{-- ADICIONA AQUI --}}
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->client->name ?? 'Sem cliente' }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->time }}</td>
                    <td>{{ $appointment->service }}</td>

                    <td>
                        @if($appointment->status == 'Pendente')
                            <span class="badge bg-warning text-dark">Pendente</span>
                        @elseif($appointment->status == 'Confirmado')
                            <span class="badge bg-success">Confirmado</span>
                        @else
                            <span class="badge bg-danger">Cancelado</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('appointments.edit', $appointment->id) }}"
                        class="btn btn-primary btn-sm">
                             Editar
                         </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endif

@endsection