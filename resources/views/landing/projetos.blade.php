@extends('layouts.app')

@section('title', 'Trato Feito')

@push('styles')
  {{-- Mailchimp embed CSS (loaded in <head>) --}}
    <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
    <style>
    #mc_embed_signup{
      background: transparent;
      clear: left;
      font: 14px Helvetica, Arial, sans-serif;
      max-width: 600px;
      width: 100%;
      padding: 0;
    }
    #mc_embed_signup h2{ margin-bottom: .75rem; font-weight: 600; font-size: 1.25rem; }
    #mc_embed_signup .mc-field-group input{ width: 100%; }
    #mc_embed_signup .indicates-required{ font-size:.85rem; opacity:.75; }
    #mc_embed_signup .button{ display:inline-block; padding:.75rem 1rem; font-weight:600; }
    #mc_embed_signup form#mc-embedded-subscribe-form {
        margin: 0 !important;
    }
    #mc_embed_signup #mc-embedded-subscribe-form div.mce_inline_error {
        background-color: rgba(255, 255, 255, 0) !important;
    }
    #mc_embed_signup .button {
        background-color:none !important;
        line-height: 0 !important;
        margin: 0 !important;
        padding: 1.3rem !important;
        width: 100% !important;
    }
    #mc-embedded-subscribe.btn-cliente {
        background-color:rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
    }
    #mc-embedded-subscribe.btn-pro {
        background-color:rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
        color: #000;
    }
    </style>
@endpush


@section('content')
<section class="bg-body-secondary text-dark py-5">
  <div class="container">
    <div class="row align-start-center">
      <div class="col-md-6 pe-5 mailchimp">
        <a href="{{ route('welcome') }}">
          <img src="/assets/images/logo.svg" alt="Logo" class="mb-4" style="width: 200px;">
        </a>
        <h1 class="display-5 fw-bold mb-3">
          Mais Clientes, <br>
          <span class="text-warning">Mais Renda </span>
          — Faça Parte da Trato Feito!
        </h1>
        <p class="text-dark mb-4 fs-5 mb-2">
         Ligamos profissionais de obras e reparações a clientes de confiança em todo o país. Simples, gratuito e sem intermediários."
        </p>

        {{-- Mailchimp embed --}}
        <div id="mc_embed_shell">
          <div id="mc_embed_signup">
            <form action="https://tratofeito.us5.list-manage.com/subscribe/post?u=3b1071360a93bc7c9ae8a71c1&amp;id=ac6aaff858&amp;f_id=00c389e1f0"
                  method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                  class="validate" target="_blank" novalidate>
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
                  <label for="mce-COMPANY">Qual sua área de atuação?</label>
                  <input type="text" name="COMPANY" class="text form-control" id="mce-COMPANY" value="">
                </div>

                <div id="mce-responses" class="clear foot">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
                </div>

                {{-- Honeypot --}}
                <div aria-hidden="true" style="position:absolute; left:-5000px;">
                  <input type="text" name="b_3b1071360a93bc7c9ae8a71c1_ac6aaff858" tabindex="-1" value="">
                </div>

                <div class="optionalParent">
                  <div class="clear foot d-flex align-items-center gap-3">
                    <input type="submit" name="subscribe" id="mc-embedded-subscribe"
                           class="button btn btn-warning fw-semibold btn-pro" value="Confirmar dados">
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
          </div>
        </div>

        <div class="d-flex justify-content-between mt-4 text-dark small pe-4 bene">
          <div class="d-flex align-items-center gap-2">
            <img src="/assets/images/icons/verify.png" width="28"> Acesso a Clientes Verificados
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="/assets/images/icons/time.png" width="34"> Orçamento Rápido
          </div>
          <div class="d-flex align-items-center gap-2">
            <img src="/assets/images/icons/support.png" width="32"> Apoio Exclusivo
          </div>
        </div>
      </div>

      <div class="col-md-6 text-center">
        <img src="/assets/images/img-1.jpg" alt="Profissional" class="img-fluid rounded-4 shadow-lg">
      </div>
    </div>
  </div>
</section>

@include('partial.whynow')

@include('partial.whatistrato')

@include('partial.services')

@include('partial.simpfooter')

@endsection

@push('scripts')
<script src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
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
