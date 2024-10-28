@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Add slider')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
<script>
  $().ready(function(){
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

  });
</script>
@endsection


@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Edit /</span>  Slider
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
      <h5 class="card-header">Edit Slider</h5>
      <form name="myForm" id="myForm" method="POST" action="{{ url(app()->getLocale() .'/dashboard/slider/add') }}" enctype="multipart/form-data">
        <input type="hidden" name="slider_id" id="slider_id" value="{{$slider->id}}" />
        @csrf
      <div class="card-body demo-vertical-spacing demo-only-element">
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="title_ar" name="title_ar" value="{{$slider->title_ar}}" placeholder="Title in Arabic" />
          <label for="title_ar">Title in Arabic</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="title_en" name="title_en" value="{{$slider->title_en}}" placeholder="Title in English" />
          <label for="title_en">Title in English</label>
        </div>

        <div class="form-floating form-floating-outline mb-4">
          <textarea class="form-control h-px-100" id="desc_ar" name="desc_ar" placeholder="Description in Arabic...">{{$slider->desc_ar}}</textarea>
          <label for="desc_ar">Description in Arabic</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <textarea class="form-control h-px-100" id="desc_en" name="desc_en" placeholder="Description in English...">{{$slider->desc_en}}</textarea>
          <label for="desc_en">Description in English</label>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Image</label>
          <input class="form-control" name="image" type="file" id="image">

        </div>
        <div id="preview">
          <img src="{{$slider->image}}" id="imgPreview" />
        </div>
        <button class="btn btn-primary d-grid w-100">Save</button>

      </div>
    </form>
    </div>
  </div>







</div>
@endsection
