@extends('layouts/main' )
@section('title')Jeel questions | @endsection

@section('content')
<!--==============================start  Faq questions ==============================-->
<section class="faq-section jeelquest py-page">
  <div class="container-xl">
    <div class="title__section text-primary mb-section text-center">
      <span class="head"> {{ translatePhrase('jeel_questions') }}</span></span>
    </div>
    <div class="row">
      <div class="col-md-6 kids">
        <h2> {{ translatePhrase('child_asks') }}</h2>
        @foreach($childs as $child)
        <div class="question">
          <div class="title-question">
            <h6>{{$child->question}}</h6>
            <i>
              <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.11719 14.1953L7.44773 8.00206L1.11719 1.8088" stroke="#B5B5B5" stroke-opacity="0.933333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </i>
          </div>
          <div class="answer">
            <span>
              {{$child->answer}}
            </span>
          </div>
        </div>
        @endforeach

      </div>
      <div class="col-md-6 parents">
        <h2> {{ translatePhrase('parents_questions') }}</h2>
        @foreach($parents as $parent)
        <div class="question">
          <div class="title-question">
            <h6>
              {{$parent->question}}
            </h6>
            <i>
              <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.11719 14.1953L7.44773 8.00206L1.11719 1.8088" stroke="#B5B5B5" stroke-opacity="0.933333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </i>
          </div>
          <div class="answer">
            <span>
              {{$parent->answer}}
            </span>
          </div>
        </div>
@endforeach


      </div>
    </div>
  </div>
</section></div>

<!--==============================End Download-app ==============================-->
@endsection
