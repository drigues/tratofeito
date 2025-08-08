@extends('layouts.app')

@section('title', 'Política de Privacidade - Trato Feito')

@section('content')

@include('partial.simpheader')

<section class="text-dark py-5">
  <div class="container">
    <div class="row align-items-start">
      <div class="col-md-12">
        <h1 class="display-5 fw-bold">Política de Privacidade</h1>
        <p class="text-muted small mb-4">
          Última atualização:
          {{ \Carbon\Carbon::now()->locale('pt_PT')->translatedFormat('F \d\e Y') }}
        </p>

        <p>
          Esta Política de Privacidade descreve como recolhemos, utilizamos e protegemos os seus dados pessoais ao utilizar esta plataforma.
          O tratamento dos dados é feito em conformidade com o Regulamento Geral de Proteção de Dados (RGPD) e demais legislação aplicável.
        </p>

        <h5 class="mt-5 fw-bold">1. Dados que Recolhemos</h5>
        <p>
          Podemos recolher as seguintes informações:
        </p>
        <ul>
          <li>Dados de identificação: nome, email, telefone</li>
          <li>Informações de localização (morada, cidade, país)</li>
          <li>Dados técnicos: endereço IP, tipo de dispositivo, sistema operativo e navegador</li>
          <li>Dados de navegação e interações na plataforma</li>
          <li>Cookies e tecnologias similares</li>
        </ul>

        <h5 class="mt-5 fw-bold">2. Finalidade da Recolha</h5>
        <ul>
          <li>Fornecer e personalizar os serviços</li>
          <li>Gerir registos e pedidos efetuados</li>
          <li>Comunicar informações relevantes</li>
          <li>Cumprir obrigações legais e regulatórias</li>
          <li>Melhorar a experiência do utilizador e prevenir fraudes</li>
        </ul>

        <h5 class="mt-5 fw-bold">3. Base Legal para o Tratamento</h5>
        <p>
          O tratamento dos dados pessoais baseia-se no consentimento do utilizador, no cumprimento de obrigações legais, 
          na execução de um contrato ou no interesse legítimo em operar e melhorar os serviços.
        </p>

        <h5 class="mt-5 fw-bold">4. Partilha de Dados</h5>
        <p>
          Os dados podem ser partilhados com prestadores de serviços técnicos, parceiros estratégicos e autoridades competentes,
          sempre de acordo com a finalidade para a qual foram recolhidos e com medidas de segurança adequadas.
        </p>

        <h5 class="mt-5 fw-bold">5. Retenção de Dados</h5>
        <p>
          Os dados são armazenados pelo período necessário para cumprir as finalidades da recolha ou por obrigações legais,
          sendo posteriormente eliminados ou anonimizados de forma segura.
        </p>

        <h5 class="mt-5 fw-bold">6. Direitos do Utilizador</h5>
        <p>
          Nos termos do RGPD, o utilizador pode, a qualquer momento:
        </p>
        <ul>
          <li>Aceder, corrigir ou atualizar os seus dados</li>
          <li>Solicitar a eliminação dos dados</li>
          <li>Restringir ou opor-se ao tratamento</li>
          <li>Retirar o consentimento</li>
          <li>Solicitar a portabilidade dos dados</li>
        </ul>

        <h5 class="mt-5 fw-bold">7. Segurança</h5>
        <p>
          Implementamos medidas técnicas e organizativas para proteger os dados pessoais contra acesso não autorizado,
          perda, alteração ou divulgação.
        </p>

        <h5 class="mt-5 fw-bold">8. Cookies</h5>
        <p>
          Utilizamos cookies para melhorar a experiência de navegação. 
          Pode consultar a nossa <a href="{{ route('general.politica-cookies') }}">Política de Cookies</a> para mais detalhes.
        </p>

        <h5 class="mt-5 fw-bold">9. Alterações a Esta Política</h5>
        <p>
          Podemos atualizar esta política periodicamente. Recomendamos a consulta regular desta página para se manter informado.
        </p>

        <h5 class="mt-5 fw-bold">10. Contacto</h5>
        <p>
          Para questões relacionadas com esta Política de Privacidade ou para exercer os seus direitos,
          utilize os canais de contacto indicados na plataforma.
        </p>
      </div>
    </div>
  </div>
</section>

@include('partial.simpfooter')

@endsection
