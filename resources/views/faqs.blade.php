@extends('layouts/main' )
@section('title')Faq questions | @endsection

@section('content')
<!--==============================start  Faq questions ==============================-->
<section class="faq-section py-page">
  <div class="container-xl">
    <div class="title__section text-primary mb-section text-center">
      <span class="head">  {{ translatePhrase('faq_questions') }}</span>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">
        @foreach($faq as $faqs)
        <div class="question">
          <div class="title-question">
            <h4>{{$faqs->question}}</h4></h4>
            <i>
              <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.37082 16.2803L8.96256 8.85316L1.37082 1.42605" stroke="#88115F" stroke-width="2.39845" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>

            </i>
          </div>
          <div class="answer">
            <span>
              {{$faqs->answer}}
            </span>
          </div>
        </div>
       @endforeach
       
        
        
      </div>
    </div>
  </div>
</section>

<!--==============================End Download-app ==============================-->
@endsection
