
@extends('layouts.app')

@section('title', 'Trato Feito')

@section('content')
<section class="bg-body-secondary text-dark py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Esquerda: Texto e Formulário -->
      <div class="col-md-6 pe-5">
        <a href="{{ route('welcome') }}"><img src="/assets/images/logo.svg" alt="Logo" class="mb-5" style="width: 200px;"></a>
         <h1 class="display-5 fw-bold">
          Encontre Clientes e <br>
          <span class="text-warning">Aumente a sua Renda.</span><br>
          Junte-se à Trato Feito!
        </h1>
        <p class="text-dark mb-4">
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
          <button type="submit" class="btn btn-warning w-100 fw-semibold">Confirmar dados</button>
        </form>
        <div class="d-flex justify-content-between mt-4 text-dark small">
          <div class="d-flex align-items-center gap-2">
            <img src="/assets/images/verify.png" width="20"> Acesso a Clientes Verificados
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="/assets/images/time.png" width="24"> Orçamento Rápido
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="/assets/images/support.png" width="22"> Apoio Exclusivo
          </div>
        </div>
      </div>

      <!-- Direita: Imagem -->
      <div class="col-md-6 text-center">
        <img src="/assets/images/img-2.jpg" alt="Profissional" class="img-fluid rounded-4 shadow-lg">
      </div>
    </div>
  </div>
</section>

<section class="bg-light py-5">
  <div class="container">
    <h2 class="mb-4 fw-bold">Profissionais</h2>
    <div class="row g-4">

        <div class="col-sm-6 col-md-4">
          <div class="card text-center shadow-sm">
            <img src="/assets/images/img-a.jpg" class="card-img-top rounded-circle mx-auto mt-3" style="width: 100px; height: 100px;">
            <div class="card-body">
              <h5 class="card-title">Limpeza</h5>
              <p class="card-text text-muted small">Especialista em limpeza residencial</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="card text-center shadow-sm">
            <img src="/assets/images/img-b.jpg" class="card-img-top rounded-circle mx-auto mt-3" style="width: 100px; height: 100px;">
            <div class="card-body">
              <h5 class="card-title">Construção e Remodelagem</h5>
              <p class="card-text text-muted small">Especialista em pladur</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="card text-center shadow-sm">
            <img src="/assets/images/img-c.jpg" class="card-img-top rounded-circle mx-auto mt-3" style="width: 100px; height: 100px;">
            <div class="card-body">
              <h5 class="card-title">Catering e Serviço de mesa</h5>
              <p class="card-text text-muted small">Especialista em eventos empresarial</p>
            </div>
          </div>
        </div>

    </div>
  </div>
</section>

@include('partial.simpfooter')

@endsection
