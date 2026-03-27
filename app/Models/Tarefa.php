<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = ['titulo', 'descricao', 'data_conclusao', 'data_criacao', 'status'];
}
