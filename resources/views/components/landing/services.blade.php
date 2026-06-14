<section id="servicos" class="relative overflow-hidden bg-gradient-to-b from-slate-50 to-white py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center" x-data="{ shown: false }" x-intersect.once="shown = true">
            <span class="text-sm font-semibold uppercase tracking-widest text-sky-600" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_both]' : 'opacity-0'">O que faço</span>
            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_0.1s_both]' : 'opacity-0'">Serviços sob medida para o seu
                negócio</h2>
            <p class="mt-4 text-lg text-slate-600" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_0.2s_both]' : 'opacity-0'">Cada projeto é único. Crio soluções personalizadas com tecnologia
                de ponta.</p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3" x-data="{ shown: false }" x-intersect.once="shown = true">
            @php
                $services = [
                    [
                        'title' => 'Criação de Sites',
                        'description' =>
                            'Sites institucionais modernos e profissionais que representam sua marca com excelência.',
                        'icon' =>
                            'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                        'gradient' => 'from-sky-500 to-blue-600',
                    ],
                    [
                        'title' => 'Landing Pages',
                        'description' =>
                            'Páginas de alta conversão focadas em capturar leads e gerar vendas para seu negócio.',
                        'icon' =>
                            'M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122',
                        'gradient' => 'from-amber-500 to-orange-600',
                    ],
                    [
                        'title' => 'Otimização',
                        'description' => 'Performance, SEO e velocidade para seu site alcançar os melhores resultados.',
                        'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                        'gradient' => 'from-emerald-500 to-teal-600',
                    ],
                ];
            @endphp

            @foreach ($services as $index => $service)
                <div
                    class="group relative overflow-hidden rounded-2xl border border-slate-100 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl"
                    :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_{{ $index * 0.15 }}s_both]' : 'opacity-0'">
                    {{-- Hover gradient top border --}}
                    <div
                        class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r {{ $service['gradient'] }} opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    </div>

                    <div
                        class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br {{ $service['gradient'] }} shadow-lg transition-transform duration-300 group-hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $service['icon'] }}" />
                        </svg>
                    </div>

                    <h3 class="text-xl font-semibold text-slate-900">{{ $service['title'] }}</h3>
                    <p class="mt-3 text-sm leading-relaxed text-slate-500">{{ $service['description'] }}</p>

                    <a href="#contato"
                        class="mt-6 inline-flex items-center gap-1 text-sm font-medium text-sky-600 transition-colors duration-200 hover:text-sky-700">
                        Saiba mais
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
