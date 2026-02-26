@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow">
            {{-- <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Novo Agendamento</h4>
            </div> --}}
            <div class="bg-white shadow-lg rounded-2xl p-6">
                Novo Agendamento
            </div>

            <div class="card-body">

                <form action="{{ route('appointments.store') }}" method="POST">
                    @csrf     
                    
                    <div class="mb-3">
                        <label>Data</label>
                        <input type="date" name="date" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Hora</label>
                        <input type="time" name="time" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Serviço</label>
                        <input type="text" name="service" class="form-control">
                    </div>

                    {{-- <button type="submit" class="btn btn-success">
                        Agendar
                    </button> --}}
                    <button class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl transition">
                        Agendar
                    </button>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection