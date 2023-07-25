<html>
<head>
<title>GerenciadorTarefas</title>
</head>
<body>
<h1>Cadastrar Tarefa</h1>
<form action="{{ route('tarefas.store') }}" method="post">

@csrf
<input type="text" name="titulo" id="titulo" placeholder="Digite um título"> <br>
<textarea name="descricao" id="descricao" cols="0" rows="3"
placeholder="Digite a descrição"> </textarea> <br>
<input type="text" name="nivel" id="nivel" placeholder="Digite o nivel de prioridadae"> <br>
<input type="text" name="data" id="data" placeholder="Defina uma data"> <br>
<input type="text" name="horario" id="horario" placeholder="Defina um horario"> <br>



<button type="submit">Enviar</button>
</form>
</body>
</html>