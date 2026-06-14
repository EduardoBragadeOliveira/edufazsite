<section id="beneficios" class="relative overflow-hidden bg-white py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center" x-data="{ shown: false }" x-intersect.once="shown = true">
            <span class="text-sm font-semibold uppercase tracking-widest text-sky-600" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_both]' : 'opacity-0'">Por que me escolher</span>
            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_0.1s_both]' : 'opacity-0'">Tudo que seu negócio precisa para crescer online</h2>
            <p class="mt-4 text-lg text-slate-600" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_0.2s_both]' : 'opacity-0'">Combino design, performance e estratégia para criar soluções que realmente geram resultados.</p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4" x-data="{ shown: false }" x-intersect.once="shown = true">
            @php
                $benefits = [
                    ['title' => 'Sites Rápidos', 'text' => 'Carregamento ultrarrápido com as melhores práticas de performance e otimização.', 'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'iconColor' => 'text-sky-600', 'bgFrom' => 'from-sky-100', 'bgTo' => 'to-sky-50'],
                    ['title' => 'Design Profissional', 'text' => 'Interfaces modernas e elegantes que transmitem credibilidade e autoridade para sua marca.', 'icon' => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z', 'iconColor' => 'text-purple-600', 'bgFrom' => 'from-purple-100', 'bgTo' => 'to-purple-50'],
                    ['title' => 'SEO Otimizado', 'text' => 'Apareça nas primeiras posições do Google com técnicas avançadas de otimização.', 'icon' => 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z', 'iconColor' => 'text-amber-600', 'bgFrom' => 'from-amber-100', 'bgTo' => 'to-amber-50'],
                    ['title' => 'Responsividade Total', 'text' => 'Perfeito em qualquer dispositivo — celular, tablet ou desktop, sem perder qualidade.', 'icon' => 'M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z', 'iconColor' => 'text-emerald-600', 'bgFrom' => 'from-emerald-100', 'bgTo' => 'to-emerald-50'],
                ];
            @endphp

            @foreach ($benefits as $index => $benefit)
                <div class="group relative rounded-2xl border border-slate-100 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-sky-100 hover:shadow-xl" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_{{ $index * 0.1 }}s_both]' : 'opacity-0'">
                    <div class="mb-5 flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br {{ $benefit['bgFrom'] }} {{ $benefit['bgTo'] }} transition-all duration-300 group-hover:scale-110 group-hover:from-sky-500 group-hover:to-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 {{ $benefit['iconColor'] }} transition-colors duration-300 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $benefit['icon'] }}" /></svg>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-900">{{ $benefit['title'] }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-500">{{ $benefit['text'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
