<!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/materialdesignicons.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/node-waves/node-waves.css')) }}" />
<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/core.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/theme-default.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/css/demo.css')) }}" />
<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')) }}" />
<style>
  .btn-all {
    width: auto;
    height: 40px;
    border-radius: 10px;
    background-color: #fafbfd;
    font-family: Almarai;
    font-size: 21px;
    font-weight: 400;
    line-height: 26.78px;
    text-align: center;
    border: 0.5px solid #d7d8d9;
}
.container {
    background-color: #ffffff;
    border-radius: 20px;
}
.welcome {
    height: 80px;
    border-radius: 10px;
    text-align: end;
    padding: 15px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 4px -1px;
}
.welcome p {
    font-family: Almarai;
    font-size: 38px;
    font-weight: 700;
    line-height: 44.64px;
    text-align: right;
    /* padding-right: 90px; */
}

</style>
<!-- Vendor Styles -->
@yield('vendor-style')


<!-- Page Styles -->
@yield('page-style')
