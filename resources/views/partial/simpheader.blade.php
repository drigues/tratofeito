<!-- Header com logo e botões -->
<header class="bg-white border-bottom py-3">
  <div class="container d-flex justify-content-between align-items-center">
    <!-- Logo -->
    <a href="{{ route('welcome') }}" class="pt-3">
      <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" style="width: 180px;">
    </a>

    <!-- Botões -->
    <div class="d-flex gap-3 botoes">
      <a href="{{ route('landing.orcamentos') }}" class="btn btn-primary btn-md">Peça Orçamento</a>
      <a href="{{ route('landing.projetos') }}" class="btn btn-warning btn-md text-dark fw-semibold">Seja Profissional</a>
    </div>
  </div>
</header>