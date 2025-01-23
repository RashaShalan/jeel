@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Add slider')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
<script>
  $().ready(function(){//imgEnPreview
    const photoInp = $("#image");
            let file;
            photoInp.change(function (e) {
                file = this.files[0];
                console.log(file)
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        $("#imgPreview")
                            .attr("src", event.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            });

            const photoEn = $("#image_en");
            let file;
            photoEn.change(function (e) {
                file = this.files[0];
                console.log(file)
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        $("#imgEnPreview")
                            .attr("src", event.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            });

  });
</script>
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Add /</span> New Slider
</h4>


<style>
  img {
           max-width: 300px;
           max-height: 300px;
           min-width: 300px;
           min-height: 300px;
       }
</style>


<div class="row">
  <!-- Form controls -->
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">New Slider</h5>
      <form name="myForm" id="myForm" method="POST" action="{{ url(app()->getLocale() .'/dashboard/slider/add') }}" enctype="multipart/form-data">
        @csrf
      <div class="card-body demo-vertical-spacing demo-only-element">
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="title_ar" name="title_ar" placeholder="Title in Arabic" />
          <label for="title_ar">Title in Arabic</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Title in English" />
          <label for="title_en">Title in English</label>
        </div>

        <div class="form-floating form-floating-outline mb-4">
          <textarea class="form-control h-px-100" id="desc_ar" name="desc_ar" placeholder="Description in Arabic..."></textarea>
          <label for="desc_ar">Description in Arabic</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <textarea class="form-control h-px-100" id="desc_en" name="desc_en" placeholder="Description in English..."></textarea>
          <label for="desc_en">Description in English</label>
        </div>
{{--
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="subscribe_link" name="subscribe_link" placeholder="Subscribe Link" />
          <label for="subscribe_link">Subscribe link</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <select class="form-select" id="subscribe_link_type" name="subscribe_link_type" aria-label="Link type">
            <option value="inner">Inner Link</option>
            <option value="outer">Outer link</option>
          </select>
          <label for="subscribe_link_type">Link type</label>
        </div>

        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="download_link" name="download_link" placeholder="Download Link" />
          <label for="download_link">Download link</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <select class="form-select" id="download_link_type" name="download_link_type" aria-label="Link type">
            <option value="inner">Inner Link</option>
            <option value="outer">Outer link</option>
          </select>
          <label for="download_link_type">Link type</label>
        </div> --}}
        <div class="mb-3">
          <label for="formFile" class="form-label">Image Ar</label>
          <input class="form-control" name="image" type="file" id="image">
        </div>
        <div id="preview">
          <img src="" id="imgPreview" />
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Image En</label>
          <input class="form-control" name="image_en" type="file" id="image_en">
        </div>
        <div id="preview">
          <img src="" id="imgEnPreview" />
        </div>
        <button class="btn btn-primary d-grid w-100">Save</button>

      </div>
    </form>
    </div>
  </div>







</div>
@endsection

