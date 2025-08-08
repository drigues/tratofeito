@extends('layouts.app')

@section('title', 'Trato Feito')

@push('styles')
  {{-- Mailchimp embed CSS (loaded in <head>) --}}
  <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
  <style>
    /* Keep Mailchimp box visually consistent with your page */
    #mc_embed_signup{
      background: transparent; /* don’t add white box if your section is tinted */
      clear: left;
      font: 14px Helvetica, Arial, sans-serif;
      max-width: 600px; /* same feel as your old form */
      width: 100%;
      padding: 0; /* let your spacing from Bootstrap handle layout */
    }
    /* Make the H2 look like your page headings */
    #mc_embed_signup h2{ margin-bottom: .75rem; font-weight: 600; font-size: 1.25rem; }
    /* Make inputs full-width, matching Bootstrap feel */
    #mc_embed_signup .mc-field-group input{ width:100%; }
    /* Tuck the “indicates required” line away if you don’t want it loud */
    #mc_embed_signup .indicates-required{ font-size:.85rem; opacity:.75; }
    /* Keep the submit button size consistent with your buttons */
    #mc_embed_signup .button{ display:inline-block; padding:.75rem 1rem; font-weight:600; }
  </style>
@endpush

@section('content')
<section class="bg-body-secondary text-dark py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left: text + Mailchimp form -->
      <div class="col-md-6 pe-5">
        <a href="{{ route('welcome') }}">
          <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" class="mb-5" style="width: 200px;">
        </a>

        <h1 class="display-5 fw-bold">
          Encontre os profissionais <br>
          <span class="text-primary">que precisas.</span><br>
          Junte-se à Trato Feito!
        </h1>

        <p class="text-dark mb-4">
          Conectamos os melhores profissionais de obras e reparações a clientes de confiança em Portugal. É simples, grátis e sem intermediários.
        </p>

        {{-- Mailchimp: embed placed here (replaces your old <form>) --}}
        <div id="mc_embed_shell">
          <div id="mc_embed_signup">
            <form action="https://tratofeito.us5.list-manage.com/subscribe/post?u=3b1071360a93bc7c9ae8a71c1&amp;id=ac6aaff858&amp;f_id=00dc89e1f0"
                  method="post"
                  id="mc-embedded-subscribe-form"
                  name="mc-embedded-subscribe-form"
                  class="validate"
                  target="_blank"
                  novalidate>
              <div id="mc_embed_signup_scroll">
                <div class="mc-field-group">
                  <label for="mce-FNAME">Nome</label>
                  <input type="text" name="FNAME" class="text form-control" id="mce-FNAME" value="">
                </div>

                <div class="mc-field-group">
                  <label for="mce-EMAIL">Endereço de email <span class="asterisk">*</span></label>
                  <input type="email" name="EMAIL" class="required email form-control" id="mce-EMAIL" value="" required>
                </div>

                <div class="mc-field-group">
                  <label for="mce-PHONE">Telemóvel</label>
                  <input type="text" name="PHONE" class="REQ_CSS form-control" id="mce-PHONE" value="">
                </div>

                <div class="mc-field-group">
                  <label for="mce-COMPANY">O que precisas?</label>
                  <input type="text" name="COMPANY" class="text form-control" id="mce-COMPANY" value="">
                </div>

                <div id="mce-responses" class="clear foot">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
                </div>

                {{-- honeypot (don’t remove) --}}
                <div aria-hidden="true" style="position:absolute; left:-5000px;">
                  <input type="text" name="b_3b1071360a93bc7c9ae8a71c1_ac6aaff858" tabindex="-1" value="">
                </div>

                <div class="optionalParent">
                  <div class="clear foot d-flex align-items-center gap-3">
                    <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-primary fw-semibold btn-cliente" value="Confirmar dados">
                    {{-- Mailchimp badge (optional; keep for compliance if required by your plan) --}}
                    <p class="m-0">
                      <a href="http://eepurl.com/jkS0c6" title="Mailchimp">
                        <span style="display:inline-block; background-color:transparent; border-radius:4px;">
                          <img class="refferal_badge"
                               src="https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/intuit-mc-rewards-text-dark.svg"
                               alt="Intuit Mailchimp"
                               style="width: 180px; height: 32px; display:flex; padding:2px 0; justify-content:center; align-items:center;">
                        </span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </form>
          </div> {{-- /#mc_embed_signup --}}
        </div>   {{-- /#mc_embed_shell --}}

        <div class="d-flex justify-content-between mt-4 text-dark small pe-4">
          <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('assets/images/verify.png') }}" width="20" alt=""> Acesso a Clientes Verificados
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('assets/images/time.png') }}" width="24" alt=""> Orçamento Rápido
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('assets/images/support.png') }}" width="22" alt=""> Apoio Exclusivo
          </div>
        </div>
      </div>

      <!-- Right image -->
      <div class="col-md-6 text-center">
        <img src="{{ asset('assets/images/img-1.jpg') }}" alt="Cliente" class="img-fluid rounded-4 shadow-lg">
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
          <img src="{{ asset('assets/images/img-a.jpg') }}" class="card-img-top rounded-circle mx-auto mt-3" style="width:100px; height:100px;" alt="">
          <div class="card-body">
            <h5 class="card-title">Limpeza</h5>
            <p class="card-text text-muted small">Especialista em limpeza residencial</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="card text-center shadow-sm">
          <img src="{{ asset('assets/images/img-b.jpg') }}" class="card-img-top rounded-circle mx-auto mt-3" style="width:100px; height:100px;" alt="">
          <div class="card-body">
            <h5 class="card-title">Construção e Remodelagem</h5>
            <p class="card-text text-muted small">Especialista em pladur</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="card text-center shadow-sm">
          <img src="{{ asset('assets/images/img-c.jpg') }}" class="card-img-top rounded-circle mx-auto mt-3" style="width:100px; height:100px;" alt="">
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

@push('scripts')
  {{-- Mailchimp validator JS (loads jQuery internally and sets noConflict) --}}
  <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
  <script>
    (function($) {
      window.fnames = []; window.ftypes = [];
      fnames[1] = 'FNAME'; ftypes[1] = 'text';
      fnames[0] = 'EMAIL'; ftypes[0] = 'email';
      fnames[4] = 'PHONE'; ftypes[4] = 'phone';
      fnames[6] = 'COMPANY'; ftypes[6] = 'text';
    }(jQuery));
    var $mcj = jQuery.noConflict(true);
  </script>
@endpush
