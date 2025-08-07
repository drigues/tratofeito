@extends('layouts.app')

@section('title', 'Trato Feito')

@section('content')

<!-- Header com logo e botões -->
<header class="bg-white border-bottom py-3">
  <div class="container d-flex justify-content-between align-items-center">
    <!-- Logo -->
    <a href="{{ route('welcome') }}" class="pt-3">
      <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" style="width: 180px;">
    </a>

    <!-- Botões -->
    <div class="d-flex gap-3">
      <a href="{{ route('landing.orcamentos') }}" class="btn btn-primary btn-md">Peça Orçamento</a>
      <a href="{{ route('landing.projetos') }}" class="btn btn-warning btn-md text-dark fw-semibold">Seja Profissional</a>
    </div>
  </div>
</header>

<!-- Conteúdo principal -->
<section class="text-dark py-5">
  <div class="container">
    <div class="row align-items-start">
      <div class="col-md-6">
        <h1 class="display-5 fw-bold">Cookies</h1>
        <p class="text-dark mb-4">
          Conectamos os melhores profissionais de obras e reparações a clientes de confiança em Portugal. É simples, grátis e sem intermediários.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-light text-center py-4 mt-5 border-top">
  <div class="container">
    <div class="mb-3 d-flex justify-content-center gap-3">
      <a href="{{ route('general.politica') }}" class="text-muted small">Política de Privacidade</a>
      <a href="{{ route('general.termos') }}" class="text-muted small">Termos</a>
      <a href="{{ route('general.cookies') }}" class="text-muted small">Cookies</a>
    </div>
    <div class="d-flex justify-content-center gap-3">
      <a href="#"><img src="{{ asset('assets/images/icon-1.svg') }}" width="24" alt="Facebook"></a>
      <a href="#"><img src="{{ asset('assets/images/icon-2.svg') }}" width="24" alt="Instagram"></a>
      <a href="#"><img src="{{ asset('assets/images/icon-3.svg') }}" width="24" alt="Twitter"></a>
    </div>
  </div>
</footer>

@endsection
