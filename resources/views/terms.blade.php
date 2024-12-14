@extends('layouts/main' )
@section('title')  {{ __('site.terms_and_usage') }} | @endsection

@section('content')
<!--==============================start  Faq questions ==============================-->
<section class="faq-section py-page">
  <div class="container-xl">
    <div class="title__section text-primary mb-section text-center">
      <span class="head">    {{ __('site.terms_and_usage') }} </span>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">

        <div class="">


              @if(app()->getLocale()=='ar')
              {!!$terms->details_ar!!}
             @else
             {!!$terms->details_en!!}
             @endif

        </div>

      </div>
    </div>
  </div>
</section>

<!--==============================End Download-app ==============================-->
@endsection
