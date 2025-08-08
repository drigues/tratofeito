@extends('layouts.app')

@section('title', 'Política de Cookies - Trato Feito')

@section('content')

@include('partial.simpheader')

<section class="text-dark py-5">
  <div class="container">
    <div class="row align-items-start">
      <div class="col-md-12">
        <h1 class="display-5 fw-bold">Política de Cookies</h1>
        <p class="text-muted small mb-4">
          Última atualização:
          {{ \Carbon\Carbon::now()->locale('pt_PT')->translatedFormat('F \d\e Y') }}
        </p>

        <p>
          Esta Política de Cookies explica o que são cookies, como são utilizados nesta plataforma, que tipos de cookies podem ser armazenados no seu dispositivo, e como pode gerir as suas preferências.
        </p>

        <h5 class="mt-5 fw-bold">1. O que são cookies?</h5>
        <p>
          Cookies são pequenos ficheiros de texto que são guardados no seu dispositivo (computador, tablet ou telemóvel) quando visita um website. 
          Contêm informação básica, como o nome do site de origem, a duração e um identificador único. 
          Não identificam diretamente o utilizador, mas sim o dispositivo que está a ser utilizado. 
          São amplamente usados para melhorar a navegação e permitir certas funcionalidades.
        </p>

        <h5 class="mt-5 fw-bold">2. Para que servem os cookies?</h5>
        <p>
          Os cookies ajudam a otimizar a experiência de navegação, tornando-a mais rápida e personalizada, 
          eliminando a necessidade de introduzir repetidamente as mesmas informações. 
          Também permitem recolher estatísticas de utilização e avaliar a eficácia de funcionalidades e campanhas.
        </p>

        <h5 class="mt-5 fw-bold">3. Tipos de cookies que utilizamos</h5>
        <ul>
          <li>
            <strong>Cookies necessários:</strong> essenciais para o funcionamento básico e seguro da plataforma. 
            Sem eles, algumas funcionalidades poderão não estar disponíveis.
          </li>
          <li>
            <strong>Cookies analíticos:</strong> permitem medir e analisar como os utilizadores interagem com o site, 
            ajudando a melhorar conteúdos e funcionalidades.
          </li>
          <li>
            <strong>Cookies de terceiros:</strong> utilizados para integração de serviços externos, 
            como funcionalidades de redes sociais, publicidade personalizada ou widgets.
          </li>
        </ul>

        <h5 class="mt-5 fw-bold">4. Duração dos cookies</h5>
        <ul>
          <li>
            <strong>Cookies de sessão:</strong> temporários, são eliminados automaticamente quando fecha o navegador.
          </li>
          <li>
            <strong>Cookies persistentes:</strong> mantêm-se no dispositivo durante um período definido ou até serem eliminados manualmente pelo utilizador.
          </li>
        </ul>

        <h5 class="mt-5 fw-bold">5. Como gerir cookies</h5>
        <p>
          Pode, a qualquer momento, configurar o seu navegador para bloquear ou eliminar cookies, 
          de forma parcial ou total. No entanto, ao desativar determinados cookies, 
          algumas funcionalidades da plataforma poderão não funcionar corretamente.
        </p>

        <h5 class="mt-5 fw-bold">6. Alterações a esta política</h5>
        <p>
          Podemos atualizar esta Política de Cookies para refletir mudanças na forma como utilizamos cookies 
          ou por razões legais e técnicas. Recomenda-se que consulte esta página regularmente para se manter informado.
        </p>
      </div>
    </div>
  </div>
</section>

@include('partial.simpfooter')

@endsection
