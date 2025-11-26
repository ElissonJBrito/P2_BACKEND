<h1>Categorias</h1>

<a href="{{ route('categories.create') }}">Nova Categoria</a>

<ul>
@foreach ($categories as $category)
    <li>
        <b>{{ $category->nome }}</b> — {{ $category->descricao }}
        <br>
        <a href="{{ route('categories.edit', $category) }}">Editar</a>

        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </li>
@endforeach
</ul>
