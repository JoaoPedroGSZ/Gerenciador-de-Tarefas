@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Nova Tarefa</h2>
    <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Voltar</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('tarefas.store') }}" method="POST">
            @csrf
            <div>
                <div>
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" required>
                </div>
                <div>
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea name="descricao" id="descricao" class="form-control"></textarea>
                </div>
                <div>
                    <label for="data_criacao" class="form-label">Data de Criação</label>
                    <input type="date" name="data_criacao" id="data_criacao" class="form-control">
                </div>
                <div>
                    <label for="data_conclusao" class="form-label">Data de Conclusão</label>
                    <input type="date" name="data_conclusao" id="data_conclusao" class="form-control">
                </div>
                <div>
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="pendente">Pendente</option>
                    </select>
                </div>
            </div>
             <button type="submit" class="btn btn-success">Salvar Flor</button>
        </form>
    </div>
</div>
@endsection