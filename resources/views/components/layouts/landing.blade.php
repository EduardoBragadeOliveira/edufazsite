<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Edu Faz Site — Criamos sites profissionais, sistemas web e soluções digitais que convertem visitantes em clientes. Solicite seu orçamento!">
        <meta name="keywords" content="criar site, desenvolvedor web, site profissional, fazer site, landing page, SEO, web design">
        <meta name="author" content="Edu Faz Site">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="{{ $title ?? 'Edu Faz Site — Sites Profissionais & Soluções Digitais' }}">
        <meta property="og:description" content="Criamos sites profissionais, rápidos e otimizados para converter visitantes em clientes.">
        <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="{{ $title ?? 'Edu Faz Site — Sites Profissionais & Soluções Digitais' }}">
        <meta property="twitter:description" content="Criamos sites profissionais, rápidos e otimizados para converter visitantes em clientes.">
        <meta property="twitter:image" content="{{ asset('images/og-image.jpg') }}">

        <title>{{ $title ?? 'Edu Faz Site — Sites Profissionais & Soluções Digitais' }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Styles & Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="bg-white font-sans text-slate-800 antialiased">
        {{ $slot }}

        @livewireScripts
        <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    </body>
</html>
