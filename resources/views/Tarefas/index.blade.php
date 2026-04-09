@extends('layouts.app')

@section('title', 'Lista de Tarefas')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-secondary">
            <i class="bi bi-list-task"></i> Lista de Tarefas
        </h2>
        <a href="{{ route('tarefas.create') }}" class="btn btn-success shadow-sm">
            <i class="bi bi-plus-lg"></i> Nova Tarefa
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0"> 
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">ID</th>
                            <th>Nome</th>
                            <th>Status</th>
                            <th>Criação</th>
                            <th>Conclusão</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tarefas as $tarefa)
                            <tr>
                                <td class="ps-4 fw-bold">#{{ $tarefa->id }}</td>
                                <td>{{ $tarefa->nome }}</td>
                                <td>
                                    <span class="badge {{ $tarefa->status == 'concluida' ? 'bg-success' : 'bg-warning text-dark' }}">
                                        {{ ucfirst($tarefa->status) }}
                                    </span>
                                </td>
                               
                                <td>{{ \Carbon\Carbon::parse($tarefa->created_at)->format('d/m/Y') }}</td>
                                <td>{{ $tarefa->data_conclusao ? \Carbon\Carbon::parse($tarefa->data_conclusao)->format('d/m/Y') : '-' }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="btn btn-sm btn-outline-primary">
                                            Editar
                                        </a>
                                        
                                        
                                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Excluir</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">
                                    Nenhuma tarefa cadastrada no momento.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection