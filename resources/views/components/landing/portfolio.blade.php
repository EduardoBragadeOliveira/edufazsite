<section id="portfolio" class="relative bg-white py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="text-sm font-semibold uppercase tracking-widest text-sky-600">Nosso trabalho</span>
            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Portfólio de projetos</h2>
            <p class="mt-4 text-lg text-slate-600">Conheça alguns dos projetos que desenvolvemos para nossos clientes.</p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @php
                $projects = [
                    ['name' => 'TechStore', 'category' => 'E-commerce', 'from' => 'from-sky-400', 'to' => 'to-blue-600'],
                    ['name' => 'HealthPlus', 'category' => 'Sistema Web', 'from' => 'from-emerald-400', 'to' => 'to-teal-600'],
                    ['name' => 'EduLearn', 'category' => 'Plataforma EAD', 'from' => 'from-violet-400', 'to' => 'to-purple-600'],
                    ['name' => 'FoodExpress', 'category' => 'Landing Page', 'from' => 'from-amber-400', 'to' => 'to-orange-600'],
                    ['name' => 'FinanceApp', 'category' => 'Dashboard', 'from' => 'from-cyan-400', 'to' => 'to-sky-600'],
                    ['name' => 'TravelGo', 'category' => 'Site Institucional', 'from' => 'from-rose-400', 'to' => 'to-pink-600'],
                ];
            @endphp

            @foreach ($projects as $project)
                <div class="group relative cursor-pointer overflow-hidden rounded-2xl">
                    <!-- Gradient Placeholder -->
                    <div class="aspect-[4/3] w-full bg-gradient-to-br {{ $project['from'] }} {{ $project['to'] }} transition-transform duration-500 group-hover:scale-110">
                        <!-- Pattern overlay -->
                        <div class="absolute inset-0 opacity-10" style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='1' fill-rule='evenodd'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/svg%3E&quot;)"></div>
                        <!-- Centered icon -->
                        <div class="flex h-full items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                        </div>
                    </div>

                    <!-- Hover Overlay -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center bg-slate-900/70 opacity-0 backdrop-blur-sm transition-opacity duration-300 group-hover:opacity-100">
                        <h3 class="text-xl font-bold text-white">{{ $project['name'] }}</h3>
                        <span class="mt-2 rounded-full border border-white/30 px-4 py-1 text-sm text-white/80">{{ $project['category'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
