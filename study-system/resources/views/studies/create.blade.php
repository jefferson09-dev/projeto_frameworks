@extends('layouts.app')

@section('content')

<h1>Novo Estudo</h1>

@if($errors->any())

    <div class="error-box">

        <ul>

            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

<div class="card">

<form action="/studies" method="POST">

    @csrf

    <label>Matéria</label>

    <select name="subject_id">

        @foreach($subjects as $subject)

            <option value="{{ $subject->id }}">

                {{ $subject->name }}

            </option>

        @endforeach

    </select>

    <br><br>

    <input 
    type="text"
    name="title"
    value="{{old('title') }}"
>
    <br><br>

    <textarea 
        name="description"
        placeholder="Descrição"
>   {{old('description')}}</textarea>

    <br><br>

    <input 
    type="date"
    name="study_date"
    value="{{old('study_date')}}"
>
    <br><br>

    <input 
    type="time"
    name="study_time"
    value="{{old('study_time')}}"
>
    <br><br>

    <select name="status">

        <option 
            value="Pendente"
            {{old('status') == 'Pendente' ? 'selected' : ''}}
        >
            Pendente
        </option>

        <option 
            value="Concluído"
            {{old('status') == 'Concluído' ? 'selected' : ''}}
        >
            Concluído
        </option>

    </select>

    <br><br>

    <input 
    type="number"
        name="minutes_studied"
        placeholder="Tempo estudado em minutos"
    value="{{ old('minutes_studied')}}"
>

    <br><br>

    <button type="submit">
        Salvar
    </button>

</form>

</div>

@endsection