<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Trato Feito')</title>
  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
  @yield('content')
</body>
</html>
