<script type="module">
    // Elementos do DOM
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const openSidebar = document.getElementById('openSidebar');
    const closeSidebar = document.getElementById('closeSidebar');
    const themeToggle = document.getElementById('themeToggle');
    const themeText = document.getElementById('themeText');
    const sunIcon = document.getElementById('sunIcon');
    const moonIcon = document.getElementById('moonIcon');

    // Controle da Sidebar Mobile
    function showSidebar() {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function hideSidebar() {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
        document.body.style.overflow = '';
    }

    // Event Listeners para Sidebar
    openSidebar?.addEventListener('click', showSidebar);
    closeSidebar?.addEventListener('click', hideSidebar);
    overlay?.addEventListener('click', hideSidebar);

    // Fechar sidebar ao redimensionar para desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            hideSidebar();
        }
    });

    // Controle do Tema
    function updateTheme() {
        const isDark = document.documentElement.classList.contains('dark');

        if (isDark) {
            sunIcon.classList.remove('hidden');
            moonIcon.classList.add('hidden');
            themeText.textContent = 'Tema Claro';
        } else {
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
            themeText.textContent = 'Tema Escuro';
        }
    }

    function toggleTheme() {
        const isDark = document.documentElement.classList.contains('dark');

        if (isDark) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }

        updateTheme();
    }

    // Inicializar tema baseado na preferência salva ou do sistema
    function initializeTheme() {
        const savedTheme = localStorage.getItem('theme');
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

        if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
            document.documentElement.classList.add('dark');
        }

        updateTheme();
    }

    // Event Listener para mudança de tema
    themeToggle?.addEventListener('click', toggleTheme);

    // Inicializar tema ao carregar a página
    initializeTheme();

    // Detectar mudanças na preferência do sistema
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
        if (!localStorage.getItem('theme')) {
            if (e.matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
            updateTheme();
        }
    });
</script>
