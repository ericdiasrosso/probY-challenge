@extends('layouts.app')  

@section('content')

    <x-slot name="header">
        <h2 class="font-semibold text-xl dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <p class="text-gray-800">Você está logado!</p>
                </div>
            </div>
            
            <!-- Adicionando opções para visualizar e criar projetos -->
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Link para visualizar projetos -->
                <div class="p-4 bg-gray-100 rounded shadow">
                    <h3 class="text-lg font-semibold">Visualizar Projetos</h3>
                    <p>Veja todos os projetos cadastrados no sistema.</p>
                    <a href="{{ route('projetos.index') }}" class="btn btn-primary mt-2">Visualizar Projetos</a>
                </div>

                <!-- Link para criar um novo projeto -->
                <div class="p-4 bg-gray-100 rounded shadow">
                    <h3 class="text-lg font-semibold">Criar Novo Projeto</h3>
                    <p>Cadastre um novo projeto no sistema.</p>
                    <a href="{{ route('projetos.create') }}" class="btn btn-success mt-2">Criar Projeto</a>
                </div>
            </div>
        </div>
    </div>
@endsection
