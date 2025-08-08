@extends('layouts.app')

@section('title', 'Termos e Condições - Trato Feito')

@section('content')

@include('partial.simpheader')

<section class="text-dark py-5">
  <div class="container">
    <div class="row align-items-start">
      <div class="col-md-12">
        <h1 class="display-5 fw-bold">Termos e Condições</h1>
        <p class="text-muted small mb-4">
          Última atualização:
          {{ \Carbon\Carbon::now()->locale('pt_PT')->translatedFormat('d \d\e F \d\e Y') }}
        </p>

        <p class="text-dark">
          Estes Termos e Condições (“Termos”) regulam o acesso e utilização desta plataforma online (“Plataforma”), que liga pessoas que procuram serviços (“Clientes”) a prestadores de serviços independentes (“Profissionais”). Ao utilizar a Plataforma, o utilizador declara que leu, compreendeu e aceita integralmente estes Termos. Se não concordar, não deverá utilizar a Plataforma.
        </p>

        <h5 class="mt-5 fw-bold">1. Definições</h5>
        <ul>
          <li><strong>Plataforma</strong>: website e/ou aplicação que permite a interação entre Clientes e Profissionais.</li>
          <li><strong>Cliente</strong>: utilizador que solicita ou pesquisa serviços.</li>
          <li><strong>Profissional</strong>: pessoa singular ou coletiva que oferece e presta serviços através da Plataforma.</li>
          <li><strong>Pedido</strong>: solicitação de serviços criada por um Cliente.</li>
          <li><strong>Conta</strong>: registo individual necessário para utilização de funcionalidades reservadas.</li>
          <li><strong>Utilizador</strong>: qualquer pessoa que acede ou utiliza a Plataforma (Cliente ou Profissional).</li>
        </ul>

        <h5 class="mt-5 fw-bold">2. Acesso e Conta</h5>
        <ul>
          <li>Algumas funcionalidades exigem registo e criação de Conta, com fornecimento de dados verdadeiros, completos e atualizados.</li>
          <li>O Utilizador é responsável por manter a confidencialidade das credenciais e por toda a atividade efetuada na sua Conta.</li>
          <li>A Plataforma pode, a qualquer momento, suspender ou encerrar Contas em caso de violação destes Termos ou de lei aplicável.</li>
        </ul>

        <h5 class="mt-5 fw-bold">3. Papel da Plataforma</h5>
        <p>
          A Plataforma é um intermediário tecnológico que facilita o contacto entre Clientes e Profissionais. 
          Não participa, não gere, nem garante a execução dos serviços acordados entre as partes, não intervindo como parte contratual.
          Qualquer contrato de prestação de serviços é celebrado diretamente entre Cliente e Profissional.
        </p>

        <h5 class="mt-5 fw-bold">4. Utilização da Plataforma</h5>
        <ul>
          <li>O Cliente é responsável por descrever o Pedido de forma clara e por avaliar as propostas recebidas.</li>
          <li>O Profissional é responsável por cumprir a legislação aplicável, boas práticas da sua atividade e pelos prazos e qualidade do serviço.</li>
          <li>É proibida a utilização fraudulenta, abusiva, ou que viole direitos de terceiros.</li>
        </ul>

        <h5 class="mt-5 fw-bold">5. Pedidos, Propostas e Contratação</h5>
        <ul>
          <li>Os Profissionais podem responder a Pedidos com propostas e condições. O Cliente decide com quem contratar.</li>
          <li>Os termos finais (preço, escopo, prazos) são acordados diretamente entre Cliente e Profissional.</li>
          <li>A Plataforma pode disponibilizar funcionalidades de mensagens, avaliação e histórico de interações.</li>
        </ul>

        <h5 class="mt-5 fw-bold">6. Pagamentos e Planos</h5>
        <ul>
          <li>O acesso para Clientes pode ser gratuito. Profissionais podem subscrever planos, créditos ou funcionalidades pagas.</li>
          <li>Quaisquer custos, comissões ou preços serão apresentados de forma clara antes da contratação.</li>
          <li>Quando existirem serviços com preço fixo apresentados por Profissionais, a faturação e execução são da responsabilidade exclusiva do Profissional.</li>
        </ul>

        <h5 class="mt-5 fw-bold">7. Cancelamentos</h5>
        <p>
          As regras de cancelamento e eventuais taxas aplicáveis são definidas pelo Profissional ou pelo modelo do serviço contratado
          e devem ser informadas previamente ao Cliente. Em caso de mediação de cobrança por terceiros (por ex. processadores de pagamento),
          poderão aplicar-se condições adicionais desses terceiros.
        </p>

        <h5 class="mt-5 fw-bold">8. Avaliações e Comentários</h5>
        <p>
          O Utilizador pode avaliar serviços concluídos. As avaliações devem ser verdadeiras, objetivas e respeitar a lei.
          A Plataforma pode moderar ou remover conteúdos que violem estes Termos.
        </p>

        <h5 class="mt-5 fw-bold">9. Conduta e Penalizações</h5>
        <ul>
          <li>É proibida a publicação de conteúdos ilícitos, difamatórios, enganadores ou que infrinjam direitos de terceiros.</li>
          <li>O incumprimento pode resultar em advertência, suspensão ou remoção definitiva de Conta, sem reembolso de quantias já pagas quando aplicável.</li>
        </ul>

        <h5 class="mt-5 fw-bold">10. Propriedade Intelectual</h5>
        <p>
          A Plataforma, incluindo marcas, logótipos, software, design e conteúdos, está protegida por direitos de propriedade intelectual.
          É proibida a reprodução ou utilização não autorizada. Os conteúdos enviados pelos Utilizadores permanecem sua propriedade,
          concedendo estes uma licença para exibição na Plataforma quando necessário ao seu funcionamento.
        </p>

        <h5 class="mt-5 fw-bold">11. Comunicações Comerciais e Códigos Promocionais</h5>
        <p>
          A Plataforma pode disponibilizar campanhas promocionais ou enviar comunicações, nos termos da lei e das preferências escolhidas pelo Utilizador.
          Benefícios promocionais podem ser alterados ou cancelados a qualquer momento, quando existirem indícios de uso fraudulento ou expiração.
        </p>

        <h5 class="mt-5 fw-bold">12. Responsabilidade</h5>
        <ul>
          <li>A Plataforma não garante a disponibilidade contínua e isenta-se de responsabilidade por falhas de rede, interrupções, vírus ou eventos de força maior.</li>
          <li>A Plataforma não responde por atos, omissões, incumprimentos contratuais, danos ou litígios entre Cliente e Profissional.</li>
          <li>O Utilizador é o único responsável pela utilização que faz da Plataforma e pelos conteúdos que publica.</li>
        </ul>

        <h5 class="mt-5 fw-bold">13. Privacidade e Proteção de Dados</h5>
        <p>
          O tratamento de dados pessoais é descrito na Política de Privacidade disponível na Plataforma. Ao usar a Plataforma,
          o Utilizador declara estar informado sobre as finalidades e fundamentos do tratamento.
        </p>

        <h5 class="mt-5 fw-bold">14. Suporte e Resolução de Conflitos</h5>
        <p>
          Questões, reclamações ou conflitos devem ser comunicados através dos canais de apoio disponibilizados na Plataforma.
          Sempre que não seja possível uma resolução informal, as partes poderão recorrer aos meios legais competentes.
        </p>

        <h5 class="mt-5 fw-bold">15. Alterações aos Termos</h5>
        <p>
          A Plataforma pode atualizar estes Termos para refletir alterações legais, técnicas ou operacionais.
          A utilização continuada após a publicação das alterações constitui aceitação das mesmas.
        </p>

        <h5 class="mt-5 fw-bold">16. Lei Aplicável e Foro</h5>
        <p>
          Estes Termos são regidos pela lei portuguesa. Salvo disposição legal imperativa em contrário,
          é competente o tribunal da comarca correspondente ao domicílio da entidade gestora da Plataforma.
        </p>

      </div>
    </div>
  </div>
</section>

@include('partial.simpfooter')

@endsection
