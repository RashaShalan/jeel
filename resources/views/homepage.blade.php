@extends('layouts/main' )

@section('title')Home page | @endsection

@section('content')
            <!--==============================Start Hero Section ==============================-->

            <section class="home_banner mb-section">
              <div class="banner_slider slider" dir="{{__('site.class')}}">
                @foreach($sliders as $slider)
                  <div class="slide">

                          <img src="{{ $slider->image}}">

                      <div class="wrap-slide">
                          <div class="container-xl">
                              <div class="left-section">
                                  <div class="head">

                                    {!! $slider->title!!}

                               </div>
                                  <p>
                                    {!!$slider->desc!!}

                                  </p>
                                  <div class="action">
                                      <button class="btn btn-primary join-btn" id="" >{{translatePhrase('joinNow')}}</button>
                                      <button class="btn btn-outlineprimary download-btn" id="">{{translatePhrase('download_app')}}</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endforeach
               {{--    <div class="slide">
                      <img src="{{ asset('front-assets/images/cover2.png')}}" alt="img-slide2">
                      <div class="wrap-slide">
                          <div class="container-xl">
                              <div class="left-section">
                                  <div class="head">
                                      العنوان الرئيسى<br> لصفحة الهبوط لجيل
                                  </div>
                                  <p>
                                      وريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس
                                      المحتوى) ويُستخدم في صناعات المطابع ودور النش
                                  </p>
                                  <div class="action">
                                      <button class="btn btn-primary">اشترك الان</button>
                                      <button class="btn btn-outlineprimary">حمل التطبيق</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div> --}}
              {{--     <div class="slide">
                      <img src="{{ asset('front-assets/images/cover3.jpg')}}" alt="img-slide3">
                      <div class="wrap-slide">
                          <div class="container-xl">
                              <div class="left-section">
                                  <div class="head">
                                      العنوان الرئيسى<br> لصفحة الهبوط لجيل
                                  </div>
                                  <p>
                                      وريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس
                                      المحتوى) ويُستخدم في صناعات المطابع ودور النش
                                  </p>
                                  <div class="action">
                                      <button class="btn btn-primary">اشترك الان</button>
                                      <button class="btn btn-outlineprimary">حمل التطبيق</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div> --}}
              </div>


          </section>
          <!--==============================End Hero Section==============================-->
          <!--==============================Start About Section==============================-->
          <section class="about-section mb-section py-section">
              <div class="container-xl">
                  <div class="row justify-content-between">
                      <div class="col-md-7">
                          <div class="video-about">
                              <div id="video-about">
                                  <a data-lg-size="1280-720" data-src="https://www.youtube.com/watch?v=e10CKlL6ynk"
                                   data-poster="images/video.png" data-sub-html="<h4>Puffin Hunts Fish To Feed Puffling | Blue Planet II | BBC Earth</h4><p>On the heels of Planet Earth II's record-breaking Emmy nominations, BBC America presents stunning visual soundscapes from the series' amazing habitats.</p>">
                                      <img width="623" height="328" class="img-responsive" src="{{ asset('front-assets/images/video.png')}}">
                                      <button class="play-btn"></button>
                                  </a>

                              </div>

                          </div>

                      </div>
                      <div class="col-md-5 px-0">
                          <div class="title__section">
                              <div class="subhead text-primarydark mb-2"><span>  {{translatePhrase('About_us')}} </span></div>
                              <div class="head text-primary">{{translatePhrase('WhatJeelApp')}}</div>
                          </div>
                          <div class="main-text">
                              <p>
                                 {{translatePhrase('WhatJeelAnswer')}}.
                              </p>
                          </div>
                          <div class="btns-action">
                              <button class="btn btn-primary"> {{translatePhrase('download_app')}}</button>
                              <button class="btn btn-outlineprimary mx-3">{{translatePhrase('Achievement')}} </button>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!--==============================End About Section ==============================-->
          <!--==============================Start Clients Section ==============================-->
          <section class="clients-section mb-section py-section">
              <div class="container-xl">
                  <div class="title__section text-center">
                      <div class="subhead text-primarydark mb-2"><span> {{translatePhrase('Partnerships')}} </span></div>
                      <div class="head text-blacklight">{{translatePhrase('TrustJeel')}}
                      </div>
                  </div>
                  <div class="content__section">
                      <ul class="d-flex flex-wrap justify-content-center flex-sm-nowrap justify-content-sm-between align-items-center">
                          <li>
                              <img src="{{ asset('front-assets/images/clients/client1.svg')}}" alt="">
                          </li>
                          <li>
                              <img src="{{ asset('front-assets/images/clients/client2.svg')}}" alt="">
                          </li>
                          <li>
                              <img src="{{ asset('front-assets/images/clients/client3.svg')}}" alt="">
                          </li>
                          <li>
                              <img src="{{ asset('front-assets/images/clients/client4.svg')}}" alt="">
                          </li>
                          <li>
                              <img src="{{ asset('front-assets/images/clients/client5.svg')}}" alt="">
                          </li>
                      </ul>
                  </div>
              </div>

          </section>
          <!--==============================End Clients Section ==============================-->


          <!--==============================Start Stats Section ==============================-->
          <section class="stats-section py-section pb-3">
              <div class="container-xl">
                  <div class="row">
                      <div class="title__section text-center">
                          <div class="subhead mb-2"><span> {{translatePhrase('Achievement')}}</span></div>
                          <div class="head text-primary">
                            {{translatePhrase('Achievement')}}
                          </div>

                      </div>
                      <div class="main-text">
                          <p class="col-md-9 mx-auto">
                            {{translatePhrase('achive_text')}}
                          </p>
                      </div>
                  </div>


                  <div class="content__section sm-template">
                      <div class="head text-white text-center mb-4"> {{translatePhrase('jeel_achieve')}}</div>

                      <div class="d-flex flex-wrap justify-content-between align-items-center">
                          <div class="stats-item">
                              <div class="ico-stats text-center">
                                  <img src="{{ asset('front-assets/images/stats/download-icon.svg')}}" alt="">
                              </div>
                              <div class="desc-stats text-center">
                                  <span class="num-stats">+2M</span>
                                  <span>{{translatePhrase('download_process')}}</span>
                              </div>

                          </div>
                          <div class="stats-item">
                              <div class="ico-stats text-center">
                                  <img src="{{ asset('front-assets/images/stats/location-icon.svg')}}" alt="">
                              </div>
                              <div class="desc-stats text-center">
                                  <span class="num-stats"> +57 </span>
                                  <span>{{translatePhrase('country_with_users')}}</span>
                              </div>

                          </div>
                          <div class="stats-item">
                              <div class="ico-stats text-center">
                                  <img src="{{ asset('front-assets/images/stats/persons-icon.svg')}}" alt="">
                              </div>
                              <div class="desc-stats text-center">
                                  <span class="num-stats">+300K</span>
                                  <span> {{translatePhrase('subscribe_of_app')}}</span>
                              </div>

                          </div>
                          <div class="stats-item">
                              <div class="ico-stats text-center">
                                  <img src="{{ asset('front-assets/images/stats/video-icon.svg')}}" alt="">
                              </div>
                              <div class="desc-stats text-center">
                                  <span class="num-stats"> +500 </span>
                                  <span>{{translatePhrase('episode_to_watch')}} </span>
                              </div>

                          </div>
                          <div class="stats-item">
                              <div class="ico-stats text-center">
                                  <img src="{{ asset('front-assets/images/stats/character-icon.svg')}}" alt="">
                              </div>
                              <div class="desc-stats text-center">
                                  <span class="num-stats"> +1000 </span>
                                  <span>{{translatePhrase('exclusive_character')}}</span>
                              </div>

                          </div>
                          <div class="stats-item">
                              <div class="ico-stats text-center">
                                  <img src="{{ asset('front-assets/images/stats/Star-icon.svg')}}" alt="">
                              </div>
                              <div class="desc-stats text-center">
                                  <span class="num-stats"> +10 </span>
                                  <span>{{translatePhrase('years_of_experience')}}</span>
                              </div>

                          </div>

                      </div>
                  </div>

              </div>
      </section></div>


      <!--==============================End Stats Section ==============================-->
      <section class="growth-section mb-5">
          <div class="container-xl">
              <div class="banners-companies">
                  <div class="c-item company-1">
                      <img src="{{ asset('front-assets/images/companies/huaw-bg.jpg')}}" alt="">
                      <div class="details">
                          <div class="logo">
                              <img src="{{ asset('front-assets/images/companies/huaw-logo.svg')}}" alt="">

                          </div>
                          <p>{{translatePhrase('best_10')}}</p>
                      </div>

                  </div>
                  <div class="c-item company-2">
                      <img src="{{ asset('front-assets/images/companies/holo-bg.jpg')}}" alt="">
                      <div class="details">
                          <div class="logo">
                              <img src="{{ asset('front-assets/images/companies/holo-logo.svg')}}" alt="">

                          </div>
                          <p>
                              {{translatePhrase('IQ_holon')}}
                          </p>
                      </div>

                  </div>
                  <div class="c-item company-3 effect2">
                      <img src="{{ asset('front-assets/images/companies/takeoff-bg.jpg')}}" alt="">
                      <div class="details">
                          <div class="logo">
                              <img src="{{ asset('front-assets/images/companies/takeoff-logo.svg')}}" alt="">

                          </div>
                          <p>{{translatePhrase('istanbul_take_off')}}</p>
                      </div>

                  </div>
                  <div class="c-item company-4 effect2">
                      <img src="{{ asset('front-assets/images/companies/kiw-bg.jpg')}}" alt="">
                      <div class="details">
                          <div class="logo">
                              <img src="{{ asset('front-assets/images/companies/kiw-logo.svg')}}" alt="">

                          </div>
                          <p>{{translatePhrase('Kiwitik_participate')}}</p></p>
                      </div>

                  </div>
                  <div class="c-item company-5 effect2">
                      <img src="{{ asset('front-assets/images/companies/tech-bg.jpg')}}" alt="">
                      <div class="details">
                          <div class="logo">
                              <img src="{{ asset('front-assets/images/companies/tech-logo.svg')}}" alt="">

                          </div>
                          <p>{{translatePhrase('Techne_summit')}}</p>
                      </div>

                  </div>
                  <div class="c-item company-6 effect2">
                      <img src="{{ asset('front-assets/images/companies/esc-bg.jpg')}}" alt="">
                      <div class="details">
                          <div class="logo">
                              <img src="{{ asset('front-assets/images/companies//esc-logo.svg')}}" alt="">

                          </div>
                          <p> {{translatePhrase('escew_prize')}}</p>
                      </div>

                  </div>
              </div>
          </div>

      </section>

      <!--==============================Start Features Kids Section ==============================-->
      <section class="features-kids-section mb-section py-section">
          <div class="container-xl">
              <div class="row flex-column-reverse flex-md-row">
                  <div class="col-md-6">
                      <div class="title__section">
                          <div class="subhead text-primarydark mb-2"><span> {{translatePhrase('features')}} </span></div>
                          <div class="head text-blacklight">
                               {{translatePhrase('Achievement')}}
                          </div>

                      </div>
                      <div class="main-text">
                          <p>{{translatePhrase('child_independent_account')}}
                          </p>
                      </div>

                      <div class="features-list">
                          <div class="feature-item">
                              <i>
                                  <img src="{{ asset('front-assets/images/kidsfeature/seriesicon.svg')}}">
                              </i>  {{translatePhrase('feautre1')}}


                          </div>
                          <div class="feature-item">
                              <i>
                                  <img src="{{ asset('front-assets/images/kidsfeature/readicon.svg')}}">
                              </i> {{translatePhrase('feautre2')}}


                          </div>
                          <div class="feature-item">
                              <i>
                                  <img src="{{ asset('front-assets/images/kidsfeature/radioicon.svg')}}">
                              </i>  {{translatePhrase('feautre3')}}


                          </div>
                          <div class="feature-item">
                              <i>
                                  <img src="{{ asset('front-assets/images/kidsfeature/teachicon.svg')}}">
                              </i>  {{translatePhrase('feautre4')}}


                          </div>
                          <div class="feature-item">
                              <i>
                                  <img src="{{ asset('front-assets/images/kidsfeature/gamesicon.svg')}}">
                              </i>  {{translatePhrase('feautre5')}}


                          </div>
                          <div class="feature-item">
                              <i>
                                  <img src="{{ asset('front-assets/images/kidsfeature/readicon.svg')}}">
                              </i>  {{translatePhrase('feautre6')}}


                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="g-imge">
                          <div class="img-1 s-icon">
                              <div class="slides-title">
                                {{translatePhrase('what_we_offer')}}
                              </div>
                              <div class="slider-feature w-100">
                                  <ul id="sliderfeatures">
                                      <li>
                                          <img src="{{ asset('front-assets/images/f1.svg')}}">
                                      </li>
                                      <li>
                                          <img src="{{ asset('front-assets/images/f2.svg')}}">
                                      </li>
                                      <li>
                                          <img src="{{ asset('front-assets/images/f3.svg')}}">
                                      </li>
                                      <li>
                                          <img src="{{ asset('front-assets/images/f4.svg')}}">
                                      </li>
                                      <li>
                                          <img src="{{ asset('front-assets/images/f5.svg')}}">
                                      </li>
                                      <li>
                                          <img src="{{ asset('front-assets/images/f6.svg')}}">
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="img-2 s-icon">
                              <img src="{{ asset('front-assets/images/g-2.svg')}}" alt="">
                          </div>
                          <div class="img-3 s-icon">

                              <div class="slider-movies w-100">
                                  <ul id="slidemovies">
                                      <li>
                                          <img src="{{ asset('front-assets/images/slide1.svg')}}">
                                      </li>
                                      <li>
                                          <img src="{{ asset('front-assets/images/slide2.svg')}}">
                                      </li>
                                      <li>
                                          <img src="{{ asset('front-assets/images/slide3.svg')}}">
                                      </li>
                                      <li>
                                          <img src="{{ asset('front-assets/images/slide4.svg')}}">
                                      </li>
                                      <li>
                                          <img src="{{ asset('front-assets/images/slide5.svg')}}">
                                      </li>

                                  </ul>
                              </div>
                          </div>
                          <div class="img-4 s-icon">
                              <img src="{{ asset('front-assets/images/g-4.svg')}}" alt="">
                          </div>
                          <div class="img-5 s-icon">
                              <img src="{{ asset('front-assets/images/g-5.svg')}}" alt="">
                          </div>
                          <div class="img-6 s-icon">
                              <img src="{{ asset('front-assets/images/g-6.svg')}}" alt="">
                          </div>
                          <div class="img-7 s-icon">
                              <img src="{{ asset('front-assets/images/g-7.svg')}}" alt="">
                          </div>
                      </div>
                  </div>

              </div>

          </div>

      </section>
      <!--==============================End Features Kids Section ==============================-->
      <!--==============================Start Features Parent Section ==============================-->
      <section class="features-parents-section mb-section py-section">
          <div class="container-xl">
              <div class="row">
                  <div class="title__section text-center">
                      <div class="subhead text-primarydark mb-2"><span> {{translatePhrase('parents')}} </span></div>
                      <div class="head text-blacklight">
                         {{translatePhrase('Jeel_offers_parents')}}
                      </div>
                  </div>
                  <div class="main-text">
                      <p class="col-md-8 mx-auto text-center">
                        {{translatePhrase('Jeel_offers_parents_text')}}
                      </p>
                  </div>
              </div>
              <div class="content__section features">

                  <div class="feature">
                      <div class="main-provides">
                          <video width="100%" height="auto" onclick="this.play()">
                              <source src="{{ asset('front-assets/images/video1.mp4')}}" type="video/mp4">

                          </video>
                      </div>
                      <div class="main-description">
                          <h4>{{translatePhrase('details_reports')}}</h4>
                          <ul>
                              <li>
                                {{translatePhrase('report_item_1')}}
                              </li>
                              <li>
                                {{translatePhrase('report_item_2')}}
                              </li>
                          </ul>

                      </div>
                  </div>
                  <div class="feature">
                      <div class="main-provides">

                          <video width="100%" height="auto" onclick="this.play()">
                              <source src="{{ asset('front-assets/images/video2.mp4')}}" type="video/mp4">

                          </video>
                      </div>
                      <div class="main-description">
                          <h4>{{translatePhrase('Jasor_dept')}}</h4>
                          <ul>
                              <li>
                                  {{translatePhrase('dept_item_1')}}

                              </li>
                              <li>
                                {{translatePhrase('dept_item_2')}}
                              </li>
                              <li>
                                {{translatePhrase('dept_item_3')}}                              </li>
                          </ul>

                      </div>
                  </div>
                  <div class="feature">
                      <div class="main-provides">
                          <video width="100%" height="auto" onclick="this.play()">
                              <source src="{{ asset('front-assets/images/video3.mp4')}}" type="video/mp4">

                          </video>
                      </div>
                      <div class="main-description">
                          <h4>{{translatePhrase('accounts_in_one')}}</h4>
                          <ul>
                              <li>
                                {{translatePhrase('account_item_1')}}

                              </li>
                              <li>
                                  {{translatePhrase('account_item_2')}}
                              </li>
                          </ul>

                      </div>
                  </div>
                  <div class="feature">
                      <div class="main-provides">

                          <video width="100%" height="auto" onclick="this.play()">
                              <source src="{{ asset('front-assets/images/video4.mp4')}}" type="video/mp4">

                          </video>
                      </div>
                      <div class="main-description">
                          <h4>{{translatePhrase('music_or_not')}}</h4>
                          <ul>
                              <li>
                                 {{translatePhrase('music_item_1')}}
                              </li>
                          </ul>
                      </div>
                  </div>

              </div>
          </div>

      </section>
      <!--==============================End Features Parent Section ==============================-->
      <!--==============================Start CTA Section ==============================-->
      <section class="cta-section mb-section py-section" id="downloadsection">
          <div class="container-xl">
              <div class="row">
                  <div class="cta-wrapper d-flex align-items-center justify-content-center">

                      <div class="effect col-md-11 d-flex align-items-center">
                          <!-- <div class="content"> -->
                          <div class="txt">
                              <div class="heading">

                                  <p class="mb-0">{{translatePhrase('ready_education')}}</p>
                                  <p class="mb-0"> {{translatePhrase('fun_safe')}}</p>


                              </div>


                              <h2>
                                 {{translatePhrase('app_avaliable')}}
                              </h2>

                              <div class="download-links">

                                  <div class="two-btns">
                                      <a href="https://web.jeelapp.com/#/register-add-extra-info" target="_blank"><img src="{{ asset('front-assets/images/webapp.svg')}}"></a>
                                      <a href="https://apps.apple.com/us/app/jeel-%D8%AC%D9%8A%D9%84/id1489596085" target="_blank"><img src="{{ asset('front-assets/images/appstore.svg')}}"></a>

                                  </div>

                                  <div class="two-btns">
                                      <a href="https://play.google.com/store/apps/details?id=com.jeelapp.android" target="_blank"><img src="{{ asset('front-assets/images/googleplay.svg')}}"></a>

                                      <a href="https://appgallery.huawei.com/app/C103389579" target="_blank"><img src="{{ asset('front-assets/images/appgallery.svg')}}"></a>
                                  </div>

                              </div>
                          </div>

                          <!-- </div> -->
                      </div>

                      <div class="banner-cta">
                          <img src="{{ asset('front-assets/images/iphonespro.svg')}}">
                      </div>

                  </div>


              </div>
          </div>


      </section>
      <!--==============================End CTA Section ==============================-->
      <!--==============================Start Testimonial Section ==============================-->
   {{--    <section class="testimonial-section mb-section py-section" style="display: none;">
          <div class="container-xl">
              <div class="row">
                  <div class="title__section text-center">
                      <div class="subhaed text-blue mb-2"><span>{{translatePhrase('Testomnials')}}</span></div>
                      <div class="head text-primary">{{translatePhrase('jeel_testomnials')}}</div>
                  </div>
                  <div class="main-text">
                      <p class="col-md-8 mx-auto text-center">
                        {{translatePhrase('jeel_testomnials_text')}}

                      </p>
                  </div>
              </div>
              <div class="comment">

                  <div class="card-img">
                      <img src="{{ asset('front-assets/images/profile.png')}}" alt="">
                  </div>

                  <div class="descripe">
                      <h2 class="text-primary mb-4">“{{translatePhrase('testomnial_1')}}”</h2>

                      <div class="person-details">
                          <img src="{{ asset('front-assets/images/quote-ico.svg')}}">
                          <div class="mx-3">
                              <h4>{{translatePhrase('testomnial_user_1')}}</h4>
                              <h5>{{translatePhrase('testomnial_user_1_info')}}</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </section> --}}
      <!--==============================End Testimonial Section ==============================-->
      <!--==============================Start Pricing Section ==============================-->
      <section class="pricing-section mb-section py-section">
          <div class="container-xl">
              <div class="row">
                  <div class="title__section text-center mb-3">
                      <div class="subhaed text-primarydark mb-2"><span>{{translatePhrase('packages')}}</span></div>
                      <div class="head text-blacklight">{{translatePhrase('Jeel_packge')}}</div>

                  </div>
                  <p class="col-md-8 main-text mx-auto text-center">
                    {{translatePhrase('Jeel_packge_text')}}
                  </p>
              </div>
              <div class="buying-card text-center">
                  <div class="row">
                      <div class="col">
                          <div class="card-price weekly">
                              <div class="icon">
                                  <img src="{{ asset('front-assets/images/payment_icons/weekly.svg')}}" alt="">
                              </div>
                              <div class="main-title">
                                  <h2>{{translatePhrase('weekly_subsc')}}</h2>
                                  <p>{{translatePhrase('best_package')}}</p>
                              </div>
                              <div class="price">
                                @if (Cookie::get('weekly') !== null)
                                <span> {{ Cookie::get('weekly') }}</span>
                                @else
                                  <span>649.99 ج.م</span>
                                  @endif
                              </div>
                              <div class="action">
                                  <button class="btn">
                                     {{translatePhrase('choose_package')}}
                                  </button>
                              </div>
                              <div class="more">
                                <a href="#">{{translatePhrase('more')}}</a>
                              </div>
                          </div>
                      </div>
                      <div class="col">
                          <div class="card-price monthly">
                              <div class="icon">
                                  <img src="{{ asset('front-assets/images/payment_icons/monthly.svg')}}" alt="">
                              </div>
                              <div class="main-title">
                                  <h2> {{translatePhrase('monthly_subsc')}}</h2>
                                  <p>{{translatePhrase('best_package')}}</p>
                              </div>
                              <div class="price">
                                @if (Cookie::get('monthly') !== null)
                                <span> {{ Cookie::get('monthly') }}</span>
                                @else
                                  <span>649.99 ج.م</span>
                                  @endif
                              </div>
                              <div class="action">
                                  <button class="btn">
                                     {{translatePhrase('choose_package')}}
                                  </button>
                              </div>
                              <div class="more">
                                <a href="#">{{translatePhrase('more')}}</a>
                              </div>
                          </div>
                      </div>
                      <div class="col">
                          <div class="card-price annualy">
                              <div class="icon">
                                  <img src="{{ asset('front-assets/images/payment_icons/yearly.svg')}}" alt="">
                              </div>
                              <div class="main-title">
                                  <h2> {{translatePhrase('annual_subsc')}}</h2>
                                  <p>{{translatePhrase('best_package')}}</p>
                              </div>
                              <div class="price">
                                @if (Cookie::get('annualy') !== null)
                                <span> {{ Cookie::get('annualy') }}</span>
                                @else
                                  <span>649.99 ج.م</span>
                                  @endif
                              </div>
                              <div class="action">
                                  <button class="btn">
                                     {{translatePhrase('choose_package')}}
                                  </button>
                              </div>
                              <div class="more">
                                  <a href="#">{{translatePhrase('more')}}</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="pay">
                  <div class="row">
                      <div class="h-pay d-flex justify-content-between align-items-center">
                          <span class="how-pay">{{translatePhrase('payment_method')}}</span>
                          <span class="have-account">
                              <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M2.68896 17.3436H25.1466" stroke="#4F0F4B" stroke-width="1.98155" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M25.1466 14.2655V23.7109C25.107 27.4759 24.0765 28.427 20.153 28.427H7.68252C3.69299 28.427 2.68896 27.4362 2.68896 23.4995V14.2655C2.68896 10.6987 3.52122 9.54938 6.65208 9.36443C6.96912 9.35122 7.31263 9.33801 7.68252 9.33801H20.153C24.1426 9.33801 25.1466 10.3288 25.1466 14.2655Z" stroke="#4F0F4B" stroke-width="1.98155" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M29.1095 9.57664V18.8107C29.1095 22.3775 28.2772 23.5268 25.1464 23.7117V14.2663C25.1464 10.3296 24.1423 9.33885 20.1528 9.33885H7.6823C7.31241 9.33885 6.9689 9.35206 6.65186 9.36527C6.69149 5.60032 7.72193 4.64917 11.6454 4.64917H24.1159C28.1055 4.64917 29.1095 5.63995 29.1095 9.57664Z" stroke="#4F0F4B" stroke-width="1.98155" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M6.9834 24.2134H9.25684" stroke="#4F0F4B" stroke-width="1.98155" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M12.0796 24.2134H16.625" stroke="#4F0F4B" stroke-width="1.98155" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                             {{translatePhrase('pre_paid')}}
                          </span>
                      </div>
                  </div>
                  <div class="row flex-wrap justify-content-center">
                    @if(Cookie::get('countryName')=='Egypt')
                       <div class="col-pay E-WALLET">
                          <div class="pay-card text-center">
                              <div class="icon">
                                  <img src="{{ asset('front-assets/images/ewallet-icon.svg')}}" alt="">
                              </div>
                              <div class="main-title">
                                 {{translatePhrase('pay_method_1')}}
                              </div>
                          </div>
                      </div>
                      @else
                      <div class="col-pay E-WALLET" style="display: none">
                        <div class="pay-card text-center">
                            <div class="icon">
                                <img src="{{ asset('front-assets/images/ewallet-icon.svg')}}" alt="">
                            </div>
                            <div class="main-title">
                               {{translatePhrase('pay_method_1')}}
                            </div>
                        </div>
                    </div>
                    @endif
                      <div class="col-pay mastercard">
                          <div class="pay-card text-center">
                              <div class="icon">
                                  <img src="{{ asset('front-assets/images/mastercard-icon.svg')}}" alt="">
                              </div>
                              <div class="main-title">
                                {{translatePhrase('pay_method_2')}}
                              </div>
                          </div>
                      </div>
                      @if(Cookie::get('countryName')=='Egypt')
                      <div class="col-pay FAWRY">
                          <div class="pay-card text-center">
                              <div class="icon">
                                  <img src="{{ asset('front-assets/images/fawry-icon.svg')}}" alt="">
                              </div>
                              <div class="main-title">
                                {{translatePhrase('pay_method_3')}}
                              </div>
                          </div>
                      </div>
                      @else
                      <div class="col-pay FAWRY" style="display:none;">
                        <div class="pay-card text-center">
                            <div class="icon">
                                <img src="{{ asset('front-assets/images/fawry-icon.svg')}}" alt="">
                            </div>
                            <div class="main-title">
                              {{translatePhrase('pay_method_3')}}
                            </div>
                        </div>
                    </div>
                      @endif
                     {{--   <div class="col-pay JEEL_We">
                          <div class="pay-card text-center">
                              <div class="icon">
                                  <img src="{{ asset('front-assets/images/we-icon.svg')}}" alt="">
                              </div>
                              <div class="main-title">
                                {{translatePhrase('pay_method_4')}}
                              </div>
                          </div>
                      </div>
                       <div class="col-pay JEEL_Etisalat">
                          <div class="pay-card text-center">
                              <div class="icon">
                                  <img src="{{ asset('front-assets/images/etisalat-icon.svg')}}" alt="">
                              </div>
                              <div class="main-title">
                                {{translatePhrase('pay_method_5')}}
                              </div>
                          </div>
                      </div> --}}
                  </div>
              </div>
          </div>
      </section>
      <!--==============================End Pricing Section ==============================-->
      <!--==============================Start Contact Section ==============================-->
      <section class="contact-section mb-section py-section" id="joinsection">
          <div class="container-xl">
              <div class="row">
                  <div class="col-md-6">
                      <div class="title__section">
                          <div class="subhead text-primarydark mb-2"><span> {{translatePhrase('comunicate_with_us')}}</span></div>
                          <div class="head text-primary mb-3">{{translatePhrase('wish_communicate')}}</div>
                          <h4> {{translatePhrase('please_in')}}</h4>
                      </div>
                      <div class="social-links my-4">
                          <ul class="d-flex align-items-center">
                            @if($social->twitter)
                              <li>
                                  <a href="{{$social->twitter}}" target="_blank">
                                      <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 35.7861C28.165 35.7861 36 27.9511 36 18.2861C36 8.62115 28.165 0.786133 18.5 0.786133C8.83502 0.786133 1 8.62115 1 18.2861C1 27.9511 8.83502 35.7861 18.5 35.7861Z" stroke="#88115F" stroke-width="1.5"/>
                                          <path d="M24.2202 15.0508C24.139 14.959 24.0081 14.9359 23.9007 14.9926C23.8339 15.0277 23.7083 15.0739 23.5592 15.1195C23.7473 14.8623 23.8985 14.5743 23.9653 14.3154C23.9942 14.2039 23.952 14.0862 23.8601 14.0197C23.7682 13.9538 23.6458 13.9538 23.5539 14.0197C23.4091 14.1236 22.7102 14.4358 22.2683 14.5369C21.2696 13.6372 20.1074 13.5438 18.8992 14.2693C17.9171 14.859 17.7034 16.0582 17.7451 16.7892C15.4971 16.5666 14.0998 15.3454 13.3132 14.3347C13.2582 14.2638 13.1695 14.2264 13.0861 14.2319C12.9985 14.2385 12.9194 14.2885 12.8745 14.366C12.5026 15.0118 12.3995 15.7257 12.5774 16.4309C12.6747 16.8156 12.8446 17.1547 13.0418 17.4295C12.9472 17.3817 12.8558 17.3218 12.7698 17.2503C12.6907 17.1833 12.5801 17.1707 12.4866 17.2152C12.3936 17.2608 12.3343 17.3575 12.3343 17.4636C12.3343 18.6744 13.0706 19.4823 13.7583 19.9044C13.6472 19.8907 13.5312 19.8654 13.4142 19.8286C13.3138 19.7972 13.2048 19.8286 13.1353 19.9099C13.0658 19.9907 13.0493 20.1061 13.0926 20.2045C13.4789 21.0833 14.2109 21.6879 15.1166 21.9072C14.3258 22.3848 13.2673 22.6189 12.298 22.504C12.1724 22.4859 12.0527 22.5678 12.0132 22.692C11.9736 22.8162 12.0255 22.9525 12.1361 23.0163C13.6066 23.8654 14.936 24.1688 16.0849 24.1688C17.7568 24.1688 19.0472 23.5269 19.8327 22.9899C21.9503 21.5444 23.2701 18.9492 23.0863 16.6271C23.4256 16.3693 23.9333 15.8934 24.248 15.3817C24.3132 15.2783 24.3014 15.142 24.2202 15.0508Z" fill="#88115F"/>
                                      </svg>

                                  </a>
                              </li>
                              @endif
                              @if($social->linkedin)
                              <li>
                                  <a href="{{$social->linkedin}}" target="_blank">
                                      <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 35.7861C28.165 35.7861 36 27.9511 36 18.2861C36 8.62115 28.165 0.786133 18.5 0.786133C8.83502 0.786133 1 8.62115 1 18.2861C1 27.9511 8.83502 35.7861 18.5 35.7861Z" stroke="#88115F" stroke-width="1.5"/>
                                          <path d="M14.4835 14.7532C15.3029 14.7532 15.9671 14.089 15.9671 13.2697C15.9671 12.4503 15.3029 11.7861 14.4835 11.7861C13.6642 11.7861 13 12.4503 13 13.2697C13 14.089 13.6642 14.7532 14.4835 14.7532Z" fill="#88115F"/>
                                          <path d="M15.7198 15.7441H13.2473C13.1108 15.7441 13 15.8549 13 15.9914V23.4091C13 23.5456 13.1108 23.6564 13.2473 23.6564H15.7198C15.8563 23.6564 15.9671 23.5456 15.9671 23.4091V15.9914C15.9671 15.8549 15.8563 15.7441 15.7198 15.7441Z" fill="#88115F"/>
                                          <path d="M23.088 15.333C22.0313 14.971 20.7094 15.289 19.9167 15.8592C19.8895 15.7529 19.7926 15.6737 19.6774 15.6737H17.2048C17.0683 15.6737 16.9575 15.7845 16.9575 15.921V23.3387C16.9575 23.4752 17.0683 23.586 17.2048 23.586H19.6774C19.8138 23.586 19.9246 23.4752 19.9246 23.3387V18.0079C20.3242 17.6637 20.839 17.5539 21.2603 17.7329C21.6688 17.9055 21.9027 18.3268 21.9027 18.8881V23.3387C21.9027 23.4752 22.0135 23.586 22.1499 23.586H24.6225C24.759 23.586 24.8698 23.4752 24.8698 23.3387V18.3901C24.8416 16.3582 23.8857 15.606 23.088 15.333Z" fill="#88115F"/>
                                      </svg>


                                  </a>
                              </li>
                              @endif
                              @if($social->gmail)
                              <li>
                                  <a href="{{$social->gmail}}" target="_blank">
                                      <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 35.7861C28.165 35.7861 36 27.9511 36 18.2861C36 8.62115 28.165 0.786133 18.5 0.786133C8.83502 0.786133 1 8.62115 1 18.2861C1 27.9511 8.83502 35.7861 18.5 35.7861Z" stroke="#88115F" stroke-width="1.5"/>
                                          <path d="M11.2211 25.3001H13.9027V18.7875L10.0718 15.9143V24.1508C10.0718 24.7867 10.587 25.3001 11.2211 25.3001Z" fill="#88115F"/>
                                          <path d="M23.0972 25.3001H25.7788C26.4148 25.3001 26.9281 24.7848 26.9281 24.1508V15.9143L23.0972 18.7875" fill="#88115F"/>
                                          <path d="M23.0972 13.8073V18.7875L26.9281 15.9143V14.382C26.9281 12.9607 25.3057 12.1504 24.1698 13.0028" fill="#88115F"/>
                                          <path d="M13.9033 18.7873V13.8071L18.5004 17.255L23.0976 13.8071V18.7873L18.5004 22.2352" fill="#88115F"/>
                                          <path d="M10.0718 14.382V15.9143L13.9027 18.7875V13.8073L12.83 13.0028C11.6923 12.1504 10.0718 12.9607 10.0718 14.382Z" fill="#88115F"/>
                                      </svg>

                                  </a>
                              </li>
                              @endif
                              @if($social->whatsapp)
                              <li>
                                  <a href="{{$social->whatsapp}}" target="_blank">
                                      <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 35.7861C28.165 35.7861 36 27.9511 36 18.2861C36 8.62115 28.165 0.786133 18.5 0.786133C8.83502 0.786133 1 8.62115 1 18.2861C1 27.9511 8.83502 35.7861 18.5 35.7861Z" stroke="#88115F" stroke-width="1.5"/>
                                          <path d="M10.4077 26.3849L11.5699 22.0676C10.6326 20.3858 10.3348 18.4233 10.7312 16.5401C11.1275 14.657 12.1914 12.9796 13.7276 11.8158C15.2637 10.6519 17.1691 10.0796 19.0942 10.204C21.0192 10.3283 22.8347 11.1409 24.2076 12.4927C25.5804 13.8444 26.4185 15.6447 26.5681 17.563C26.7177 19.4814 26.1686 21.3892 25.0218 22.9364C23.8749 24.4836 22.2071 25.5664 20.3245 25.986C18.4419 26.4057 16.4707 26.1341 14.7726 25.2211L10.4077 26.3849ZM14.9831 23.6055L15.253 23.7653C16.483 24.4924 17.9195 24.7934 19.3388 24.6211C20.7581 24.4489 22.0805 23.8132 23.0997 22.8131C24.119 21.813 24.778 20.5046 24.974 19.092C25.17 17.6793 24.8919 16.2416 24.1832 15.003C23.4745 13.7644 22.3749 12.7944 21.0558 12.2442C19.7368 11.6941 18.2723 11.5946 16.8906 11.9613C15.5089 12.328 14.2876 13.1403 13.417 14.2716C12.5465 15.4029 12.0756 16.7897 12.0777 18.2158C12.0766 19.3983 12.4044 20.5579 13.0248 21.5656L13.1941 21.844L12.5444 24.2536L14.9831 23.6055Z" fill="#88115F"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5347 19.3244C21.3765 19.1971 21.1912 19.1074 20.993 19.0624C20.7948 19.0173 20.5888 19.0179 20.3909 19.0642C20.0935 19.1875 19.9013 19.653 19.7092 19.8857C19.6686 19.9415 19.6091 19.9806 19.5417 19.9958C19.4743 20.0109 19.4037 20.001 19.3431 19.9678C18.2544 19.5425 17.3417 18.7625 16.7535 17.7544C16.7033 17.6915 16.6796 17.6117 16.6873 17.5317C16.6949 17.4516 16.7334 17.3777 16.7947 17.3255C17.009 17.1138 17.1664 16.8517 17.2522 16.5633C17.2713 16.2452 17.1982 15.9284 17.0417 15.6506C16.9208 15.2611 16.6906 14.9143 16.3783 14.6511C16.2173 14.5789 16.0387 14.5546 15.8641 14.5814C15.6896 14.6081 15.5265 14.6846 15.3946 14.8017C15.1656 14.9988 14.9838 15.2446 14.8627 15.521C14.7415 15.7975 14.6841 16.0975 14.6946 16.399C14.6953 16.5683 14.7168 16.7369 14.7586 16.901C14.8649 17.2953 15.0283 17.672 15.2436 18.0191C15.399 18.2851 15.5685 18.5425 15.7515 18.7904C16.3461 19.6046 17.0935 20.2958 17.9522 20.8258C18.3832 21.0952 18.8437 21.3141 19.3248 21.4784C19.8246 21.7044 20.3764 21.7912 20.9216 21.7294C21.2323 21.6825 21.5266 21.5602 21.7787 21.3732C22.0308 21.1862 22.233 20.9402 22.3675 20.657C22.4464 20.4859 22.4704 20.2946 22.4361 20.1093C22.3537 19.7305 21.8459 19.5069 21.5347 19.3244Z" fill="#88115F"/>
                                      </svg>


                                  </a>
                              </li>
                              @endif
                              @if($social->facebook)
                              <li>
                                  <a href="{{$social->facebook}}" target="_blank">
                                      <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M18.5 35.7861C28.165 35.7861 36 27.9511 36 18.2861C36 8.62115 28.165 0.786133 18.5 0.786133C8.83502 0.786133 1 8.62115 1 18.2861C1 27.9511 8.83502 35.7861 18.5 35.7861Z" stroke="#88115F" stroke-width="1.5"/>
                                          <path d="M20.0932 13.8064H21.7016C21.8495 13.8064 21.9696 13.6933 21.9696 13.5538V12.0382C21.9696 11.8988 21.8495 11.7856 21.7016 11.7856H20.0932C18.4677 11.7856 17.1445 13.032 17.1445 14.5642V16.3324H15.2681C15.1201 16.3324 15 16.4456 15 16.585V18.1006C15 18.24 15.1201 18.3532 15.2681 18.3532H17.1445V23.6577C17.1445 23.7972 17.2646 23.9103 17.4126 23.9103H19.0209C19.1689 23.9103 19.289 23.7972 19.289 23.6577V18.3532H21.1655C21.2807 18.3532 21.3831 18.2835 21.4201 18.1804L21.9562 16.6648C21.9836 16.588 21.9696 16.5032 21.9192 16.437C21.8683 16.3713 21.7879 16.3324 21.7016 16.3324H19.289V14.5642C19.289 14.1464 19.6498 13.8064 20.0932 13.8064Z" fill="#88115F" stroke="#88115F"/>
                                      </svg>


                                  </a>
                              </li>
                              @endif
                          </ul>

                      </div>
                      <form class="row form-contact"  id="contactForm">
                        @csrf
                          <div class="col-sm-6 mb-3">
                              <label class="form-label"> {{translatePhrase('name')}} </label>
                              <input type="text" name="name" id="name" class="form-control" placeholder="{{translatePhrase('enter_name')}}">
                          </div>
                          <div class="col-sm-6 mb-3">
                              <label class="form-label">{{translatePhrase('email')}} </label>
                              <input type="email" name="email" id="email" class="form-control" placeholder=" example@gmail.com ">
                          </div>
                          <div class="col-sm-6 mb-3">
                              <label class="form-label">{{translatePhrase('phone')}}</label>
                              <div class="input-group tel mb-3">
                                  <input type="phone" id="phone" name="phone" class="form-control" placeholder=" 0123456789 ">

                                  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">+02</button>
                                  <ul class="dropdown-menu">
                                      <li class="dropdown-item">+02</li>
                                      <li class="dropdown-item">+02</li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-sm-6 mb-3">
                              <label class="form-label"> {{translatePhrase('reason')}}</label>
                              <select class="form-select" required name="reason" id="reason">
                                  <option value="" disabled="disabled" selected="selected"{{translatePhrase('enter_name')}}</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                              </select>
                          </div>
                          <div class="col-12 mb-3">
                              <label class="form-label"> {{translatePhrase('write_msg')}}  </label>
                              <textarea class="form-control" placeholder=" {{translatePhrase('write_msg_here')}}" rows="7"  name="msg" id="msg"></textarea>
                          </div>
                          <div class="col-12 mb-3">
                              <button class="btn btn-primary w-100" onclick="send_contact(event)">  {{translatePhrase('send_msg')}} </button>
                          </div>
                      </form>
                  </div>
                  <div class="col-md-6">
                      <div class="contact-info d-flex justify-content-center align-items-center">
                          <div class="content">
                              <h2 class="mb-5">{{translatePhrase('comunicate_info')}}</h2>
                              <ul>
                                @if($social->facebook!='')
                                  <li>
                                      <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M22 43.2085C33.598 43.2085 43 33.8065 43 22.2085C43 10.6105 33.598 1.2085 22 1.2085C10.402 1.2085 1 10.6105 1 22.2085C1 33.8065 10.402 43.2085 22 43.2085Z" fill="white" stroke="#88115F" stroke-width="1.2"/>
                                          <path d="M23.9116 16.8329H25.8417C26.0193 16.8329 26.1634 16.6971 26.1634 16.5298V14.7111C26.1634 14.5438 26.0193 14.408 25.8417 14.408H23.9116C21.961 14.408 20.3732 15.9035 20.3732 17.7423V19.8641H18.1215C17.9439 19.8641 17.7998 19.9999 17.7998 20.1672V21.9859C17.7998 22.1532 17.9439 22.289 18.1215 22.289H20.3732V28.6545C20.3732 28.8218 20.5173 28.9576 20.6949 28.9576H22.6249C22.8025 28.9576 22.9466 28.8218 22.9466 28.6545V22.289H25.1983C25.3367 22.289 25.4595 22.2054 25.5039 22.0817L26.1473 20.263C26.1801 20.1708 26.1634 20.069 26.1029 19.9896C26.0418 19.9108 25.9453 19.8641 25.8417 19.8641H22.9466V17.7423C22.9466 17.2409 23.3796 16.8329 23.9116 16.8329Z" fill="#88115F" stroke="#88115F" stroke-width="1.2"/>
                                      </svg>
                                      <span>
                                        {{$social->facebook}}
                                       {{--    جيل facebook/ Jeel --}}
                                      </span>
                                  </li>
                                  @endif
                                  @if($social->whatsapp!='')
                                  <li>
                                      <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M22 43.2085C33.598 43.2085 43 33.8065 43 22.2085C43 10.6105 33.598 1.2085 22 1.2085C10.402 1.2085 1 10.6105 1 22.2085C1 33.8065 10.402 43.2085 22 43.2085Z" fill="white" stroke="#88115F" stroke-width="1.2"/>
                                          <path d="M12.2891 31.9271L13.6836 26.7464C12.5589 24.7282 12.2016 22.3732 12.6772 20.1135C13.1528 17.8537 14.4295 15.8409 16.2729 14.4442C18.1163 13.0476 20.4028 12.3609 22.7128 12.5101C25.0229 12.6593 27.2015 13.6344 28.8489 15.2565C30.4963 16.8786 31.5021 19.0389 31.6815 21.3409C31.861 23.643 31.2022 25.9324 29.8259 27.789C28.4497 29.6456 26.4484 30.9449 24.1892 31.4485C21.9301 31.9521 19.5646 31.6262 17.5269 30.5306L12.2891 31.9271ZM17.7795 28.5919L18.1034 28.7836C19.5794 29.6562 21.3032 30.0173 23.0064 29.8106C24.7096 29.604 26.2964 28.8411 27.5195 27.641C28.7426 26.4409 29.5334 24.8709 29.7686 23.1756C30.0037 21.4804 29.6701 19.7552 28.8197 18.2689C27.9692 16.7826 26.6497 15.6186 25.0668 14.9584C23.4839 14.2981 21.7265 14.1787 20.0685 14.6188C18.4104 15.0588 16.9449 16.0336 15.9002 17.3912C14.8556 18.7487 14.2905 20.4129 14.2931 22.1242C14.2917 23.5432 14.6851 24.9348 15.4296 26.144L15.6327 26.478L14.8531 29.3696L17.7795 28.5919Z" fill="#88115F"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M25.6413 23.4545C25.4514 23.3017 25.229 23.1942 24.9912 23.1401C24.7533 23.086 24.5062 23.0868 24.2687 23.1424C23.9118 23.2902 23.6812 23.8488 23.4506 24.1281C23.402 24.1951 23.3305 24.242 23.2497 24.2602C23.1688 24.2783 23.0841 24.2664 23.0114 24.2267C21.7048 23.7163 20.6097 22.7802 19.9038 21.5706C19.8436 21.4951 19.8151 21.3993 19.8243 21.3033C19.8335 21.2073 19.8797 21.1185 19.9532 21.0558C20.2104 20.8019 20.3992 20.4873 20.5023 20.1413C20.5251 19.7596 20.4375 19.3794 20.2497 19.046C20.1045 18.5786 19.8283 18.1624 19.4536 17.8466C19.2603 17.7599 19.046 17.7309 18.8366 17.7629C18.6271 17.795 18.4314 17.8868 18.2731 18.0273C17.9983 18.2638 17.7802 18.5588 17.6348 18.8905C17.4894 19.2223 17.4205 19.5823 17.4331 19.9441C17.434 20.1473 17.4598 20.3496 17.51 20.5465C17.6375 21.0196 17.8335 21.4716 18.092 21.8883C18.2784 22.2074 18.4818 22.5163 18.7014 22.8138C19.4149 23.7908 20.3118 24.6203 21.3423 25.2563C21.8594 25.5795 22.4121 25.8422 22.9894 26.0394C23.5891 26.3106 24.2513 26.4147 24.9056 26.3406C25.2784 26.2843 25.6316 26.1375 25.9341 25.9131C26.2366 25.6887 26.4792 25.3936 26.6405 25.0536C26.7353 24.8483 26.7641 24.6188 26.7229 24.3965C26.6241 23.9419 26.0146 23.6736 25.6413 23.4545Z" fill="#88115F"/>
                                      </svg>

                                      <span>
                                        {{$social->whatsapp}}
                                         {{--  Whatsapp / +20 1023456789 --}}
                                      </span>
                                  </li>
                                  @endif
                                  @if($social->gmail!='')
                                  <li>
                                      <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M22 43.2085C33.598 43.2085 43 33.8065 43 22.2085C43 10.6105 33.598 1.2085 22 1.2085C10.402 1.2085 1 10.6105 1 22.2085C1 33.8065 10.402 43.2085 22 43.2085Z" fill="white" stroke="#88115F" stroke-width="1.2"/>
                                          <path d="M13.2654 30.6252H16.4833V22.8101L11.8862 19.3623V29.2461C11.8862 30.0092 12.5045 30.6252 13.2654 30.6252Z" fill="#88115F"/>
                                          <path d="M27.5166 30.6252H30.7346C31.4977 30.6252 32.1137 30.0069 32.1137 29.2461V19.3623L27.5166 22.8101" fill="#88115F"/>
                                          <path d="M27.5166 16.834V22.8102L32.1137 19.3624V17.5235C32.1137 15.818 30.1668 14.8457 28.8038 15.8686" fill="#88115F"/>
                                          <path d="M16.4839 22.81V16.8337L22.0004 20.9711L27.517 16.8337V22.81L22.0004 26.9474" fill="#88115F"/>
                                          <path d="M11.8862 17.5235V19.3624L16.4833 22.8102V16.834L15.1962 15.8686C13.8308 14.8457 11.8862 15.818 11.8862 17.5235Z" fill="#88115F"/>
                                      </svg>

                                      <span>
                                        {{$social->gmail}}
                                         {{--  jeelapp@gmal.com --}}
                                      </span>
                                  </li>
                                  @endif
                                  @if($social->linkedin!='')
                                  <li>
                                      <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M22 43.2085C33.598 43.2085 43 33.8065 43 22.2085C43 10.6105 33.598 1.2085 22 1.2085C10.402 1.2085 1 10.6105 1 22.2085C1 33.8065 10.402 43.2085 22 43.2085Z" fill="white" stroke="#88115F" stroke-width="1.2"/>
                                          <path d="M17.1802 17.969C18.1634 17.969 18.9604 17.1719 18.9604 16.1887C18.9604 15.2055 18.1634 14.4084 17.1802 14.4084C16.197 14.4084 15.3999 15.2055 15.3999 16.1887C15.3999 17.1719 16.197 17.969 17.1802 17.969Z" fill="#88115F"/>
                                          <path d="M18.6637 19.158H15.6966C15.5328 19.158 15.3999 19.2909 15.3999 19.4547V28.356C15.3999 28.5198 15.5328 28.6527 15.6966 28.6527H18.6637C18.8275 28.6527 18.9604 28.5198 18.9604 28.356V19.4547C18.9604 19.2909 18.8275 19.158 18.6637 19.158Z" fill="#88115F"/>
                                          <path d="M27.5056 18.6648C26.2374 18.2304 24.6512 18.612 23.7 19.2962C23.6673 19.1686 23.551 19.0737 23.4127 19.0737H20.4456C20.2819 19.0737 20.1489 19.2066 20.1489 19.3704V28.2717C20.1489 28.4355 20.2819 28.5684 20.4456 28.5684H23.4127C23.5765 28.5684 23.7094 28.4355 23.7094 28.2717V21.8746C24.1889 21.4616 24.8067 21.3299 25.3123 21.5447C25.8024 21.7518 26.0831 22.2574 26.0831 22.9309V28.2717C26.0831 28.4355 26.2161 28.5684 26.3798 28.5684H29.3469C29.5107 28.5684 29.6436 28.4355 29.6436 28.2717V22.3333C29.6098 19.895 28.4627 18.9924 27.5056 18.6648Z" fill="#88115F"/>
                                      </svg>

                                      <span>
                                        {{$social->linkedin}}
                                         {{--  linkedIn/ Thejeelapp --}}
                                      </span>
                                  </li>
                                  @endif
                                  @if($social->twitter!='')
                                  <li>
                                      <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M22 43.2085C33.598 43.2085 43 33.8065 43 22.2085C43 10.6105 33.598 1.2085 22 1.2085C10.402 1.2085 1 10.6105 1 22.2085C1 33.8065 10.402 43.2085 22 43.2085Z" fill="white" stroke="#88115F" stroke-width="1.2"/>
                                          <path d="M28.8644 18.3262C28.767 18.2161 28.6099 18.1884 28.481 18.2563C28.4008 18.2985 28.2502 18.3539 28.0713 18.4086C28.297 18.1 28.4784 17.7544 28.5586 17.4438C28.5932 17.3099 28.5426 17.1687 28.4323 17.0889C28.322 17.0098 28.1751 17.0098 28.0649 17.0889C27.8911 17.2136 27.0524 17.5882 26.5221 17.7095C25.3237 16.6299 23.9291 16.5178 22.4793 17.3884C21.3007 18.096 21.0443 19.5351 21.0943 20.4123C18.3967 20.1452 16.7199 18.6797 15.7761 17.4668C15.71 17.3818 15.6036 17.3369 15.5036 17.3435C15.3984 17.3514 15.3035 17.4114 15.2496 17.5044C14.8034 18.2794 14.6796 19.1361 14.8931 19.9823C15.0098 20.444 15.2137 20.8509 15.4503 21.1807C15.3369 21.1233 15.2272 21.0514 15.124 20.9656C15.0291 20.8852 14.8963 20.87 14.7841 20.9234C14.6726 20.9782 14.6014 21.0943 14.6014 21.2215C14.6014 22.6745 15.485 23.644 16.3102 24.1505C16.1768 24.134 16.0377 24.1037 15.8973 24.0595C15.7767 24.0219 15.6459 24.0595 15.5626 24.1571C15.4792 24.2541 15.4593 24.3926 15.5113 24.5106C15.9749 25.5652 16.8533 26.2907 17.9402 26.5538C16.9912 27.127 15.7209 27.4079 14.5578 27.2701C14.4071 27.2483 14.2635 27.3466 14.216 27.4956C14.1686 27.6447 14.2308 27.8083 14.3635 27.8848C16.1281 28.9037 17.7234 29.2678 19.102 29.2678C21.1084 29.2678 22.6569 28.4975 23.5995 27.8531C26.1406 26.1186 27.7244 23.0043 27.5038 20.2177C27.911 19.9084 28.5201 19.3373 28.8978 18.7232C28.976 18.5993 28.9619 18.4357 28.8644 18.3262Z" fill="#88115F"/>
                                      </svg>

                                      <span>
                                        {{$social->twitter}}
                                          {{-- X / thejeelapp --}}
                                      </span>
                                  </li>
                                  @endif
                              </ul>


                          </div>
                      </div>
                  </div>

              </div>
          </div>



      </section>
      <script type="text/javascript">
        function send_contact(e)
        {e.preventDefault();
            var Routeurl="{{url(app()->getLocale() .'/send_contact')}}";
            console.log(Routeurl)
            var Formdata=$('#contactForm').serialize();
            console.log(Formdata)
          //  debugger;
            $.ajax({
                    url: Routeurl, // Changed to $(this)
                    type: 'POST',
                    data: Formdata,
                    success: function (response) {
                      Swal.fire({
                        title: "Good job!",
                        text: "You clicked the button!",
                        icon: "success"
                      });
                    },
                    error: function (xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText);
                    }
        });
        return false;

        }
    </script>
      <!--==============================End Contact Section ==============================-->
      @endsection
