<x-layouts.landing title="Política de Privacidade — Edu Faz Site">
    <x-landing.navbar />
    <div class="bg-slate-50 min-h-screen pt-32 pb-24">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-3xl p-8 sm:p-12 shadow-xl shadow-slate-200/50">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-medium text-sky-600 hover:text-sky-700 transition-colors mb-8" aria-label="Voltar para a página inicial">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                    Voltar ao início
                </a>

                <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight sm:text-4xl mb-6">
                    Política de Privacidade
                </h1>

                <div class="prose prose-slate prose-lg max-w-none text-slate-600">
                    <p>A sua privacidade é importante para nós. Esta Política de Privacidade explica como a <strong>Edu Faz Site</strong> coleta e trata as suas informações.</p>

                    <h2 class="text-2xl font-bold text-slate-900 mt-8 mb-4">1. Coleta e Armazenamento de Dados</h2>
                    <p>Nós <strong>não armazenamos</strong> nenhum dado pessoal em nossos bancos de dados. Nosso site não possui um sistema de cadastro ou área de membros que requeira armazenamento persistente de suas informações pessoais.</p>

                    <h2 class="text-2xl font-bold text-slate-900 mt-8 mb-4">2. Formulário de Contato e WhatsApp</h2>
                    <p>Quando você utiliza os botões de contato ou solicita um orçamento em nosso site, você é diretamente redirecionado para o WhatsApp.</p>
                    <p>Nós não gravamos, retemos ou processamos suas informações no nosso servidor antes ou durante esse redirecionamento. As conversas e os dados fornecidos pelo WhatsApp estão sujeitos aos termos e à política de privacidade do próprio WhatsApp/Meta.</p>

                    <h2 class="text-2xl font-bold text-slate-900 mt-8 mb-4">3. Uso de Cookies e Analytics</h2>
                    <p>Podemos utilizar cookies básicos de desempenho (analytics) apenas para entender o tráfego do site (por exemplo, contagem de visitantes) de forma totalmente anonimizada. Não utilizamos essas informações para anúncios direcionados e nenhum dado de identificação pessoal é capturado por meio dessas ferramentas.</p>

                    <h2 class="text-2xl font-bold text-slate-900 mt-8 mb-4">4. Alterações nesta Política</h2>
                    <p>Reservamo-nos o direito de modificar esta política de privacidade a qualquer momento, sempre visando garantir a transparência no tratamento de dados. Se houver mudanças materiais, elas serão refletidas nesta página.</p>

                    <h2 class="text-2xl font-bold text-slate-900 mt-8 mb-4">5. Contato</h2>
                    <p>Se você tiver alguma dúvida sobre esta política ou sobre como tratamos a privacidade no site, sinta-se à vontade para entrar em contato conosco diretamente via WhatsApp pelo botão disponível na página inicial.</p>

                    <hr class="my-8 border-slate-200">
                    <p class="text-sm text-slate-500">Última atualização: {{ date('d/m/Y') }}</p>
                </div>
            </div>
        </div>
    </div>
    <x-landing.footer />
</x-layouts.landing>
