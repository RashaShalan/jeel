@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Footer - UI elements')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">UI elements /</span> Footer
</h4>

<!-- Basic footer -->
<section id="basic-footer">
  <h5 class="pb-1 mt-5 mb-4">Basic Footer</h5>

  <footer class="footer bg-lighter">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-bold">{{config('variables.templateName')}}</a> ©
      </div>
      <div class="d-flex flex-column flex-sm-row">
        <a href="{{ config('variables.licenseUrl') }}" class="footer-link me-4" target="_blank">License</a>
        <a href="javascript:void(0)" class="footer-link me-4">Help</a>
        <a href="javascript:void(0)" class="footer-link me-4">Contact</a>
        <a href="javascript:void(0)" class="footer-link">Terms &amp; Conditions</a>
      </div>
    </div>
  </footer>
</section>
<!--/ Basic footer -->
<hr class="container-m-nx border-light my-5" />

<!-- Footer with components -->
<section id="component-footer">
  <h5 class="pb-1 mb-4">Footer with Elements</h5>

  <footer class="footer bg-lighter">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-bold">{{config('variables.templateName')}}</a> ©
      </div>
      <div class="d-flex flex-column flex-sm-row gap-3">
        <div class="form-check footer-link mb-0 mt-1">
          <input class="form-check-input" type="checkbox" value="" id="customCheck2" checked />
          <label class="form-check-label" for="customCheck2">
            Show
          </label>
        </div>
        <div class="dropdown dropup footer-link">
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle h-100" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Currency
          </button>
          <div class="dropdown-menu dropdown-menu-end">
            <a class="dropdown-item" href="javascript:void(0);"><i class='mdi mdi-currency-usd me-2'></i>USD</a>
            <a class="dropdown-item" href="javascript:void(0);"><i class='mdi mdi-currency-eur me-2'></i>Euro</a>
            <a class="dropdown-item" href="javascript:void(0);"><i class='mdi mdi-currency-gbp me-2'></i>Pound</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void(0);"><i class='mdi mdi-currency-btc me-2'></i>Bitcoin</a>
          </div>
        </div>
        <a href="javascript:void(0)" class="btn btn-sm btn-outline-danger"><i class='mdi mdi-logout me-1'></i>Logout</a>
      </div>
    </div>
  </footer>
</section>
<!--/ Footer with components -->
@endsection
