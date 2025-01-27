<!DOCTYPE html>
<html class="no-js">

    <head>
        <title>  @yield('title')| Jeel App</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front-assets/images/favicon/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front-assets/images/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front-assets/images/favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{ asset('front-assets/images/favicon/site.webmanifest')}}">
        <link rel="stylesheet" href="{{ asset('front-assets/css/style.css')}}">
        @if(Lang::locale()=='ar')
        <link rel="stylesheet" href="{{ asset('front-assets/css/style-ar.css')}}">
        @endif
          <!-- Meta Pixel Code -->
          <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '2387500561500744');
            fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=2387500561500744&ev=PageView&noscript=1"
            /></noscript>
            <!-- End Meta Pixel Code -->


            <!-- Google Tag Manager -->
              <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-M8V7XLS');</script>
            <!-- End Google Tag Manager -->

        </head>

    <body class="{{__('site.class')}}">
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8V7XLS"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="content">
          @include('layouts/header')

          @yield('content')
        <!--==============================Start Footer Section ==============================-->
        @include('layouts/footer')
        <!--==============================End Footer Section ==============================-->


        <script src="{{ asset('front-assets/js/all.js')}}"></script>
        <script src="{{ asset('front-assets/js/cookiesMange.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </body>
    <script type="text/javascript">

const options = {
        enableHighAccuracy: true, // enable high accuracy
        timeout: 300000, // wait for 5 minutes
    };
    var countryName='EGYPT'; var countryCode='EG';

    function success(position) {
        console.log(position);
        const { coords } = position;
        console.log('Latitude data: ' + coords.latitude);
        console.log('Longitude data: ' + coords.longitude);

      /*  $.get("https://ipinfo.io", function(response) {
          console.log(response);
            console.log(response.city, response.country);
        }, "jsonp"); */

        $.get('http://api.geonames.org/countryCodeJSON?lat='+ coords.latitude+'&lng='+coords.longitude+'&username=rootgeo',function(response)
        {
            console.log(response);
            if(response.countryName)
           {
            countryName=response.countryName;
            countryCode=response.countryCode;
          }
            setCookie('countryName',countryName,7);
            setCookie('countryCode',countryCode,7);
            $('.col-pay').fadeOut('fast');

            if(countryCode=='EG'){
              $('.FAWRY').fadeIn('fast')
              $('.mastercard').fadeIn('fast')
              $('.E-WALLET').fadeIn('fast')

              setCookie('pay1','FAWRY',7);
              setCookie('pay2','mastercard',7);
              setCookie('pay3','E-WALLET',7);

            }else if(countryCode=='SA')
            {
              $('.mastercard').fadeIn('fast')
              setCookie('pay2','mastercard',7);
            }else{
              $('.mastercard').fadeIn('fast')
              setCookie('pay2','mastercard',7);
            }


            $.get('https://jeelpay.com/api/getPackagePriceAndPaymentMethodByCountry?Country_Code='+countryCode,function(data)
            {
              var payMethod=data.paymentPayingMethods;
              var currency='{{translatePhrase('USD')}}';
             /*  $('.col-pay').fadeOut('fast');
              payMethod.forEach(element => {
                console.log(element.name)
                $('.'+element.name).fadeIn('fast')
              }); */

                                    var payment=data.paymentSpecialCountriesOffer;

                console.log(data.paymentPayingMethods)
                console.log('+++++++++++++++++++++++++++++')
                console.log(data.paymentSpecialCountriesOffer)
                console.log('+++++++++++++++++++++++++++++')
                if(payment.monthBasicPriceConverted.currency=='EGP')
                {
                  currency='{{translatePhrase('EGP')}}';
                }else  if(payment.monthBasicPriceConverted.currency=='SAR')
                {
                  currency='{{translatePhrase('SAR')}}';
                }
                setCookie('monthly',payment.monthDiscountPriceConverted.convertedPrice+" "+currency,7);
                setCookie('weekly',payment.weekDiscountPriceConverted.convertedPrice+" "+currency,7);
                setCookie('annualy',payment.yearDiscountPriceConverted.convertedPrice+" "+currency,7);
                $('.monthly .price >span').html(payment.monthDiscountPriceConverted.convertedPrice+" "+currency);
                $('.weekly .price >span').html(payment.weekDiscountPriceConverted.convertedPrice+" "+currency);
                $('.annualy .price >span').html(payment.yearDiscountPriceConverted.convertedPrice+" "+currency);
                console.log('=======');

            });

        }) .fail(function() {


  });
    }
    function getPrices()
    {
         setCookie('countryName',countryName,7);
            setCookie('countryCode',countryCode,7);
            $('.col-pay').fadeOut('fast');

            if(countryCode=='EG'){
              $('.FAWRY').fadeIn('fast')
              $('.mastercard').fadeIn('fast')
              $('.E-WALLET').fadeIn('fast')

              setCookie('pay1','FAWRY',7);
              setCookie('pay2','mastercard',7);
              setCookie('pay3','E-WALLET',7);

            }else if(countryCode=='SA')
            {
              $('.mastercard').fadeIn('fast')
              setCookie('pay2','mastercard',7);
            }else{
              $('.mastercard').fadeIn('fast')
              setCookie('pay2','mastercard',7);
            }


            $.get('https://jeelpay.com/api/getPackagePriceAndPaymentMethodByCountry?Country_Code='+countryCode,function(data)
            {
              var payMethod=data.paymentPayingMethods;
              var currency='{{translatePhrase('USD')}}';
             /*  $('.col-pay').fadeOut('fast');
              payMethod.forEach(element => {
                console.log(element.name)
                $('.'+element.name).fadeIn('fast')
              }); */

                                    var payment=data.paymentSpecialCountriesOffer;

                console.log(data.paymentPayingMethods)
                console.log('+++++++++++++++++++++++++++++')
                console.log(data.paymentSpecialCountriesOffer)
                console.log('+++++++++++++++++++++++++++++')
                if(payment.monthBasicPriceConverted.currency=='EGP')
                {
                  currency='{{translatePhrase('EGP')}}';
                }else  if(payment.monthBasicPriceConverted.currency=='SAR')
                {
                  currency='{{translatePhrase('SAR')}}';
                }
                setCookie('monthly',payment.monthDiscountPriceConverted.convertedPrice+" "+currency,7);
                setCookie('weekly',payment.weekDiscountPriceConverted.convertedPrice+" "+currency,7);
                setCookie('annualy',payment.yearDiscountPriceConverted.convertedPrice+" "+currency,7);
                $('.monthly .price >span').html(payment.monthDiscountPriceConverted.convertedPrice+" "+currency);
                $('.weekly .price >span').html(payment.weekDiscountPriceConverted.convertedPrice+" "+currency);
                $('.annualy .price >span').html(payment.yearDiscountPriceConverted.convertedPrice+" "+currency);
                console.log('=======');

            });
}
    function error(error) {
        console.log(error);
    }
        // Run the getCurrentPosition() method with custom options
      /*  navigator.geolocation.watchPosition(
        success,
        error,
        options
        );*/
        $().ready(function(){

          @if (Cookie::get('annualy') == null)
          getPrices();
          if (navigator.geolocation) {

          navigator.geolocation.getCurrentPosition(success,error,options);
          }
          @endif
        })


    </script>


</html>
