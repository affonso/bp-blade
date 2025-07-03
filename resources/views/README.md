# Template Dashboard Modularizado

Este template foi modularizado para facilitar a manutenção e reutilização de componentes.

## Estrutura de Arquivos

### Layouts
- `layouts/app.blade.php` - Layout base da aplicação

### Componentes do Dashboard
- `components/dashboard/sidebar.blade.php` - Container principal da sidebar
- `components/dashboard/sidebar-header.blade.php` - Header da sidebar com logo
- `components/dashboard/sidebar-nav.blade.php` - Navegação da sidebar
- `components/dashboard/sidebar-footer.blade.php` - Footer com botão de tema
- `components/dashboard/mobile-header.blade.php` - Header para dispositivos móveis
- `components/dashboard/scripts.blade.php` - JavaScript da aplicação
- `components/dashboard/metric-card.blade.php` - Card de métricas reutilizável
- `components/dashboard/nav-item.blade.php` - Item de menu da sidebar

### Views
- `dashboard.blade.php` - Página principal do dashboard

## Como Usar

### 1. Criando uma Nova Página

Para criar uma nova página que usa o layout do dashboard:

```blade
@extends('layouts.app')

@section('title', 'Título da Página')

@section('content')
    <!-- Seu conteúdo aqui -->
@endsection
```

### 2. Usando o Card de Métricas

```blade
@include('components.dashboard.metric-card', [
    'title' => 'Total de Vendas',
    'value' => 'R$ 1.234,56',
    'color' => 'green', // blue, green, yellow, red, purple, indigo
    'icon' => '<path d="...">...</path>' // SVG path
])
```

### 3. Adicionando Itens ao Menu

Edite o arquivo `components/dashboard/sidebar-nav.blade.php`:

```blade
@include('components.dashboard.nav-item', [
    'href' => route('minha.rota'),
    'active' => request()->routeIs('minha.rota'),
    'icon' => '<path d="...">...</path>'
])
    Nome do Menu
@endinclude
```

### 4. Customizando o Header da Sidebar

Edite `components/dashboard/sidebar-header.blade.php` para alterar o título ou adicionar elementos.

### 5. Adicionando CSS/JS Customizado

No layout da sua página:

```blade
@push('styles')
<style>
    /* CSS customizado */
</style>
@endpush

@push('scripts')
<script>
    // JavaScript customizado
</script>
@endpush
```

## Benefícios da Modularização

1. **Manutenibilidade**: Cada componente tem uma responsabilidade específica
2. **Reutilização**: Componentes podem ser usados em diferentes páginas
3. **Organização**: Código bem estruturado e fácil de encontrar
4. **Flexibilidade**: Fácil customização de partes específicas
5. **Escalabilidade**: Fácil adição de novos componentes

## Componentes Reutilizáveis

### MetricCard
- **Props**: `title`, `value`, `icon`, `color`
- **Uso**: Cards de métricas no dashboard

### NavItem
- **Props**: `href`, `icon`, `active`
- **Uso**: Itens de menu na sidebar

## Estrutura de Pastas

```
resources/views/
├── layouts/
│   └── app.blade.php
├── components/
│   └── dashboard/
│       ├── sidebar.blade.php
│       ├── sidebar-header.blade.php
│       ├── sidebar-nav.blade.php
│       ├── sidebar-footer.blade.php
│       ├── mobile-header.blade.php
│       ├── scripts.blade.php
│       ├── metric-card.blade.php
│       └── nav-item.blade.php
├── dashboard.blade.php
└── template.blade.php (original)
```

## Funcionalidades Incluídas

- ✅ Sidebar responsiva com animação
- ✅ Tema claro/escuro com persistência
- ✅ Layout mobile-first
- ✅ Componentes reutilizáveis
- ✅ Cards de métricas customizáveis
- ✅ Navegação modular
- ✅ Scripts organizados
