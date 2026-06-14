<section id="numeros" class="relative overflow-hidden bg-slate-900 py-24" x-data="{
    visible: false,
    counters: { satisfaction: 0, support: 0 },
    animateCounter(target, key, duration = 2000) {
        const start = performance.now();
        const step = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            this.counters[key] = Math.floor(eased * target);
            if (progress < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
    },
    startAnimation() {
        if (this.visible) return;
        this.visible = true;
        this.animateCounter(100, 'satisfaction');
        this.animateCounter(24, 'support');
    }
}" x-intersect.half="startAnimation()">
    {{-- Background decorations --}}
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -left-40 -top-40 h-[500px] w-[500px] animate-[drift_25s_ease-in-out_infinite] rounded-full bg-sky-500/5 blur-3xl"></div>
        <div class="absolute -bottom-40 -right-40 h-[500px] w-[500px] animate-[drift_20s_ease-in-out_infinite_reverse] rounded-full bg-blue-500/5 blur-3xl"></div>
        {{-- Grid pattern --}}
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;)"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center gap-16 lg:flex-row lg:gap-20">
            {{-- Image side --}}
            <div class="relative w-full lg:w-5/12" x-data="{ shown: false }" x-intersect.once="shown = true" :class="shown ? 'animate-[fadeInLeft_0.8s_ease-out_both]' : 'opacity-0'">
                <div class="overflow-hidden rounded-3xl border border-white/10 shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
                    <img src="/images/dev-flatlay.png" alt="Setup de desenvolvimento web profissional" class="h-auto w-full object-cover" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
                </div>
                {{-- Glow effect --}}
                <div class="absolute -inset-4 -z-10 animate-pulse rounded-3xl bg-gradient-to-br from-sky-500/20 to-blue-600/20 blur-2xl"></div>
            </div>

            {{-- Stats side --}}
            <div class="w-full lg:w-7/12" x-data="{ shown: false }" x-intersect.once="shown = true">
                <span class="inline-flex items-center gap-2 rounded-full border border-sky-500/30 bg-sky-500/10 px-4 py-1.5 text-sm font-medium text-sky-400" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_both]' : 'opacity-0'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                    Números que importam
                </span>
                <h2 class="mt-5 text-3xl font-extrabold tracking-tight text-white sm:text-4xl" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_0.1s_both]' : 'opacity-0'">
                    Preparado para entregar
                    <span class="bg-gradient-to-r from-sky-400 to-blue-400 bg-clip-text text-transparent">resultados reais</span>
                </h2>
                <p class="mt-4 text-lg leading-relaxed text-slate-400" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_0.2s_both]' : 'opacity-0'">
                    Meu compromisso com qualidade garante que seu projeto será entregue com excelência e acompanhamento contínuo.
                </p>

                <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2">
                    {{-- Stat 1: Dedicação --}}
                    <div class="group rounded-2xl border border-white/5 bg-white/5 p-8 backdrop-blur-sm transition-all duration-300 hover:border-sky-500/20 hover:bg-white/10" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_0.3s_both]' : 'opacity-0'">
                        <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-500/20 to-teal-500/20 transition-transform duration-300 group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                        </div>
                        <div class="text-5xl font-black text-white sm:text-6xl">
                            <span x-text="counters.satisfaction">0</span><span class="text-emerald-400">%</span>
                        </div>
                        <div class="mt-3 text-base font-medium text-slate-300">Dedicação ao cliente</div>
                        <div class="mt-1 text-sm text-slate-500">Comprometimento total com seu projeto</div>
                    </div>

                    {{-- Stat 2: Suporte --}}
                    <div class="group rounded-2xl border border-white/5 bg-white/5 p-8 backdrop-blur-sm transition-all duration-300 hover:border-sky-500/20 hover:bg-white/10" :class="shown ? 'animate-[fadeInUp_0.6s_ease-out_0.45s_both]' : 'opacity-0'">
                        <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-amber-500/20 to-orange-500/20 transition-transform duration-300 group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div class="text-5xl font-black text-white sm:text-6xl">
                            <span x-text="counters.support">0</span><span class="text-amber-400">h</span>
                        </div>
                        <div class="mt-3 text-base font-medium text-slate-300">Suporte disponível</div>
                        <div class="mt-1 text-sm text-slate-500">Atendimento ágil quando precisar</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
