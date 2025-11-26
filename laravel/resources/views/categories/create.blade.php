<h1>Nova Categoria</h1>

<form action="{{ route('categories.store') }}" method="POST">
@csrf

Nome: <input type="text" name="nome"><br><br>
Descrição: <textarea name="descricao"></textarea><br><br>

<button type="submit">Salvar</button>
</form>

<a href="{{ route('categories.index') }}">Voltar</a>
