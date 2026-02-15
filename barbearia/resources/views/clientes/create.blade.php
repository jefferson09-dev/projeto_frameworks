<h1>Cadastrar Novo Cliente</h1>

{{-- O action usa a rota 'clientes.store' que está no seu Controller --}}
<form action="{{ route('clientes.store') }}" method="POST">
    @csrf {{-- OBRIGATÓRIO: Sem isso, o Laravel não deixa salvar --}}

    <div>
        <label>Nome:</label><br>
        <input type="text" name="nome" required>
    </div>

    <div>
        <label>Telefone:</label><br>
        <input type="text" name="telefone" required>
    </div>

    <div>
        <label>E-mail:</label><br>
        <input type="email" name="email" required>
    </div>

    <br>
    <button type="submit" style="background-color: green; color: white; padding: 10px;">
        SALVAR CLIENTE
    </button>
    
    <a href="{{ route('clientes.index') }}">Cancelar e Voltar</a>
</form>