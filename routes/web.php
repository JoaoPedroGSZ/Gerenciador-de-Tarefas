<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefasController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {return view('login.index'); 
});

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::post('/tarefas', [TarefasController::class, 'store'])->name('tarefas.store');
Route::get('/tarefas', [TarefasController::class, 'index'])->name('tarefas.index');
Route::get('/tarefas/create', [TarefasController::class, 'create'])->name('tarefas.create');
Route::get('/tarefas/{tarefa}/edit', [TarefasController::class, 'edit'])->name('tarefas.edit');
Route::put('/tarefas/{tarefa}', [TarefasController::class, 'update'])->name('tarefas.update');
Route::delete('/tarefas/{tarefa}', [TarefasController::class, 'destroy'])->name('tarefas.destroy');