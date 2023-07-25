<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/tarefas', [TarefaController::class, 'index'])->name('tarefas.index');
Route::get('/tarefas/create', [TarefaController::class, 'create'])->name('tarefas.create');
Route::post('/tarefas', [TarefaController::class, 'store'])->name('tarefas.store');
Route::delete('/tarefas/{id}', [TarefaController::class, 'destroy'])->name('tarefas.destroy');
Route::get('/tarefas/{id}', [TarefaController::class, 'show'])->name('tarefas.show');
