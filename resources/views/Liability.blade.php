@extends('layouts/main' )
@section('title')  {{ translatePhrase('Disclaimer_of_Liability') }} | @endsection

@section('content')
<!--==============================start  Faq questions ==============================-->
<section class="faq-section py-page">
  <div class="container-xl">
    <div class="title__section text-primary mb-section text-center">
      <span class="head">    {{translatePhrase('Disclaimer_of_Liability') }} </span>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">

        <div class="">


          {{translatePhrase('Disclaimer_of_Liability_text') }}

        </div>

      </div>
    </div>
  </div>
</section>

<!--==============================End Download-app ==============================-->
@endsection
