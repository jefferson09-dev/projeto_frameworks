
@extends('layouts.app')

@section('content')

<h1>Nova Matéria</h1>

<div class="card">

<form action="/subjects" method="POST">

    @csrf

    <input 
        type="text"
        name="name"
        placeholder="Nome da matéria"
    >

    <br><br>

    <textarea 
        name="description"
        placeholder="Descrição"
    ></textarea>

    <br><br>

    <button type="submit">
        Salvar
    </button>

</form>

</div>

@endsection