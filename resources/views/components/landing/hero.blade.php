<section id="inicio" class="relative min-h-screen overflow-hidden bg-gradient-to-br from-slate-50 via-sky-50/50 to-white pt-20">
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -right-40 -top-40 h-[500px] w-[500px] animate-[drift_20s_ease-in-out_infinite] rounded-full bg-gradient-to-br from-sky-200/40 to-sky-300/20 blur-3xl"></div>
        <div class="absolute -bottom-20 -left-40 h-[400px] w-[400px] animate-[drift_25s_ease-in-out_infinite_reverse] rounded-full bg-gradient-to-tr from-sky-100/50 to-blue-200/30 blur-3xl"></div>
    </div>

    <div class="relative mx-auto flex max-w-7xl flex-col items-center px-4 py-20 sm:px-6 lg:flex-row lg:justify-between lg:gap-12 lg:px-8 lg:py-32">
        <div class="w-full text-center lg:w-[55%] lg:text-left">
            <div class="mb-6 inline-flex animate-[fadeInUp_0.6s_ease-out_both] items-center gap-2 rounded-full border border-sky-200 bg-sky-50 px-4 py-1.5 text-sm font-medium text-sky-700">
                <span class="relative flex h-2 w-2">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-sky-400 opacity-75"></span>
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-sky-500"></span>
                </span>
                Soluções digitais de alta performance
            </div>

            <h1 class="animate-[fadeInUp_0.6s_ease-out_0.15s_both] text-3xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-6xl">
                Criamos sites que
                <span class="block whitespace-nowrap bg-gradient-to-r from-sky-500 to-blue-600 bg-clip-text text-transparent"><span id="typed-text"></span></span>
            </h1>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    // Typewriter for main heading
                    new Typed('#typed-text', {
                        strings: ['vendem para você', 'convertem visitantes', 'geram resultados', 'impressionam clientes'],
                        typeSpeed: 60,
                        backSpeed: 35,
                        backDelay: 2500,
                        startDelay: 1000,
                        loop: true,
                        showCursor: true,
                        cursorChar: '|',
                    });

                    // Typewriter for Google search mockup
                    new Typed('#search-typed', {
                        strings: ['seusite.com.br', 'meu negócio no topo do google'],
                        typeSpeed: 80,
                        backSpeed: 40,
                        backDelay: 3000,
                        startDelay: 500,
                        loop: true,
                        showCursor: true,
                        cursorChar: '|',
                    });
                });
            </script>

            <p class="mt-6 animate-[fadeInUp_0.6s_ease-out_0.3s_both] text-lg leading-relaxed text-slate-600 sm:text-xl">
                Transformo sua presença digital com sites profissionais, rápidos e otimizados para conversão. Tecnologia de ponta para impulsionar seus resultados.
            </p>

            <div class="mt-10 flex animate-[fadeInUp_0.6s_ease-out_0.45s_both] flex-col items-center gap-4 sm:flex-row lg:justify-start">
                <a href="#contato" class="group inline-flex w-full items-center justify-center gap-2 rounded-full bg-gradient-to-r from-sky-500 to-blue-600 px-8 py-4 text-base font-semibold text-white shadow-xl shadow-sky-500/25 transition-all duration-300 hover:shadow-2xl hover:shadow-sky-500/30 hover:-translate-y-0.5 sm:w-auto">
                    Solicitar Orçamento Grátis
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                </a>
                <a href="#servicos" class="inline-flex w-full items-center justify-center gap-2 rounded-full border border-slate-200 bg-white px-8 py-4 text-base font-semibold text-slate-700 shadow-sm transition-all duration-300 hover:border-sky-200 hover:bg-sky-50 hover:text-sky-700 sm:w-auto">
                    Nossos Serviços
                </a>
            </div>

            <div class="mt-12 flex animate-[fadeInUp_0.6s_ease-out_0.6s_both] flex-wrap items-center justify-center gap-8 lg:justify-start">
                @foreach (['Entregas ágeis', 'Suporte dedicado', 'Tecnologia moderna'] as $badge)
                    <div class="flex items-center gap-2 text-sm text-slate-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                        {{ $badge }}
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Hero Visual: Google Search Mockup -->
        <div class="relative mt-16 w-full lg:mt-0 lg:w-[40%]">
            <div class="overflow-hidden rounded-2xl border border-slate-200/60 bg-white shadow-2xl shadow-slate-200/50 transition-transform duration-500 hover:scale-[1.02]">
                <!-- Browser Header -->
                <div class="flex items-center gap-2 border-b border-slate-100 bg-slate-50 px-4 py-3">
                    <div class="h-3 w-3 rounded-full bg-red-400"></div>
                    <div class="h-3 w-3 rounded-full bg-amber-400"></div>
                    <div class="h-3 w-3 rounded-full bg-green-400"></div>
                    <div class="ml-3 flex-1 rounded-full bg-white px-3 py-1.5 shadow-sm">
                        <div class="flex items-center gap-2">
                            <svg class="h-3.5 w-3.5 text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z"/></svg>
                            <span class="text-xs text-slate-500">Google Search</span>
                        </div>
                    </div>
                </div>

                <!-- Google Search Area -->
                <div class="bg-white p-6">
                    <!-- Search Input -->
                    <div class="mb-8 flex items-center gap-3 rounded-full border border-slate-200 px-4 py-3 shadow-sm shadow-slate-100 transition-shadow hover:shadow-md">
                        <svg class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                        <div class="flex-1 text-sm font-medium text-slate-700">
                            <span id="search-typed"></span>
                        </div>
                        <svg class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" /></svg>
                    </div>

                    <!-- Search Results -->
                    <div class="space-y-6">
                        <!-- Result 1 (Highlighted) -->
                        <div class="relative rounded-xl border border-sky-100 bg-sky-50/50 p-4 transition-colors hover:bg-sky-50">
                            <div class="absolute -left-3 -top-3 flex items-center justify-center rounded-full bg-blue-600 px-2.5 py-1 text-[10px] font-bold text-white shadow-sm">Top #1</div>
                            <div class="mb-1.5 flex items-center gap-2">
                                <div class="flex h-6 w-6 items-center justify-center rounded-full bg-slate-200">
                                    <svg class="h-3 w-3 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>
                                </div>
                                <div>
                                    <div class="text-[10px] font-medium text-slate-900">Seu Negócio</div>
                                    <div class="text-[10px] text-slate-500">https://www.seusite.com.br</div>
                                </div>
                            </div>
                            <div class="text-base font-medium text-blue-600 hover:underline">Seu Site — A Melhor Solução do Mercado</div>
                            <div class="mt-1 text-xs leading-relaxed text-slate-600">Site profissional, rápido e focado em converter visitantes em clientes. Design exclusivo e otimização para o Google.</div>
                        </div>

                        <!-- Result 2 (Skeleton) -->
                        <div class="p-2 opacity-50">
                            <div class="mb-2 flex items-center gap-2">
                                <div class="h-5 w-5 rounded-full bg-slate-200"></div>
                                <div>
                                    <div class="mb-1 h-1.5 w-16 rounded bg-slate-200"></div>
                                    <div class="h-1.5 w-24 rounded bg-slate-100"></div>
                                </div>
                            </div>
                            <div class="mb-2 h-3 w-3/4 rounded bg-blue-200"></div>
                            <div class="mb-1.5 h-1.5 w-full rounded bg-slate-100"></div>
                            <div class="h-1.5 w-5/6 rounded bg-slate-100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Floating SEO Badge -->
            <div class="absolute -bottom-4 -left-4 flex animate-[float_6s_ease-in-out_1s_infinite] items-center gap-2 rounded-xl border border-slate-200/60 bg-white px-4 py-3 shadow-lg">
                <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-amber-100">
                    <svg class="h-4 w-4 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
                </div>
                <div>
                    <div class="text-xs font-semibold text-slate-700">Primeiro</div>
                    <div class="text-[10px] text-slate-400">No Google</div>
                </div>
            </div>
        </div>
    </div>
</section>
