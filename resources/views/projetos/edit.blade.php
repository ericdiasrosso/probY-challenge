@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Projeto</h1>

    <form action="{{ route('projetos.update', $projeto) }}" method="POST">
        @method('PUT')
        @include('projetos._form')

        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <a href="{{ route('projetos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
