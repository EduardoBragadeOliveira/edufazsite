<section id="tecnologias" class="relative overflow-hidden bg-white py-24">
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute left-1/2 top-1/2 h-[500px] w-[500px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-gradient-to-br from-sky-50/80 to-blue-50/50 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="text-sm font-semibold uppercase tracking-widest text-sky-600">Nossas ferramentas</span>
            <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                Tecnologias que utilizamos para
                <span class="bg-gradient-to-r from-sky-500 to-blue-600 bg-clip-text text-transparent">construir seu sucesso</span>
            </h2>
            <p class="mt-4 text-lg text-slate-600">Utilizamos as tecnologias mais modernas e confiáveis do mercado para garantir performance, segurança e escalabilidade.</p>
        </div>

        {{-- Tech grid --}}
        <div class="mx-auto mt-16 grid max-w-5xl grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-6">
            @php
                $technologies = [
                    ['name' => 'Laravel', 'color' => 'text-red-500', 'bg' => 'bg-red-50 hover:bg-red-100', 'icon' => '<path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934c0 .135-.073.26-.189.327l-9.03 5.2a.32.32 0 01-.085.042l-.033.009a.373.373 0 01-.193 0l-.034-.009a.331.331 0 01-.084-.042l-9.032-5.2a.374.374 0 01-.189-.327V4.757c0-.036.005-.07.014-.1l.007-.025a.347.347 0 01.038-.076l.015-.021a.356.356 0 01.058-.063l.022-.016a.348.348 0 01.074-.048L5.068.185a.374.374 0 01.377 0L9.96 2.38a.374.374 0 01.189.327V12.2l3.76-2.164V4.757c0-.036.005-.07.013-.1l.008-.025a.347.347 0 01.037-.076l.016-.021a.353.353 0 01.057-.064l.023-.015a.363.363 0 01.074-.048L18.573.185a.374.374 0 01.377 0l4.514 2.2a.373.373 0 01.189.327V7.63l3.76 2.164V5.43l.007-.025a.303.303 0 01.037-.075l.016-.022a.36.36 0 01.058-.063l.022-.016a.36.36 0 01.074-.048z" fill="currentColor"/>'],
                    ['name' => 'Livewire', 'color' => 'text-pink-500', 'bg' => 'bg-pink-50 hover:bg-pink-100', 'icon' => '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15l-5-5 1.41-1.41L11 14.17l7.59-7.59L20 8l-9 9z" fill="currentColor"/>'],
                    ['name' => 'Tailwind', 'color' => 'text-cyan-500', 'bg' => 'bg-cyan-50 hover:bg-cyan-100', 'icon' => '<path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z" fill="currentColor"/>'],
                    ['name' => 'Alpine.js', 'color' => 'text-sky-600', 'bg' => 'bg-sky-50 hover:bg-sky-100', 'icon' => '<path d="M12 2L2 12l10 10 10-10L12 2zm0 3.41L19.59 12 12 19.59 4.41 12 12 5.41z" fill="currentColor"/>'],
                    ['name' => 'PHP', 'color' => 'text-indigo-500', 'bg' => 'bg-indigo-50 hover:bg-indigo-100', 'icon' => '<path d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 01-.866 1.55zm6.559-2.262c-.263.053-.612.08-1.046.08h-.927l-.515 2.648H11.5l1.23-6.326h2.65c.796 0 1.376.209 1.742.628.367.418.477 1.002.332 1.752a2.838 2.838 0 01-.866 1.55c-.262.25-.575.438-.917.551-.337.108-.765.164-1.286.164h-.786l-.327 1.681h-1.378l.327-1.681.001-.001.516-2.648h.927c.555 0 .97-.105 1.241-.314.272-.21.455-.559.551-1.049.092-.47.05-.802-.124-.995-.176-.193-.524-.29-1.048-.29h-.786zm5.043.802l-.515 2.648h.838c.555 0 .97-.105 1.242-.314.271-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29h-.944z" fill="currentColor"/>'],
                    ['name' => 'MySQL', 'color' => 'text-orange-500', 'bg' => 'bg-orange-50 hover:bg-orange-100', 'icon' => '<path d="M4 6h2v12H4V6zm6 0h2v12h-2V6zm3 0h2v12h-2V6zm5 0h2v12h-2V6zm-8 0h2v12H10V6z" fill="currentColor"/>'],
                ];
            @endphp

            @foreach ($technologies as $tech)
                <div class="group flex flex-col items-center gap-3 rounded-2xl border border-slate-100 {{ $tech['bg'] }} p-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex h-14 w-14 items-center justify-center {{ $tech['color'] }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 24 24">
                            {!! $tech['icon'] !!}
                        </svg>
                    </div>
                    <span class="text-sm font-semibold text-slate-700">{{ $tech['name'] }}</span>
                </div>
            @endforeach
        </div>

        {{-- Trust badges --}}
        <div class="mx-auto mt-16 flex max-w-3xl flex-wrap items-center justify-center gap-8">
            @foreach ([
                ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'text' => 'Sites seguros com SSL'],
                ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'text' => 'Performance otimizada'],
                ['icon' => 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z', 'text' => 'Hospedagem na nuvem'],
                ['icon' => 'M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z', 'text' => '100% responsivo'],
            ] as $badge)
                <div class="flex items-center gap-2 text-sm text-slate-500">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-green-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $badge['icon'] }}" />
                        </svg>
                    </div>
                    {{ $badge['text'] }}
                </div>
            @endforeach
        </div>
    </div>
</section>
