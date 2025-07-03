<div id="sidebar" class="sidebar-transition fixed lg:static inset-y-0 left-0 z-50 w-64 bg-blue-900 dark:bg-blue-950 transform -translate-x-full lg:translate-x-0 lg:block">
    <div class="flex flex-col h-full">
        <!-- Header da Sidebar -->
        @include('components.dashboard.sidebar-header')

        <!-- Menu de Navegação -->
        @include('components.dashboard.sidebar-nav')

        <!-- Footer da Sidebar com Theme Switch -->
        @include('components.dashboard.sidebar-footer')
    </div>
</div>
