<!DOCTYPE html>
<html class="no-js">

    <head>
        <title>  @yield('title')Jeel App</title>
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


    </body>

</html>
