@extends('layouts.app')

@section('title', 'Editar Tarefa')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-secondary">Editar Tarefa</h2>
        <a href="{{ route('tarefas.index') }}" class="btn btn-outline-secondary shadow-sm">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    {{-- Título --}}
                    <div class="col-md-12 mb-3">
                        <label for="titulo" class="form-label fw-bold">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" 
                               value="{{ old('titulo', $tarefa->titulo) }}" required>
                    </div>

                    {{-- Descrição --}}
                    <div class="col-md-12 mb-3">
                        <label for="descricao" class="form-label fw-bold">Descrição</label>
                        <textarea name="descricao" id="descricao" rows="3" 
                                  class="form-control">{{ old('descricao', $tarefa->descricao) }}</textarea>
                    </div>

                    {{-- Data de Criação --}}
                    <div class="col-md-4 mb-3">
                        <label for="data_criacao" class="form-label fw-bold">Data de Criação</label>
                        <input type="date" name="data_criacao" id="data_criacao" class="form-control"
                               value="{{ $tarefa->data_criacao ? \Carbon\Carbon::parse($tarefa->data_criacao)->format('Y-m-d') : '' }}">
                    </div>

                    {{-- Data de Conclusão --}}
                    <div class="col-md-4 mb-3">
                        <label for="data_conclusao" class="form-label fw-bold">Data de Conclusão</label>
                        <input type="date" name="data_conclusao" id="data_conclusao" class="form-control"
                               value="{{ $tarefa->data_conclusao ? \Carbon\Carbon::parse($tarefa->data_conclusao)->format('Y-m-d') : '' }}">
                    </div>

                    {{-- Status --}}
                    <div class="col-md-4 mb-3">
                        <label for="status" class="form-label fw-bold">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="pendente" {{ $tarefa->status == 'pendente' ? 'selected' : '' }}>Pendente</option>
                            <option value="concluida" {{ $tarefa->status == 'concluida' ? 'selected' : '' }}>Concluída</option>
                        </select>
                    </div>
                </div>

                <hr class="my-4">

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary px-5 shadow-sm">
                        Atualizar Tarefa
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection