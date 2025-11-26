<h1>Editar Categoria</h1>

<form action="{{ route('categories.update', $category) }}" method="POST">
@csrf
@method('PUT')

Nome: <input type="text" name="nome" value="{{ $category->nome }}"><br><br>
Descrição:
<textarea name="descricao">{{ $category->descricao }}</textarea><br><br>

<button type="submit">Atualizar</button>
</form>

<a href="{{ route('categories.index') }}">Voltar</a>
