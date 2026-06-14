<section id="depoimentos" class="relative bg-gradient-to-b from-slate-50 to-white py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="text-sm font-semibold uppercase tracking-widest text-sky-600">Depoimentos</span>
            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">O que nossos clientes dizem</h2>
            <p class="mt-4 text-lg text-slate-600">A satisfação dos nossos clientes é a nossa melhor vitrine.</p>
        </div>

        <div x-data="{ current: 0, testimonials: 3 }" class="mt-16">
            <div class="relative overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out" :style="`transform: translateX(-${current * 100}%)`">
                    {{-- Testimonial 1 --}}
                    <div class="w-full shrink-0 px-4">
                        <div class="mx-auto max-w-3xl rounded-2xl border border-slate-100 bg-white p-8 shadow-sm sm:p-12">
                            <div class="flex gap-1">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="h-5 w-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                                @endfor
                            </div>
                            <blockquote class="mt-6 text-lg leading-relaxed text-slate-600">
                                "A Edu Faz Site transformou completamente nossa presença digital. O site ficou incrível, rápido e já estamos recebendo muito mais contatos. Superou todas as expectativas!"
                            </blockquote>
                            <div class="mt-8 flex items-center gap-4">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-sky-400 to-blue-600 text-lg font-bold text-white">M</div>
                                <div>
                                    <div class="font-semibold text-slate-900">Marcos Silva</div>
                                    <div class="text-sm text-slate-500">CEO, TechStore</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Testimonial 2 --}}
                    <div class="w-full shrink-0 px-4">
                        <div class="mx-auto max-w-3xl rounded-2xl border border-slate-100 bg-white p-8 shadow-sm sm:p-12">
                            <div class="flex gap-1">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="h-5 w-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                                @endfor
                            </div>
                            <blockquote class="mt-6 text-lg leading-relaxed text-slate-600">
                                "Profissionalismo impecável! A equipe entendeu exatamente o que precisávamos e entregou um sistema web que otimizou toda nossa operação. Recomendo de olhos fechados."
                            </blockquote>
                            <div class="mt-8 flex items-center gap-4">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-emerald-400 to-teal-600 text-lg font-bold text-white">A</div>
                                <div>
                                    <div class="font-semibold text-slate-900">Ana Oliveira</div>
                                    <div class="text-sm text-slate-500">Diretora, HealthPlus</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Testimonial 3 --}}
                    <div class="w-full shrink-0 px-4">
                        <div class="mx-auto max-w-3xl rounded-2xl border border-slate-100 bg-white p-8 shadow-sm sm:p-12">
                            <div class="flex gap-1">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="h-5 w-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                                @endfor
                            </div>
                            <blockquote class="mt-6 text-lg leading-relaxed text-slate-600">
                                "Nossa landing page ficou espetacular! Em apenas um mês, triplicamos o número de leads. O design é lindo e a performance é excelente. Melhor investimento que fizemos."
                            </blockquote>
                            <div class="mt-8 flex items-center gap-4">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-violet-400 to-purple-600 text-lg font-bold text-white">R</div>
                                <div>
                                    <div class="font-semibold text-slate-900">Ricardo Santos</div>
                                    <div class="text-sm text-slate-500">Fundador, EduLearn</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Dots -->
            <div class="mt-10 flex items-center justify-center gap-3">
                <template x-for="i in testimonials" :key="i">
                    <button @click="current = i - 1" :class="current === i - 1 ? 'bg-sky-500 w-8' : 'bg-slate-300 w-3 hover:bg-slate-400'" class="h-3 rounded-full transition-all duration-300" :aria-label="`Depoimento ${i}`"></button>
                </template>
            </div>
        </div>
    </div>
</section>
