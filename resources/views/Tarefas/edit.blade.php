@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Editar Tarefa</h2>
    <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Voltar</a>

    <div>
        <div>
            <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST" enctype="multipart/form-data">
                @csfr

                <div>
                    <div>
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" value="{{ $tarefa->nome }}"
                            required>
                    </div>
                    <div>
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea name="descricao" id="descricao"
                            class="form-control">{{ $tarefa->descricao }}</textarea>
                    </div>
                    <div>
                        <label for="data_criacao" class="form-label">Data de Criação</label>
                        <input type="date" name="data_criacao" id="data_criacao" class="form-control"
                            value="{{ $tarefa->data_criacao ? $tarefa->data_criacao->format('Y-m-d') : '' }}">
                    </div>
                    <div>
                        <label for="data_conclusao" class="form-label">Data de Conclusão</label>
                        <input type="date" name="data_conclusao" id="data_conclusao" class="form-control"
                            value="{{ $tarefa->data_conclusao ? $tarefa->data_conclusao->format('Y-m-d') : '' }}">
                    </div>
                    <div>
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="pendente" {{ $tarefa->status == 'pendente' ? 'selected' : '' }}>Pendente
                            </option>
                            <option value="concluida" {{ $tarefa->status == 'concluida' ? 'selected' : '' }}>Concluída
                            </option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>