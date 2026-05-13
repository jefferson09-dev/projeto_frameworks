@extends('layouts.app')

@section('content')

<h1>Estudos</h1>

<a 
    class="create-btn"
    href="/studies/create"
>
    Novo Estudo
</a>

<hr>

@foreach($studies as $study)

<div class="card">

    <h2>{{ $study->title }}</h2>

    <p>
        <strong>Matéria:</strong>
        {{ $study->subject->name }}
    </p>

    <p>{{ $study->description }}</p>

    {{-- <p>
        📅 {{ $study->study_date }}
    </p>

    <p>
        🕒 {{ $study->study_time }}
    </p>

    <p>
        ⏱ {{ $study->minutes_studied }} min
    </p> --}}

    <div class="study-info">

        <span>📅</span>
        <span>{{ $study->study_date }}</span>

    </div>

    <div class="study-info">

        <span>🕒</span>
        <span>{{ $study->study_time }}</span>

    </div>

    <div class="study-info">

        <span>⏱</span>
        <span>{{ $study->minutes_studied }} min</span>

    </div>

    {{-- em teste --}}

    {{-- <p>

        @if($study->status == 'Concluído')

            ✔ {{ $study->status }}

        @else

            ⚠ {{ $study->status }}

        @endif

    </p> --}}

    <div class="study-info">

        <span>

            @if($study->status == 'Concluído')

                ✔

            @else

                ⚠

            @endif

        </span>

        <span>{{ $study->status }}</span>

    </div>

    @if($study->status != 'Concluído')

    <form 
        action="/studies/{{ $study->id }}/finish"
        method="POST"
    >

        @csrf
        @method('PUT')

        <button type="submit">

            Concluir

        </button>

    </form>

@endif

</div>

@endforeach

@endsection