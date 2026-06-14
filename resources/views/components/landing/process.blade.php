<section id="processo" class="relative overflow-hidden bg-gradient-to-b from-slate-50 via-white to-slate-50 py-24">
    {{-- Background decorations --}}
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute left-1/2 top-0 h-[600px] w-[600px] -translate-x-1/2 animate-[drift_20s_ease-in-out_infinite] rounded-full bg-gradient-to-b from-sky-50/80 to-transparent blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center" x-data="{ shown: false }" x-intersect.once="shown = true">
            <span class="text-sm font-semibold uppercase tracking-widest text-sky-600" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_both]' : 'opacity-0'">Como trabalho</span>
            <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_0.1s_both]' : 'opacity-0'">Do conceito ao lançamento em
                <span class="bg-gradient-to-r from-sky-500 to-blue-600 bg-clip-text text-transparent">4 etapas</span>
            </h2>
            <p class="mt-4 text-lg text-slate-600" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_0.2s_both]' : 'opacity-0'">Meu processo é transparente e colaborativo. Você acompanha cada fase e tem voz ativa nas decisões.</p>
        </div>

        {{-- Steps grid --}}
        <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4" x-data="{ shown: false }" x-intersect.once="shown = true">
            @php
                $steps = [
                    [
                        'number' => '01',
                        'title' => 'Descoberta',
                        'description' => 'Entendo seu negócio, público-alvo, concorrentes e objetivos. Mapeio tudo para criar a estratégia perfeita.',
                        'icon' => 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z',
                        'gradient' => 'from-sky-500 to-blue-600',
                    ],
                    [
                        'number' => '02',
                        'title' => 'Design',
                        'description' => 'Crio layouts exclusivos e modernos. Você aprova cada tela antes de começar o desenvolvimento.',
                        'icon' => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z',
                        'gradient' => 'from-violet-500 to-purple-600',
                    ],
                    [
                        'number' => '03',
                        'title' => 'Desenvolvimento',
                        'description' => 'Transformo o design em código limpo, rápido e responsivo. Cada detalhe é implementado com precisão.',
                        'icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                        'gradient' => 'from-emerald-500 to-teal-600',
                    ],
                    [
                        'number' => '04',
                        'title' => 'Lançamento',
                        'description' => 'Publico seu site com configuração de domínio, SSL e SEO. Dou suporte completo após o lançamento.',
                        'icon' => 'M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5',
                        'gradient' => 'from-amber-500 to-orange-600',
                    ],
                ];
            @endphp

            @foreach ($steps as $index => $step)
                <div class="group relative" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_{{ $index * 0.15 }}s_both]' : 'opacity-0'">
                    {{-- Connector line (hidden on last item and mobile) --}}
                    @if ($index < 3)
                        <div class="absolute right-0 top-12 hidden h-0.5 w-8 translate-x-full bg-gradient-to-r from-slate-200 to-slate-100 lg:block"></div>
                    @endif

                    <div class="relative overflow-hidden rounded-2xl border border-slate-100 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                        {{-- Step number watermark --}}
                        <div class="absolute -right-2 -top-4 text-7xl font-black text-slate-50 transition-colors duration-300 group-hover:text-sky-50">{{ $step['number'] }}</div>

                        <div class="relative">
                            <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br {{ $step['gradient'] }} shadow-lg transition-transform duration-300 group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $step['icon'] }}" />
                                </svg>
                            </div>

                            <h3 class="text-xl font-bold text-slate-900">{{ $step['title'] }}</h3>
                            <p class="mt-3 text-sm leading-relaxed text-slate-500">{{ $step['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
