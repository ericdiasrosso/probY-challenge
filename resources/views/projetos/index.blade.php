@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Lista de Projetos</h1>

    <a href="{{ route('projetos.create') }}" class="btn btn-primary mb-3">Criar Novo Projeto</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Status</th>
                    <th>Data de Início</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projetos as $projeto)
                    <tr>
                        <td>{{ $projeto->id }}</td>
                        <td>{{ $projeto->nome }}</td>
                        <td>
                            <span class="badge bg-{{ $projeto->status == 'Concluído' ? 'success' : ($projeto->status == 'Em Andamento' ? 'warning' : 'secondary') }}">
                                {{ $projeto->status }}
                            </span>
                        </td>
                        <td>{{ $projeto->data_inicio }}</td>
                        <td class="text-center">
                            <a href="{{ route('projetos.show', $projeto) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('projetos.edit', $projeto) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('projetos.destroy', $projeto) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Paginação -->
    <div class="d-flex justify-content-center mt-4">
        {{ $projetos->links() }}
    </div>
</div>
@endsection
