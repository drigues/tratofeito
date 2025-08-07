@extends('layouts.app')

@section('title', 'Bem-vindo ao Trato Feito')

@section('content')
<section class="landing-split min-vh-100 d-flex flex-column justify-content-between">
  <div class="row g-0 min-vh-100">
    <!-- Cliente -->
    <div class="col-md-6 d-flex align-items-center justify-content-end box-texto cliente-bloco text-white text-end">
      <div class="p-5" style="max-width: 420px;">
        <h2 class="fw-bold mb-3">Precisa de um Serviço?</h2>
        <p>Peça orçamentos gratuitos a profissionais verificados.</p>
        <a href="{{ route('landing.orcamentos') }}" class="btn btn-primary btn-lg mt-3">Peça Orçamento</a>
      </div>
    </div>

    <!-- Profissional -->
    <div class="col-md-6 d-flex align-items-center justify-content-start box-texto profissional-bloco text-white text-start">
      <div class="p-5" style="max-width: 420px;">
        <h2 class="fw-bold mb-3">É um Profissional?</h2>
        <p>Receba pedidos de clientes e aumente a sua renda.</p>
        <a href="{{ route('landing.projetos') }}" class="btn btn-warning btn-lg mt-3 text-dark fw-semibold">Seja Profissional</a>
      </div>
    </div>
  </div>
</section>

@include('partial.simpfooter')
  
@endsection
