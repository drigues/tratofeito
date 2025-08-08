<!doctype html>
<html lang="pt">
  <head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G00VK7W6WR"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-G00VK7W6WR');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Trato Feito' }}</title>
    
    {{-- Robust assets loader: production uses manifest if present, otherwise fall back to @vite --}}
    @php
        $manifestPath = public_path('build/.vite/manifest.json');
    @endphp

    @if (app()->environment('production') && file_exists($manifestPath))
        @php
            $manifest = json_decode(file_get_contents($manifestPath), true);
            $scssEntry = $manifest['resources/scss/app.scss'] ?? null;
            $jsEntry   = $manifest['resources/js/app.js'] ?? null;
            $cssFiles  = $scssEntry['css'] ?? [];
        @endphp

        {{-- CSS from SCSS entry --}}
        @foreach ($cssFiles as $css)
            <link rel="stylesheet" href="{{ asset('build/'.$css) }}">
        @endforeach

        {{-- JS from JS entry --}}
        @if ($jsEntry && !empty($jsEntry['file']))
            <script type="module" src="{{ asset('build/'.$jsEntry['file']) }}" defer></script>
        @endif
    @else
        {{-- Dev / fallback: let Vite handle it --}}
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @endif


    <!-- Charset & Viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Description -->
    <title>TratoFeito.pt - Encontre Clientes e Profissionais em Portugal</title>
    <meta name="description" content="No TratoFeito.pt ligamos clientes e profissionais em Portugal. Solicite orçamentos, compare e escolha o serviço ideal com rapidez e confiança.">

    <!-- Keywords -->
    <meta name="keywords" content="serviços, profissionais, Portugal, orçamentos, contratar, eletricista, canalizador, remodelações, jardinagem, serviços domésticos, serviços técnicos, reparações, obras, limpezas">

    <!-- Author -->
    <meta name="author" content="TratoFeito.pt">

    <!-- Language -->
    <meta http-equiv="Content-Language" content="pt-PT">

    <!-- Robots -->
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://tratofeito.pt/">

    <!-- Open Graph (Facebook, LinkedIn, WhatsApp) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tratofeito.pt/">
    <meta property="og:title" content="TratoFeito.pt - Encontre Clientes e Profissionais em Portugal">
    <meta property="og:description" content="Solicite orçamentos grátis e encontre o profissional certo para o seu projeto em qualquer ponto de Portugal.">
    <meta property="og:image" content="https://tratofeito.pt/images/tratofeito.jpg">
    <meta property="og:locale" content="pt_PT">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://tratofeito.pt/">
    <meta name="twitter:title" content="TratoFeito.pt - Encontre Clientes e Profissionais em Portugal">
    <meta name="twitter:description" content="Ligue-se aos melhores profissionais em Portugal. Compare orçamentos e contrate com confiança.">
    <meta name="twitter:image" content="https://tratofeito.pt/images/tratofeito.jpg">

    {{-- Bootstrap (keep whatever you already use) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Page-level styles pushed from child views (e.g., Mailchimp CSS) --}}
    @stack('styles')
  </head>
  <body class="bg-white text-gray-900 antialiased">
    @yield('content')

    {{-- Optional Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Page-level scripts pushed from child views (e.g., Mailchimp validator) --}}
    @stack('scripts')
  </body>
</html>
