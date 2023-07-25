<html>

<head>
    <title>Gerenciador Tarefas</title>
</head>

<body>
    <h1>Conteúdo do tarefa{{ $tarefa->titulo }}</h1>
    <ul>
        <li><strong>Título: </strong>{{ $tarefa->titulo }}</li>
        <li><strong>Conteúdo: </strong>{{ $tarefa->conteudo }}</li>
    </ul>
    <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="tarefa">
        <!-- @csrf é utilizado para criar um token de validação do
formulário -->
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Excluir o tarefa: {{ $tarefa->titulo
}}</button>
    </form>

</body>

</html>
