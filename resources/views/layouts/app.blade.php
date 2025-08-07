<!doctype html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Trato Feito' }}</title>

  {{-- Vite: entradas DEVEM corresponder ao vite.config.js --}}
  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 antialiased">
  @yield('content')
</body>
</html>
