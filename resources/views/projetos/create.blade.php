@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Criar Novo Projeto</h1>

    <form action="{{ route('projetos.store') }}" method="POST">
        @include('projetos._form')

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('projetos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
