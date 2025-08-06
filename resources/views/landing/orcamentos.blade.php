@extends('layouts.app')

@section('title', 'Trato Feito')

@section('content')
<section class="bg-dark text-white py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Esquerda: Texto e Formulário -->
      <div class="col-md-6">
        <img src="/assets/images/logo.png" alt="Logo" class="mb-4" style="width: 140px;">
        <h1 class="display-5 fw-bold">
          Encontre Clientes e <br>
          <span class="text-warning">Aumente a sua Renda.</span><br>
          Junte-se à Trato Feito!
        </h1>
        <p class="text-light mb-4">
          Conectamos os melhores profissionais de obras e reparações a clientes de confiança em Portugal. É simples, grátis e sem intermediários.
        </p>
        <form>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Endereço de email">
          </div>
          <div class="mb-3">
            <input type="tel" class="form-control" placeholder="Número de telefone">
          </div>
          <div class="mb-3">
            <select class="form-select">
              <option>Escolher serviço</option>
            </select>
          </div>
          <button type="submit" class="btn btn-warning w-100 fw-semibold">Enviar meus dados</button>
        </form>
        <div class="d-flex justify-content-between mt-4 text-white-50 small">
          <div class="d-flex align-items-center gap-2">
            <img src="/assets/images/icon-placeholder.svg" width="20"> Acesso a Clientes Verificados
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="/assets/images/icon-placeholder.svg" width="20"> Orçamento Rápido
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="/assets/images/icon-placeholder.svg" width="20"> Apoio Exclusivo
          </div>
        </div>
      </div>

      <!-- Direita: Imagem -->
      <div class="col-md-6 text-center">
        <img src="/assets/images/hero-placeholder.jpg" alt="Profissional" class="img-fluid rounded-4 shadow-lg">
      </div>
    </div>
  </div>
</section>

<section class="bg-light py-5">
  <div class="container">
    <h2 class="mb-4 fw-bold">Profissionais</h2>
    <div class="row g-4">
      @foreach(range(1,3) as $i)
        <div class="col-sm-6 col-md-4">
          <div class="card text-center shadow-sm">
            <img src="/assets/images/person-placeholder.jpg" class="card-img-top rounded-circle mx-auto mt-3" style="width: 80px; height: 80px;">
            <div class="card-body">
              <h5 class="card-title">Profissional Exemplo</h5>
              <p class="card-text text-muted small">Especialista em Estucagem</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
