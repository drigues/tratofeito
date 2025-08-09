@extends('layouts.app')

@section('title', 'Bem-vindo ao Trato Feito')

@section('content')
<section class="landing-split min-vh-100 d-flex flex-column justify-content-between">
  <div class="row g-0 min-vh-100">
    <!-- Cliente -->
    <div class="col-md-6 d-flex align-items-center justify-content-center box-texto cliente-bloco text-white text-center">
      <div class="p-3 box-frente m-5" style="">
        <h2 class="fw-bold mb-3">Tens um serviço?</h2>
        <p>Peça orçamentos gratuitos à profissionais verificados.</p>
        <a href="{{ route('landing.orcamentos') }}" class="btn btn-primary btn-lg mt-3">Peça Orçamento</a>
      </div>
    </div>

    <!-- Profissional -->
    <div class="col-md-6 d-flex align-items-center justify-content-center box-texto profissional-bloco text-white text-center">
      <div class="p-3 box-frente m-5" style="">
        <h2 class="fw-bold mb-3">És um Profissional?</h2>
        <p>Receba pedidos de clientes e aumente a sua renda.</p>
        <a href="{{ route('landing.projetos') }}" class="btn btn-warning btn-lg mt-3 text-dark fw-semibold">Seja Profissional</a>
      </div>
    </div>
  </div>
</section>

@include('partial.simpfooter')
  
@endsection
