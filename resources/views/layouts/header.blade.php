   <!--==============================Start Header ==============================-->
   <header class="inner">
    <div class="container-xl">

        <div class="wrapper">
            <div class="logo d-inline-flex align-items-center">

                <a href="#" class="menu-icon mx-2"><svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path class="heroicon-ui" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg></a>
                <a href="{{url(app()->getLocale().'/')}}">
                    <img src="{{ asset('front-assets/images/logo.svg')}}" alt="">
                </a>
            </div>
            <div class="menu">
                <div class="close-menu text-end p-3">
                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.2253 4.81108C5.83477 4.42056 5.20161 4.42056 4.81108 4.81108C4.42056 5.20161 4.42056 5.83477 4.81108 6.2253L10.5858 12L4.81114 17.7747C4.42062 18.1652 4.42062 18.7984 4.81114 19.1889C5.20167 19.5794 5.83483 19.5794 6.22535 19.1889L12 13.4142L17.7747 19.1889C18.1652 19.5794 18.7984 19.5794 19.1889 19.1889C19.5794 18.7984 19.5794 18.1652 19.1889 17.7747L13.4142 12L19.189 6.2253C19.5795 5.83477 19.5795 5.20161 19.189 4.81108C18.7985 4.42056 18.1653 4.42056 17.7748 4.81108L12 10.5858L6.2253 4.81108Z" fill="currentColor"/>
                    </svg>
                </div>
                <ul>
                    <li><a href="{{url(app()->getLocale().'/Aboutus')}}"> {{translatePhrase('About_jeel')}} </a></li>
                    <li><a href="{{url(app()->getLocale().'/Download')}}">{{ translatePhrase('download') }} </a></li>
                   {{--  <li><a href="{{url(app()->getLocale().'/FAQS')}}">{{ translatePhrase('faq_questions') }}</a></li>
                    <li><a href="{{url(app()->getLocale().'/Jeel-questions')}}"> {{ translatePhrase('jeel_questions') }}</a></li> --}}
                    <li><a href="javascript:void(0)"> {{ translatePhrase('blog') }}</a></li>
                    <li><a href="{{url(app()->getLocale().'/Contact-us')}}"> {{ translatePhrase('contact_us') }}</a></li>
                </ul>
            </div>
            <div class="sub-lang">
                <div class="dropdown change-language">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="lang-ico"> {{__('site.lang')}}</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="{{ url('/ar') }}"><span class="lang-ico"> ع </span> اللغة العربية </a></li>
                        <li class="dropdown-item"><a href="{{ url('/en')  }}"><span class="lang-ico">  En  </span> English</a> </li>
                    </ul>
                </div>
                <button class="btn btn-join"> {{ translatePhrase('joinNow') }}</button>
            </div>
        </div>
    </div>
</header>
