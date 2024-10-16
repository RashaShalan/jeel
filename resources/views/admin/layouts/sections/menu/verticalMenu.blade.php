<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- ! Hide app brand if navbar-full -->
  <div class="app-brand demo">
    <a href="{{url('/')}}" class="app-brand-link">
      <span class="app-brand-logo demo me-1">
        @include('admin._partials.macros',["height"=>20])
      </span>
      <span class="app-brand-text demo menu-text fw-semibold ms-2">{{config('variables.templateName')}}</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">


    {{-- main menu --}}
    <li class="menu-item ">
      <a href="{{ url(app()->getLocale() .'/dashboard') }}" class= "menu-link" >

        <i class="menu-icon tf-icons mdi mdi-home-outline"></i>

        <div>Dashboard</div>

      </a>


    </li>
    <li class="menu-item ">
      <a href="{{ url(app()->getLocale() .'/dashboard') }}" class= "menu-link" >

        <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>

        <div>Slider</div>

      </a>


    </li>
    <li class="menu-item ">
      <a href="{{ url(app()->getLocale() .'/dashboard') }}" class= "menu-link" >

        <i class="menu-icon tf-icons mdi mdi-account-outline"></i>

        <div>Social</div>

      </a>


    </li>
    <li class="menu-item ">
      <a href="{{ url(app()->getLocale() .'/dashboard') }}" class= "menu-link" >

        <i class="menu-icon tf-icons mdi mdi-message-outline"></i>

        <div>Contact us messages</div>

      </a>


    </li>
  </ul>

</aside>
