@extends('layouts/main' )
@section('title')Download App | @endsection

@section('content')
<!--==============================start  Download-app ==============================-->
<section class="downloadapp py-page">
  <div class="title__section text-primary mb-section text-center">
    <span class="head"> تحميل التطبيق </span>
  </div>
  <div class="apps mobile-apps">
    <div class="container-fluid">

      <div class="row flex-row-reverse align-items-center justify-content-center">
        <div class="col-md-6 col-xxl-auto banner-side">
          <img src="{{ asset('front-assets/images/mob.png')}}" alt="">
        </div>
        <div class="col-md-6 col-xxl-auto text-side">
          <div class="heading">
            جاهز لرحلـــة تعليمية<br> ممتعـة وآمنـة لــطفلك ؟
          </div>
          <h2>
            حمل التطبيق الان متوفر على :
          </h2>
          <div class="download-links">
            <a href="javascript:;"><img src="{{ asset('front-assets/images/appstore.svg')}}"></a>
            <a href="javascript:;"><img src="{{ asset('front-assets/images/googleplay.svg')}}"></a>
            <a href="javascript:;"><img src="{{ asset('front-assets/images/appgallery.svg')}}"></a>


          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="apps">
    <div class="container-fluid">

      <div class="row align-items-center justify-content-center">
        <div class="col-md-6 col-xxl-auto banner-side">
          <img src="{{ asset('front-assets/images/pc.png')}}" alt="">
        </div>
        <div class="col-md-6 col-xxl-auto text-side">
          <div class="heading">
            نسخة الويب متاحة الآن! <br> استمتع بتجربة أوسع
          </div>
          <h2>
            لا حاجة للتنزيل استمتع بتصفح سريع وخفيف
          </h2>
          <div class="action">
            <a href="#">
              <img src="{{ asset('front-assets/images/webapp.svg')}}" alt="">
            </a>

          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!--==============================End Download-app ==============================-->
@endsection
