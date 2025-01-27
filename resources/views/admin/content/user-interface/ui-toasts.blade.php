@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Toasts - UI elements')

@section('page-script')
<script src="{{asset('assets/js/ui-toasts.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Toasts</h4>


<!-- Toast with Placements -->
<div class="bs-toast toast toast-placement-ex m-2" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="2000">
  <div class="toast-header">
    <i class="mdi mdi-home me-2"></i>
    <div class="me-auto fw-medium">Bootstrap</div>
    <small class="text-muted">11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
<!-- Toast with Placements -->

<!-- Bootstrap Toasts with Placement -->
<div class="card mb-4">
  <h5 class="card-header">Bootstrap Toasts Example With Placement</h5>
  <div class="card-body">
    <div class="row gx-3 gy-2 align-items-center gap-3 gap-md-0">
      <div class="col-md-3">
        <div class="form-floating form-floating-outline">
          <select id="selectTypeOpt" class="form-select color-dropdown">
            <option value="text-primary" selected>Primary</option>
            <option value="text-secondary">Secondary</option>
            <option value="text-success">Success</option>
            <option value="text-danger">Danger</option>
            <option value="text-warning">Warning</option>
            <option value="text-info">Info</option>
            <option value="text-dark">Dark</option>
          </select>
          <label for="selectTypeOpt">Type</label>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-floating form-floating-outline">
          <select class="form-select placement-dropdown" id="selectPlacement">
            <option value="top-0 start-0">Top left</option>
            <option value="top-0 start-50 translate-middle-x">Top center</option>
            <option value="top-0 end-0">Top right</option>
            <option value="top-50 start-0 translate-middle-y">Middle left</option>
            <option value="top-50 start-50 translate-middle">Middle center</option>
            <option value="top-50 end-0 translate-middle-y">Middle right</option>
            <option value="bottom-0 start-0">Bottom left</option>
            <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
            <option value="bottom-0 end-0">Bottom right</option>
          </select>
          <label for="selectPlacement">Placement</label>
        </div>
      </div>
      <div class="col-md-3">
        <button id="showToastPlacement" class="btn btn-primary d-block">Show Toast</button>
      </div>
    </div>
  </div>
</div>
<!--/ Bootstrap Toasts with Placement -->

<!-- Bootstrap Toasts Styles -->
<div class="card mb-4">
  <h5 class="card-header">Bootstrap Toasts Styles</h5>
  <div class="row g-0">
    <div class="col-md-6 p-4">
      <div class="text-light small fw-medium mb-3">Default</div>
      <div class="toast-container position-relative">

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-home me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-bootstrap text-primary me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-code-string text-secondary me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-check-circle text-success me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-alert-circle text-danger me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-alert text-warning me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-information text-info me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-brightness-6 text-dark me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 ui-bg-overlay-container p-4">
      <div class="ui-bg-overlay bg-dark rounded-end-bottom"></div>
      <div class="text-white small fw-medium mb-3">Translucent</div>

      <div class="toast-container position-relative">
        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-home me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-bootstrap text-primary me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-code-string text-secondary me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-check-circle text-success me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-alert-circle text-danger me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-alert text-warning me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-information text-info me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class="mdi mdi-brightness-6 text-dark me-2"></i>
            <div class="me-auto fw-medium">Bootstrap</div>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Bootstrap Toasts Styles -->
@endsection
