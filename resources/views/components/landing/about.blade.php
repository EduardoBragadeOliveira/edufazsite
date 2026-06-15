<section id="sobre" class="relative overflow-hidden bg-white py-24">
    {{-- Decorative background elements --}}
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -right-32 top-20 h-[400px] w-[400px] animate-[drift_18s_ease-in-out_infinite] rounded-full bg-gradient-to-br from-sky-50 to-blue-100/50 blur-3xl"></div>
        <div class="absolute -left-32 bottom-20 h-[300px] w-[300px] animate-[drift_22s_ease-in-out_infinite_reverse] rounded-full bg-gradient-to-tr from-sky-50 to-indigo-100/30 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center gap-12 lg:flex-row lg:gap-20" x-data="{ shown: false }" x-intersect.once="shown = true">
            <div class="relative w-full lg:w-1/2" :class="shown ? 'animate-[fadeInLeft_0.8s_ease-out_both]' : 'opacity-0'">
                <div class="relative overflow-hidden rounded-3xl shadow-2xl shadow-slate-200/50 transition-transform duration-500 hover:scale-[1.02]">
                    <img src="/images/solo-developer.png" alt="Equipe trabalhando em projeto web" class="h-auto w-full object-cover" loading="lazy">
                    {{-- Gradient overlay --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/20 to-transparent"></div>
                </div>
                {{-- Floating accent card --}}
                <div class="absolute -bottom-6 -right-4 flex animate-float items-center gap-3 rounded-2xl border border-slate-100 bg-white px-5 py-4 shadow-xl sm:-right-6">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-sky-500 to-blue-600 shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                    </div>
                    <div>
                        <div class="text-sm font-bold text-slate-900">Compromisso Total</div>
                        <div class="text-xs text-slate-500">Com cada projeto</div>
                    </div>
                </div>
                {{-- Decorative dots pattern --}}
                <div class="absolute -left-6 -top-6 -z-10 hidden h-24 w-24 lg:block" style="background-image: radial-gradient(circle, #cbd5e1 1.5px, transparent 1.5px); background-size: 12px 12px;"></div>
            </div>

            <div class="w-full lg:w-1/2" :class="shown ? 'animate-[fadeInRight_0.8s_ease-out_0.2s_both]' : 'opacity-0'">
                <span class="inline-flex items-center gap-2 rounded-full border border-sky-200 bg-sky-50 px-4 py-1.5 text-sm font-medium text-sky-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    Quem somos
                </span>
                <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                    Apaixonados por criar
                    <span class="bg-gradient-to-r from-sky-500 to-blue-600 bg-clip-text text-transparent">experiências digitais</span>
                </h2>
                <p class="mt-6 text-lg leading-relaxed text-slate-600">
                    Somos uma empresa de desenvolvimento com experiência sólida em criar sites e sistemas web de alto nível. Cuidamos de cada etapa do projeto, da estratégia ao código, garantindo que o resultado final impulsione o seu negócio.
                </p>
                <p class="mt-4 text-lg leading-relaxed text-slate-600">
                    Nosso diferencial é o foco no sucesso do cliente e a transparência em cada etapa. Trabalhamos lado a lado com você para entender suas necessidades e entregar soluções tecnológicas que realmente fazem a diferença.
                </p>

                <div class="mt-8 space-y-4">
                    @foreach ([
                        ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'title' => 'Paixão pelo que fazemos', 'text' => 'Cada linha de código é escrita com cuidado e atenção aos detalhes para garantir excelência.'],
                        ['icon' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4', 'title' => 'Atendimento direto', 'text' => 'Você tem suporte direto com nossa equipe. Sem intermediários, sem ruído. Apenas foco total no seu resultado.'],
                        ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Qualidade garantida', 'text' => 'Cada projeto é tratado como prioridade máxima, com dedicação total do início ao fim.'],
                    ] as $item)
                        <div class="group flex items-start gap-4 transition-transform duration-300 hover:translate-x-1">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-sky-100 to-blue-50 transition-all duration-300 group-hover:scale-110 group-hover:from-sky-500 group-hover:to-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-sky-600 transition-colors duration-300 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-base font-semibold text-slate-900">{{ $item['title'] }}</h3>
                                <p class="mt-1 text-sm text-slate-500">{{ $item['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <a href="#contato" class="group mt-8 inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-sky-500 to-blue-600 px-8 py-4 text-base font-semibold text-white shadow-xl shadow-sky-500/25 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-2xl hover:shadow-sky-500/30">
                    Fale conosco
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                </a>
            </div>
        </div>
    </div>
</section>
