@extends('layouts.app')

@section('content')

<h1>Matérias</h1>

<a 
    class="create-btn"
    href="/subjects/create"
>
    Nova Matéria
</a>

<hr>

@foreach($subjects as $subject)

<div class="card">

    <h3>{{ $subject->name }}</h3>

    <p>{{ $subject->description }}</p>

    @if($subject->studies->count())

        <hr>

        <h4>Estudos</h4>

        @foreach($subject->studies as $study)

            <div style="margin-bottom: 15px;">

                <strong>
                    {{ $study->title }}
                </strong>

                <br>

                📅 {{ $study->study_date }}

                <br>

                🕒 {{ $study->study_time }}

                <br>

                ⏱ {{ $study->minutes_studied }} min

                <br>

                @if($study->status == 'Concluído')

                    ✔ {{ $study->status }}

                @else

                    ⚠ {{ $study->status }}

                @endif

            </div>

        @endforeach

    @endif

    <div class="actions">

        <a 
            class="edit-btn"
            href="/subjects/{{ $subject->id }}/edit"
        >
            Editar
        </a>

        <form 
            class="delete-form"
            action="/subjects/{{ $subject->id }}"
            method="POST"
        >

            @csrf
            @method('DELETE')

            <button type="submit">
                Excluir
            </button>

        </form>

    </div>

</div>

@endforeach

@endsection