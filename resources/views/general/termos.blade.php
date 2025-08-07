@extends('layouts.app')

@section('title', 'Termos de Utilização - Trato Feito')

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

<section class="text-dark py-5">
  <div class="container">
    <div class="row align-items-start">
      <div class="col-md-12">
        <h1 class="display-5 fw-bold">Termos de Utilização</h1>
        <p class="text-muted small mb-4">
          Última atualização: 26 de Dezembro de 2024
        </p>

        <p class="text-dark">
          O presente Acordo sobre os Termos de Utilização constitui um contrato celebrado entre a Trato Feito e os utilizadores da sua plataforma. A utilização dos serviços implica a aceitação plena destes Termos. Caso não concorde com alguma cláusula, não deverá utilizar os serviços disponibilizados.
        </p>

        <h5 class="mt-5 fw-bold">1. Definições</h5>
        <p><strong>Trato Feito</strong>: plataforma online que liga Clientes a Profissionais de serviços em Portugal.</p>
        <p><strong>Cliente</strong>: utilizador que procura serviços.</p>
        <p><strong>Profissional</strong>: prestador de serviços registado na plataforma.</p>
        <p><strong>Pedido</strong>: solicitação feita por um Cliente à qual os Profissionais podem responder.</p>
        <p><strong>Utilizador</strong>: qualquer pessoa que acede ao website.</p>

        <h5 class="mt-5 fw-bold">2. Política de Privacidade</h5>
        <p>A Política de Privacidade descreve como recolhemos, usamos e protegemos os seus dados. Está disponível separadamente nesta plataforma.</p>

        <h5 class="mt-5 fw-bold">3. Garantias</h5>
        <p>A Trato Feito não garante a qualidade dos serviços prestados pelos Profissionais, nem assume qualquer responsabilidade por falhas contratuais entre Cliente e Profissional.</p>

        <h5 class="mt-5 fw-bold">4. Direitos e Obrigações</h5>
        <ul>
          <li>O Cliente é responsável por avaliar propostas e selecionar o Profissional.</li>
          <li>O Profissional deve cumprir as boas práticas da sua área e respeitar os acordos com o Cliente.</li>
          <li>Ambas as partes comprometem-se a agir com honestidade e profissionalismo na plataforma.</li>
        </ul>

        <h5 class="mt-5 fw-bold">5. Responsabilidade</h5>
        <p>A Trato Feito é um intermediário tecnológico. Não participa nos contratos estabelecidos entre Clientes e Profissionais e não pode ser responsabilizada por danos decorrentes dessas relações.</p>

        <h5 class="mt-5 fw-bold">6. Conflitos</h5>
        <p>Conflitos devem ser reportados à Trato Feito via os canais de apoio. Serão analisados com base na informação disponível na plataforma.</p>

        <h5 class="mt-5 fw-bold">7. Penalizações</h5>
        <p>O não cumprimento dos Termos pode resultar na suspensão ou eliminação da conta do utilizador, sem aviso prévio.</p>

        <h5 class="mt-5 fw-bold">8. Pagamentos</h5>
        <p>O uso da plataforma pelos Clientes é gratuito. Profissionais podem adquirir créditos ou planos para aceder a pedidos. Algumas funcionalidades poderão implicar custos adicionais visíveis antes da contratação.</p>

        <h5 class="mt-5 fw-bold">9. Serviços com Pagamento Direto</h5>
        <p>Profissionais podem listar serviços com preços fixos. A Trato Feito não é responsável por falhas na execução destes serviços. A faturação é da responsabilidade do Profissional.</p>

        <h5 class="mt-5 fw-bold">10. Disposições Finais</h5>
        <p>O uso contínuo da plataforma implica a aceitação de atualizações aos presentes Termos. Em caso de dúvida, contacte-nos através dos meios indicados na plataforma.</p>
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
