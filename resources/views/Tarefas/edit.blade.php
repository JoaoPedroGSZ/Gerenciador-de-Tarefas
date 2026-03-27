@extends('layouts.app')

@section('content')
 <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Editar Tarefa</h2>
    <a href="{{ route('tarefas.index') }}" class ="btn btn-secondary">Voltar</a>

    <div>
        <div>
            <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST" enctype="multipart/form-data">
                @csfr

                <div>
                    <div>
                        <label for="nome"
                    </div>
                </div>
            </form>
        </div>
    </div>
 </div>