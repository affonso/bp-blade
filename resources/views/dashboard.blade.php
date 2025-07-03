@extends('layouts.app')

@section('title', 'Dashboard - Minha Aplicação')

@section('content')
    <!-- Header do Conteúdo -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Bem-vindo ao Dashboard</h1>
        <p class="mt-2 text-gray-600 dark:text-gray-400">Gerencie seus dados e monitore suas métricas.</p>
    </div>

    <!-- Cards de Métricas -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        @include('components.dashboard.metric-card', [
            'title' => 'Usuários',
            'value' => '1,234',
            'color' => 'blue',
            'icon' => '<svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                       </svg>'
        ])

        @include('components.dashboard.metric-card', [
            'title' => 'Receita',
            'value' => 'R$ 45,678',
            'color' => 'green',
            'icon' => '<svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                       </svg>'
        ])

        @include('components.dashboard.metric-card', [
            'title' => 'Pedidos',
            'value' => '567',
            'color' => 'yellow',
            'icon' => '<svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                       </svg>'
        ])

        @include('components.dashboard.metric-card', [
            'title' => 'Conversões',
            'value' => '23.4%',
            'color' => 'red',
            'icon' => '<svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                       </svg>'
        ])
    </div>

    <!-- Área de Conteúdo Principal -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow">
        <div class="p-6">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Conteúdo Principal</h2>
            <p class="text-gray-600 dark:text-gray-400 mb-4">
                Esta é a área principal do seu dashboard. Você pode adicionar gráficos, tabelas,
                formulários ou qualquer outro conteúdo aqui.
            </p>
            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Características do Template:</h3>
                <ul class="list-disc list-inside text-gray-600 dark:text-gray-400 space-y-1">
                    <li>Sidebar responsiva com efeito slide no mobile</li>
                    <li>Alternância entre tema claro e escuro</li>
                    <li>Design limpo e profissional</li>
                    <li>Totalmente responsivo</li>
                    <li>Usando Tailwind CSS</li>
                    <li>Componentes modulares reutilizáveis</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
