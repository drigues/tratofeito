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
    <meta property="og:image" content="https://tratofeito.pt/assets/images/tratofeito.jpg">
    <meta property="og:locale" content="pt_PT">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://tratofeito.pt/">
    <meta name="twitter:title" content="TratoFeito.pt - Encontre Clientes e Profissionais em Portugal">
    <meta name="twitter:description" content="Ligue-se aos melhores profissionais em Portugal. Compare orçamentos e contrate com confiança.">
    <meta name="twitter:image" content="https://tratofeito.pt/assets/images/tratofeito.jpg">

    {{-- Bootstrap (keep whatever you already use) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Page-level styles pushed from child views (e.g., Mailchimp CSS) --}}
    @stack('styles')

    @php
      $hasViteBuild = file_exists(public_path('build/manifest.json'));
      $hasPlainCss  = file_exists(public_path('css/app.css'));
    @endphp

    @if (app()->environment('production') && $hasViteBuild)
      {{-- Use Vite-built assets in production --}}
      @vite(['resources/scss/app.scss','resources/js/app.js'])
    @elseif (app()->environment('production') && $hasPlainCss)
      {{-- Fallback: plain compiled CSS if present --}}
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @else
      {{-- Local/dev: Vite dev server --}}
      @vite(['resources/scss/app.scss','resources/js/app.js'])
    @endif

    <style>
      .landing-split .cliente-bloco{
        background: linear-gradient(to bottom, rgba(13, 110, 253, 0.2), rgba(13, 110, 253, 0.8)),
                    url('/assets/images/img-1.jpg') center center / cover no-repeat;
      }

      .landing-split .profissional-bloco{
        background: linear-gradient(to bottom, rgba(255, 193, 9, 0.2), rgba(255, 193, 9, 0.8)),
                    url('/assets/images/img-2.jpg') center center / cover no-repeat;
      }

      .landing-split .cliente-bloco {
        background-position: left;
      }

      .landing-split .profissional-bloco {
        background-position: right;
      }

      .box-frente{
        border-radius: 6px;
        box-shadow: 4px 4px 8px 4px rgba(0, 0, 0, 0.1);
        background: rgb(255 255 255 / 90%);
        color: #333;
      }

      #mc_embed_signup form {
          margin: 0 !important;
      }

      #mc_embed_signup #mc-embedded-subscribe-form div.mce_inline_error {
          background-color: rgba(255, 255, 255, 0) !important;
      }

      #mc_embed_signup .button {
          background-color:none !important;
          line-height: 0 !important;
          margin: 0 !important;
          padding: 1.3rem !important;
          width: 100% !important;
      }

      #mc-embedded-subscribe.btn-cliente {
          background-color:rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
      }

      #mc-embedded-subscribe.btn-pro {
          background-color:rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
          color: #000;
      }
    </style>

  </head>
  <body class="bg-white text-gray-900 antialiased">
    @yield('content')

    {{-- Optional Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Page-level scripts pushed from child views (e.g., Mailchimp validator) --}}
    @stack('scripts')
  </body>
</html>
