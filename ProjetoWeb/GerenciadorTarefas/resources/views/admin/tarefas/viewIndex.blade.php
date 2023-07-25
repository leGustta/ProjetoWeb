<html>
<head>
<title>Gerenciador de Tarefas</title>
</head>
<body>

<a href="{{ route( 'tarefas.create') }}"> Criar Tarefa</a>
<h1>Listagem de Tarefas</h1>

@foreach($tarefas as $tarefa)
<p>{{$tarefa->titulo}} 
[ <a href="{{ route( 'tarefas.show', $tarefa->id ) }}">Conteúdo</a>]
</p>
@endforeach
</body>
</html>