@extends('layouts/main' )
@section('title')  {{ translatePhrase('Intellectual_Property_Notice') }} | @endsection

@section('content')
<!--==============================start  Faq questions ==============================-->
<section class="faq-section py-page">
  <div class="container-xl">
    <div class="title__section text-primary mb-section text-center">
      <span class="head">    {{translatePhrase('Intellectual_Property_Notice') }} </span>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">

        <div class="">


          {{translatePhrase('Intellectual_Property_Notice_text') }}

        </div>

      </div>
    </div>
  </div>
</section>

<!--==============================End Download-app ==============================-->
@endsection
