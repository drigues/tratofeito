@extends('layouts.app')

@section('title', 'Política de Privacidade - Trato Feito')

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
        <h1 class="display-5 fw-bold">Política de Privacidade</h1>
        <p class="text-muted small mb-4">
          Última atualização: 26 de Dezembro de 2024
        </p>

        <p class="text-dark">
          A Trato Feito valoriza a privacidade dos seus utilizadores e compromete-se a proteger os dados pessoais fornecidos na sua plataforma. A presente Política de Privacidade explica como recolhemos, usamos, armazenamos e protegemos esses dados.
        </p>

        <h5 class="mt-5 fw-bold">1. Recolha de Dados</h5>
        <p>Recolhemos dados pessoais quando se regista, submete um pedido, responde a um pedido ou interage com o nosso site. Estes dados podem incluir: nome, email, telefone, localização e outros dados necessários à prestação dos serviços.</p>

        <h5 class="mt-5 fw-bold">2. Dados Técnicos e de Navegação</h5>
        <ul>
          <li>Informações do dispositivo (sistema operativo, operador móvel)</li>
          <li>Localização (via IP, GPS, Wi-Fi)</li>
          <li>IP, navegador, sistema operativo, fuso horário</li>
          <li>Sequência de cliques e interações com a plataforma</li>
          <li>Cookies (armazenamento de preferências e sessões)</li>
        </ul>

        <h5 class="mt-5 fw-bold">3. Finalidades do Tratamento</h5>
        <p>Utilizamos os dados recolhidos para:</p>
        <ul>
          <li>Fornecer e melhorar os nossos serviços</li>
          <li>Comunicar com os utilizadores</li>
          <li>Cumprir obrigações legais</li>
          <li>Evitar fraudes e abusos</li>
          <li>Análise estatística e melhorias de experiência</li>
        </ul>

        <h5 class="mt-5 fw-bold">4. Retenção de Dados</h5>
        <p>Os dados são armazenados enquanto a conta estiver ativa e por um período adicional para cumprimento legal ou resolução de litígios. Posteriormente, os dados são eliminados com segurança.</p>

        <h5 class="mt-5 fw-bold">5. Direitos do Utilizador</h5>
        <p>Nos termos do RGPD, o utilizador tem o direito de:</p>
        <ul>
          <li>Aceder aos seus dados</li>
          <li>Corrigir ou atualizar dados</li>
          <li>Solicitar a eliminação dos dados</li>
          <li>Restringir ou opor-se ao seu tratamento</li>
        </ul>

        <h5 class="mt-5 fw-bold">6. Segurança</h5>
        <p>Implementamos medidas técnicas e organizativas para proteger os seus dados contra acesso não autorizado, perda ou destruição. Toda a informação sensível é transmitida de forma encriptada.</p>

        <h5 class="mt-5 fw-bold">7. Cookies</h5>
        <p>Utilizamos cookies para melhorar a navegação, armazenar preferências e apresentar anúncios personalizados. Pode controlar ou bloquear cookies nas definições do seu navegador. Algumas funcionalidades podem deixar de funcionar se os cookies forem desativados.</p>

        <h5 class="mt-5 fw-bold">8. Partilha de Dados</h5>
        <p>Podemos partilhar dados com prestadores de serviços tecnológicos (ex: Google, Facebook, serviços de email/SMS) sempre de acordo com a finalidade da recolha e com contratos de confidencialidade. Nunca vendemos os seus dados.</p>

        <h5 class="mt-5 fw-bold">9. Ligações a Sites Externos</h5>
        <p>A Trato Feito pode incluir links para sites externos. Não nos responsabilizamos pelas políticas de privacidade desses sites.</p>

        <h5 class="mt-5 fw-bold">10. Alterações à Política</h5>
        <p>Reservamo-nos o direito de alterar esta política a qualquer momento. As alterações serão comunicadas nesta página.</p>

        <h5 class="mt-5 fw-bold">11. Contacto</h5>
        <p>Se tiver dúvidas ou quiser exercer os seus direitos, contacte-nos através de:</p>
        <ul>
          <li>Email: <a href="mailto:privacidade@tratofeito.pt">privacidade@tratofeito.pt</a></li>
          <li>Telefone: +351 XXX XXX XXX (chamada local)</li>
          <li>Disponível de 2ª a 6ª feira, das 9h às 18h</li>
        </ul>
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
