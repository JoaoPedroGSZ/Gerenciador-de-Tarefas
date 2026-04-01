<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefasController;


Route::resource('tarefas', TarefasController::class)->except(['show']);