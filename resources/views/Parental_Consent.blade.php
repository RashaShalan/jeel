@extends('layouts/main' )
@section('title')  {{ translatePhrase('Parental_Consent_Notice') }} | @endsection

@section('content')
<!--==============================start  Faq questions ==============================-->
<section class="faq-section py-page">
  <div class="container-xl">
    <div class="title__section text-primary mb-section text-center">
      <span class="head">    {{translatePhrase('Parental_Consent_Notice') }} </span>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">

        <div class="">


          {{translatePhrase('Parental_Consent_Notice_text') }}

        </div>

      </div>
    </div>
  </div>
</section>

<!--==============================End Download-app ==============================-->
@endsection
