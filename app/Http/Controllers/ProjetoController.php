<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;

class ProjetoController extends Controller
{
    public function index()
    {
        $projetos = Projeto::paginate(10); // Implementação de paginação
        return view('projetos.index', compact('projetos'));
    }

    public function create()
    {
        return view('projetos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'data_inicio' => 'required|date',
            'status' => 'required|in:Pendente,Em Andamento,Concluído',
        ]);

        Projeto::create($validated);

        return redirect()->route('projetos.index')->with('success', 'Projeto criado com sucesso!');
    }

    public function edit(Projeto $projeto)
    {
        return view('projetos.edit', compact('projeto'));
    }

    public function update(Request $request, Projeto $projeto)
    {
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'data_inicio' => 'required|date',
            'status' => 'required|in:Pendente,Em Andamento,Concluído',
        ]);

        $projeto->update($validated);

        return redirect()->route('projetos.index')->with('success', 'Projeto atualizado com sucesso!');
    }

    public function destroy(Projeto $projeto)
    {
        $projeto->delete();
        return redirect()->route('projetos.index')->with('success', 'Projeto excluído com sucesso!');
    }
}
