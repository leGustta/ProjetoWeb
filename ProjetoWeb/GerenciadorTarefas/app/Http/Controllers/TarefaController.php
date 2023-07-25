<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function index(){
        $tarefas = Tarefa::all();

        return view('admin.tarefas.viewIndex', compact('tarefas'));
    }

    public function create()
    {
        return view('admin.tarefas.viewCreate');
    }
      
    public function store( Request $request )
    {
        
        Tarefa::create($request->all());
        
        return redirect()->route('tarefas.index');
    }
        
    public function destroy($id)
    {
        // irá retornar o post que tem o id passado
        $tarefa = Tarefa::find($id);
        //verifica se foi localizado um post para o id passado
        if (!$tarefa) {
        //caso não seja localizado o id, volta para a página inicial
        return redirect()->route('tarefas.index');
        }
        
        //caso tenha encontrado um post para o id faz a exclusão
        $tarefa->delete();

        // redireciona para a página default e passa uma mensagem de exclusão com sucesso
        return redirect()
        ->route('tarefas.show')
        ->with('message', 'tarefa excluída com sucesso');
    }

    public function show($id){
        // irá retornar o post que tem o id passado
        $tarefa = tarefa::find($id);
        //verifica se foi localizado um post para o id passado
        if(!$tarefa){
        //caso não seja localizado o id, volta para a página inicial
        return redirect()->route('tarefas.index');
        }
        //caso tenha encontrado um post para o id, chama a view para apresentar o conteúdo do post
        return view('admin.tarefas.viewShow', compact('tarefa'));
    }    
}
