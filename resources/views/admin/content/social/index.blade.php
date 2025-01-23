@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Social Links')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>

</script>
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Socail Links</span>
</h4>





<div class="row">
  <!-- Form controls -->
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Social Links</h5>
      <form name="myForm" id="myForm" method="POST" action="{{ url(app()->getLocale() .'/dashboard/social/add') }}" >
        @csrf
      <div class="card-body demo-vertical-spacing demo-only-element">
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook" value="{{$social->facebook}}" />
          <label for="facebook">Facebook</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram" value="{{$social->instagram}}" />
          <label for="twitter">Instagram</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Whatsapp" value="{{$social->whatsapp}}" />
          <label for="whatsapp">Whatsapp</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="tiktok" name="tiktok" placeholder="Tiktok" value="{{$social->tiktok}}" />
          <label for="tiktok">Tiktok</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Linkedin"  value="{{$social->linkedin}}"/>
          <label for="linkedin">Linkedin</label>
        </div>

               <button class="btn btn-primary d-grid w-100">Save</button>

      </div>
    </form>
    </div>
  </div>







</div>
@endsection

