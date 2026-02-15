@foreach($clientes as $cliente)
    <p>{{ $cliente->nome }} - {{ $cliente->telefone }} - {{ $cliente->email }}</p>
@endforeach

{{-- resources/views/clientes/index.blade.php --}}

<h1>Lista de Clientes</h1>
<a href="{{ route('clientes.create') }}">CADASTRAR NOVO CLIENTE</a>
<hr>

@forelse($clientes as $cliente)
    <p>{{ $cliente->nome }} - {{ $cliente->telefone }} - {{ $cliente->email }}</p>
@empty
    <p>Nenhum cliente cadastrado ainda.</p>
@endforelse