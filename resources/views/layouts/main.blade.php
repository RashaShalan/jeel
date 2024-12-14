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

    </head>

    <body class="{{__('site.class')}}">
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

    function success(position) {
        console.log(position);
        const { coords } = position;
        console.log('Latitude data: ' + coords.latitude);
        console.log('Longitude data: ' + coords.longitude);

       /* $.get("https://ipinfo.io", function(response) {
          console.log(response);
            console.log(response.city, response.country);
        }, "jsonp");*/
        $.get('http://api.geonames.org/countryCodeJSON?lat='+ coords.latitude+'&lng='+coords.longitude+'&username=rootgeo',function(response)
        {
            console.log(response);
            setCookie('countryName',response.countryName,7);
            setCookie('countryCode',response.countryCode,7);
            $('.col-pay').fadeOut('fast');
            if(response.countryCode=='EG'){
              $('.FAWRY').fadeIn('fast')
              $('.mastercard').fadeIn('fast')
            }else if(response.countryCode=='SA')
            {
              $('.mastercard').fadeIn('fast')
            }else{
              $('.mastercard').fadeIn('fast')
            }


            $.get('https://jeelpay.com/api/getPackagePriceAndPaymentMethodByCountry?Country_Code='+response.countryCode,function(data)
            {
              var payMethod=data.paymentPayingMethods;
              var currency='{{__('site.USD')}}';
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
                  currency='{{__('site.EGP')}}';
                }else  if(payment.monthBasicPriceConverted.currency=='SAR')
                {
                  currency='{{__('site.SAR')}}';
                }
                $('.monthly .price >span').html(payment.monthDiscountPriceConverted.convertedPrice+" "+currency);
                $('.weekly .price >span').html(payment.weekDiscountPriceConverted.convertedPrice+" "+currency);
                $('.annualy .price >span').html(payment.yearDiscountPriceConverted.convertedPrice+" "+currency);
                console.log('=======');

            });

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
          navigator.geolocation.getCurrentPosition(success,error,options);

        })


    </script>

</html>
