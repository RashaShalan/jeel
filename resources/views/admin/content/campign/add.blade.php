@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Add campaign')

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


            const subphotoInp = $("#sub_image");
            let subfile;
            subphotoInp.change(function (e) {
              subfile = this.files[0];
                console.log(subfile)
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        $("#subimgPreview")
                            .attr("src", event.target.result);
                    };
                    reader.readAsDataURL(subfile);
                }
            });

  });
</script>
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Add /</span>  campaign
</h4>


<style>
  img {
           max-width: 100px;
           max-height: 100px;
           min-width: 100px;
           min-height: 100px;
       }
</style>


<div class="row">
  <!-- Form controls -->
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">New Campagin</h5>
      <form name="myForm" id="myForm" method="POST" action="{{ url(app()->getLocale() .'/dashboard/campaign/add') }}" enctype="multipart/form-data">
        @csrf
      <div class="card-body demo-vertical-spacing demo-only-element">
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control " id="title_ar" name="name_ar" placeholder="Campagin name in Arabic" />
          <label for="name_ar">Campagin name in Arabic</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="title_en" name="name_en" placeholder="Campagin name in English" />
          <label for="name_en">Campagin name in English</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="title_ar" name="main_title_ar" placeholder="Main title  in Arabic" />
          <label for="main_title_ar">Main title  in Arabic</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="title_en" name="main_title_en" placeholder="Main title  in  English" />
          <label for="main_title_en">Main title in English</label>
        </div>

        <div class="form-floating form-floating-outline mb-4">
          <textarea class="form-control h-px-100" id="desc_ar" name="main_details_ar" placeholder="Main details in Arabic..."></textarea>
          <label for="main_details_ar">Main details in Arabic</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <textarea class="form-control h-px-100" id="desc_en" name="main_details_en" placeholder="Main details in English..."></textarea>
          <label for="main_details_en">Main details in English</label>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Image</label>
          <input class="form-control" name="image" type="file" id="image" >
        </div>
        <div id="preview">
          <img src="" id="imgPreview" />
        </div>


        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="title_ar" name="sub_title_ar" placeholder="Sub title  in Arabic" />
          <label for="sub_title_ar">Sub title  in Arabic</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="title_en" name="sub_title_en" placeholder="Sub title  in  English" />
          <label for="sub_title_ar_en">Sub title in English</label>
        </div>

        <div class="form-floating form-floating-outline mb-4">
          <textarea class="form-control h-px-100" id="desc_ar" name="sub_details_ar" placeholder="Sub details in Arabic..."></textarea>
          <label for="sub_details_ar">Sub details in Arabic</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <textarea class="form-control h-px-100" id="desc_en" name="sub_details_en" placeholder="Sub details in English..."></textarea>
          <label for="sub_details_en">Sub details in English</label>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Sub image</label>
          <input class="form-control" name="sub_image" type="file" id="sub_image" >
        </div>
        <div id="subpreview">
          <img src="" id="subimgPreview" />
        </div>

        <div class="col-md p-4">
          <small class="text-light fw-medium d-block">Statu</small>
          <div class="form-check form-check-inline mt-3">
            <input class="form-check-input" type="radio" name="is_active" id="inlineRadio1" value="1" checked />
            <label class="form-check-label" for="inlineRadio1">Active</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="is_active" id="inlineRadio2" value="0" />
            <label class="form-check-label" for="inlineRadio2">In active</label>
          </div>

        </div>
        <button class="btn btn-primary d-grid w-100">Save</button>

      </div>
    </form>
    </div>
  </div>







</div>
@endsection

