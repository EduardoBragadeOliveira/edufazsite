<nav x-data="{ open: false }"
    class="fixed top-0 z-50 w-full border-b border-white/10 bg-white/80 backdrop-blur-xl transition-all duration-300">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
        <!-- Logo -->
        <a href="{{ url('/#inicio') }}" class="flex items-center gap-3">
            <img src="/images/logo.png" alt="Edu Faz Site" class="h-18 w-auto">
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden items-center gap-8 md:flex">
            <a href="{{ url('/#inicio') }}"
                class="text-sm font-medium text-slate-600 transition-colors duration-200 hover:text-sky-600">Início</a>
            <a href="{{ url('/#sobre') }}"
                class="text-sm font-medium text-slate-600 transition-colors duration-200 hover:text-sky-600">Sobre</a>
            <a href="{{ url('/#servicos') }}"
                class="text-sm font-medium text-slate-600 transition-colors duration-200 hover:text-sky-600">Serviços</a>
            <a href="{{ url('/#processo') }}"
                class="text-sm font-medium text-slate-600 transition-colors duration-200 hover:text-sky-600">Processo</a>
            {{-- <a href="#portfolio"
                class="text-sm font-medium text-slate-600 transition-colors duration-200 hover:text-sky-600">Portfólio</a> --}}
            {{-- <a href="#depoimentos"
                class="text-sm font-medium text-slate-600 transition-colors duration-200 hover:text-sky-600">Depoimentos</a> --}}
            <a href="{{ url('/#contato') }}"
                class="group inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-sky-500 to-sky-600 px-6 py-2.5 text-sm font-semibold text-white shadow-lg shadow-sky-500/25 transition-all duration-300 hover:shadow-xl hover:shadow-sky-500/30 hover:-translate-y-0.5">
                Solicitar Orçamento
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>

        <!-- Mobile Hamburger -->
        <button @click="open = !open"
            class="flex items-center justify-center rounded-lg p-2 text-slate-600 transition-colors hover:bg-slate-100 md:hidden"
            aria-label="Menu">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="border-t border-slate-100 bg-white/95 backdrop-blur-xl md:hidden">
        <div class="flex flex-col gap-1 px-4 py-4">
            <a @click="open = false" href="{{ url('/#inicio') }}"
                class="rounded-lg px-4 py-2.5 text-sm font-medium text-slate-600 transition-colors hover:bg-sky-50 hover:text-sky-600">Início</a>
            <a @click="open = false" href="{{ url('/#sobre') }}"
                class="rounded-lg px-4 py-2.5 text-sm font-medium text-slate-600 transition-colors hover:bg-sky-50 hover:text-sky-600">Sobre</a>
            <a @click="open = false" href="{{ url('/#servicos') }}"
                class="rounded-lg px-4 py-2.5 text-sm font-medium text-slate-600 transition-colors hover:bg-sky-50 hover:text-sky-600">Serviços</a>
            <a @click="open = false" href="{{ url('/#processo') }}"
                class="rounded-lg px-4 py-2.5 text-sm font-medium text-slate-600 transition-colors hover:bg-sky-50 hover:text-sky-600">Processo</a>
            {{-- <a @click="open = false" href="#portfolio"
                class="rounded-lg px-4 py-2.5 text-sm font-medium text-slate-600 transition-colors hover:bg-sky-50 hover:text-sky-600">Portfólio</a> --}}
            {{-- <a @click="open = false" href="#depoimentos"
                class="rounded-lg px-4 py-2.5 text-sm font-medium text-slate-600 transition-colors hover:bg-sky-50 hover:text-sky-600">Depoimentos</a> --}}
            <a @click="open = false" href="{{ url('/#contato') }}"
                class="mt-2 rounded-full bg-gradient-to-r from-sky-500 to-sky-600 px-6 py-2.5 text-center text-sm font-semibold text-white shadow-lg shadow-sky-500/25">Solicitar
                Orçamento</a>
        </div>
    </div>
</nav>
