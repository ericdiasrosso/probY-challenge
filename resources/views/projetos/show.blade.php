@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Detalhes do Projeto</h1>

    <ul class="list-group">
        <li class="list-group-item"><strong>Nome:</strong> {{ $projeto->nome }}</li>
        <li class="list-group-item"><strong>Descrição:</strong> {{ $projeto->descricao }}</li>
        <li class="list-group-item"><strong>Data de Início:</strong> {{ $projeto->data_inicio }}</li>
        <li class="list-group-item"><strong>Status:</strong> {{ $projeto->status }}</li>
    </ul>

    <a href="{{ route('projetos.index') }}" class="btn btn-secondary mt-3">Voltar</a>
</div>
@endsection
