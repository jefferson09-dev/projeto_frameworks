@extends('layouts.app')

@section('content')

<h1>Dashboard</h1>

<div class="dashboard">

    <div class="card total-card">

        <h2>Total de Estudos</h2>

        <p>{{ $totalStudies }}</p>

    </div>

    <div class="card complete-card">

        <h2>Concluídos</h2>

        <p>{{ $completedStudies }}</p>

    </div>

    <div class="card pending-card">

        <h2>Pendentes</h2>

        <p>{{ $pendingStudies }}</p>

    </div>

    <div class="card time-card">

        <h2>Tempo Total</h2>

        <p>{{ $totalMinutes }} min</p>

    </div>

</div>

@endsection