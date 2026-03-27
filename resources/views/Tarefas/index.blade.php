@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-between align-items-center mb4">
        <h2>
            Lista de Tarefas
        </h2>
        <a href="{{ route('tarefas.create') }}" class="btn btn-success">Nova Tarefa</a>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Status</th>
                        <th>Data de Criação</th>
                        <th>Data de Conclusão</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tarefas as $tarefa)
                        <tr>
                            <td>{{ $tarefa->id }}</td>
                            <td>{{ $tarefa->nome }}</td>
                            <td>{{ $tarefa->status }}</td>
                            <td>{{ $tarefa->data_craicao }}</td>
                            <td>{{ $tarefa->data_conclusao }}</td>
                            <td>
                                <div>
                                    <a href="{{ route('tarefas.edit') }}" class="btn btnsm btn-primary">Editar</a>
                                    <a href="{{ route('tarefas.destroy') }}" class="btn btnsm btn-primary">Excluir</a>
                                </div>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection