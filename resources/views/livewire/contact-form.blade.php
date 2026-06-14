<section id="contato" class="relative bg-white py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="text-sm font-semibold uppercase tracking-widest text-sky-600">Contato</span>
            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Vamos conversar sobre seu projeto</h2>
            <p class="mt-4 text-lg text-slate-600">Preencha o formulário abaixo e entraremos em contato o mais rápido possível.</p>
        </div>

        <div class="mx-auto mt-16 max-w-xl">
            @if ($submitted)
                {{-- Success State --}}
                <div class="rounded-2xl border border-green-100 bg-green-50 p-12 text-center">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-green-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-green-900">Mensagem enviada com sucesso!</h3>
                    <p class="mt-2 text-green-700">Obrigado pelo contato. Retornaremos em breve.</p>
                    <button wire:click="resetForm" class="mt-8 inline-flex items-center gap-2 rounded-full border border-green-200 bg-white px-6 py-2.5 text-sm font-semibold text-green-700 transition-all duration-200 hover:bg-green-50">
                        Enviar outra mensagem
                    </button>
                </div>
            @else
                {{-- Contact Form --}}
                <form wire:submit="submit" class="space-y-6">
                    {{-- Name Field --}}
                    <div>
                        <label for="contact-name" class="block text-sm font-medium text-slate-700">Nome</label>
                        <input
                            wire:model.live.debounce.300ms="name"
                            type="text"
                            id="contact-name"
                            placeholder="Seu nome completo"
                            class="mt-2 block w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 placeholder-slate-400 transition-all duration-200 focus:border-sky-500 focus:bg-white focus:ring-2 focus:ring-sky-500/20 focus:outline-none @error('name') border-red-300 bg-red-50 focus:border-red-500 focus:ring-red-500/20 @enderror"
                        >
                        @error('name')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email Field --}}
                    <div>
                        <label for="contact-email" class="block text-sm font-medium text-slate-700">E-mail</label>
                        <input
                            wire:model.live.debounce.300ms="email"
                            type="email"
                            id="contact-email"
                            placeholder="seu@email.com"
                            class="mt-2 block w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 placeholder-slate-400 transition-all duration-200 focus:border-sky-500 focus:bg-white focus:ring-2 focus:ring-sky-500/20 focus:outline-none @error('email') border-red-300 bg-red-50 focus:border-red-500 focus:ring-red-500/20 @enderror"
                        >
                        @error('email')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Message Field --}}
                    <div>
                        <label for="contact-message" class="block text-sm font-medium text-slate-700">Mensagem</label>
                        <textarea
                            wire:model.live.debounce.300ms="message"
                            id="contact-message"
                            rows="5"
                            placeholder="Conte-nos sobre seu projeto..."
                            class="mt-2 block w-full resize-none rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 placeholder-slate-400 transition-all duration-200 focus:border-sky-500 focus:bg-white focus:ring-2 focus:ring-sky-500/20 focus:outline-none @error('message') border-red-300 bg-red-50 focus:border-red-500 focus:ring-red-500/20 @enderror"
                        ></textarea>
                        @error('message')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <button
                        type="submit"
                        class="group inline-flex w-full items-center justify-center gap-2 rounded-full bg-gradient-to-r from-sky-500 to-blue-600 px-8 py-4 text-base font-semibold text-white shadow-lg shadow-sky-500/25 transition-all duration-300 hover:shadow-xl hover:shadow-sky-500/30 hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:translate-y-0"
                        wire:loading.attr="disabled"
                    >
                        <span wire:loading.remove wire:target="submit">Enviar Mensagem</span>
                        <span wire:loading wire:target="submit" class="inline-flex items-center gap-2">
                            <svg class="h-5 w-5 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                            </svg>
                            Enviando...
                        </span>
                        <svg wire:loading.remove wire:target="submit" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>
                </form>
            @endif
        </div>
    </div>
</section>
