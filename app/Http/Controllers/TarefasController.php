<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefas.index', compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarefas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'nullable',
            'data_conclusao' => 'nullable|date',
            'data_criacao' => 'required|date',
            'status' => 'required|string',
        ]);

        Tarefa::create($request->all());

        return redirect()->route('tarefas.index')->with('success', 'Tarefa criada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarefa $tarefa)
    {
        return view('tarefas.edit', compact('tarefa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'nullable',
            'data_conclusao' => 'nullable|date',
            'data_criacao' => 'required|date',
            'status' => 'required|string',
        ]);

        $tarefa->update($request->all());

        return redirect()->route('tarefas.index')->with('success', 'Tarefa atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();

        return redirect()->route('tarefas.index')->with('success', 'Tarefa deletada com sucesso.');
    }
}
