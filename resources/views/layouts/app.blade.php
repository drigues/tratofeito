<!doctype html>
<html lang="pt">
<head>
  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-G00VK7W6WR"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-G00VK7W6WR');
  </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ $title ?? 'tratofeito.pt - Encontre Clientes e Profissionais em Portugal' }}</title>
  <meta name="description" content="No TratoFeito.pt ligamos clientes e profissionais em Portugal. Solicite orçamentos, compare e escolha o serviço ideal com rapidez e confiança.">
  <meta name="keywords" content="serviços, profissionais, Portugal, orçamentos, contratar, eletricista, canalizador, remodelações, jardinagem, serviços domésticos, serviços técnicos, reparações, obras, limpezas">
  <meta name="author" content="TratoFeito.pt">
  <meta http-equiv="Content-Language" content="pt-PT">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://tratofeito.pt/">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://tratofeito.pt/">
  <meta property="og:title" content="tratofeito.pt - Encontre Clientes e Profissionais em Portugal">
  <meta property="og:description" content="Solicite orçamentos grátis e encontre o profissional certo para o seu projeto em qualquer ponto de Portugal.">
  <meta property="og:image" content="https://tratofeito.pt/assets/images/tratofeito.jpg">
  <meta property="og:locale" content="pt_PT">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="https://tratofeito.pt/">
  <meta name="twitter:title" content="tratofeito.pt - Encontre Clientes e Profissionais em Portugal">
  <meta name="twitter:description" content="Ligue-se aos melhores profissionais em Portugal. Compare orçamentos e contrate com confiança.">
  <meta name="twitter:image" content="https://tratofeito.pt/assets/images/tratofeito.jpg">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  @stack('styles')

  @php
    $hasViteBuild = file_exists(public_path('build/manifest.json'));
    $hasPlainCss  = file_exists(public_path('css/app.css'));
  @endphp

  @if (app()->environment('production') && $hasViteBuild)
    @vite(['resources/scss/app.scss','resources/js/app.js'])
  @elseif (app()->environment('production') && $hasPlainCss)
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
  @else
    @vite(['resources/scss/app.scss','resources/js/app.js'])
  @endif
</head>


<body class="bg-white text-gray-900 antialiased">
  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
