<h1>Editar Matéria</h1>

<form action="/subjects/{{ $subject->id }}" method="POST">
    @csrf
    @method('PUT')

    <input 
        type="text" 
        name="name" 
        value="{{ $subject->name }}"
    >

    <br><br>

    <textarea name="description">{{ $subject->description }}</textarea>

    <br><br>

    <button type="submit">Atualizar</button>
</form>