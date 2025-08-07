@extends('layouts.app')

@section('title', 'Cookies - Trato Feito')

@section('content')

@include('partial.simpheader')

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

@include('partial.simpfooter')

@endsection
