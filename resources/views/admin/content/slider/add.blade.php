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
            let file2;
            photoEn.change(function (e) {
                file2 = this.files[0];
                console.log(file2)
                if (file2) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        $("#imgEnPreview")
                            .attr("src", event.target.result);
                    };
                    reader.readAsDataURL(file2);
                }
            });

  });
  $().ready(function(){
    $('#subscribe_link_type').change(function(){
     console.log(this.value)
     if(this.value=='inner')
     {
      $('#subscribe_linkOuter').fadeOut('fast');
      $('#subscribe_linkInner').fadeIn('fast');
     }else{
      $('#subscribe_linkOuter').fadeIn('fast');
      $('#subscribe_linkInner').fadeOut('fast');
     }
    })

    $('#download_link_type').change(function(){
     console.log(this.value)
     if(this.value=='inner')
     {
      $('#download_linkOuter').fadeOut('fast');
      $('#download_linkInner').fadeIn('fast');
     }else{
      $('#download_linkOuter').fadeIn('fast');
      $('#download_linkInner').fadeOut('fast');
     }
    })

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
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="subscribe_text_en" name="subscribe_text_en" placeholder="Subscribe button text in English" value="subscribe" />
          <label for="subscribe_text_en">Subscribe button text in English</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="subscribe_text_ar" name="subscribe_text_ar" placeholder="Subscribe button text in Arabic" value="اشتراك" />
          <label for="subscribe_text_ar">Subscribe button text in Arabic</label>
        </div>
          <div class="form-floating form-floating-outline mb-4">
            <select class="form-select " id="subscribe_link_type" name="subscribe_link_type" aria-label="Link type">
              <option value="inner">Inner Link</option>
              <option value="outer">Outer link</option>
            </select>
            <label for="subscribe_link_type">Link type</label>
          </div>

        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="subscribe_linkOuter" onchange="$('#subscribe_link').val(this.value)" name="subscribe" placeholder="Subscribe Link" style="display: none" />
          <select class="form-select " id="subscribe_linkInner" name="subscribe" aria-label="Link type" onchange="$('#subscribe_link').val(this.value)">
            <option value="#joinsection">join section</option>
            <option value="#downloadsection">download section</option>
          </select>
          <input type="hidden" value="#joinsection" class="form-control" id="subscribe_link" name="subscribe_link" placeholder="Subscribe Link" />
          <label for="subscribe_link">Subscribe link</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="download_text_en" name="download_text_en" placeholder="Downlad button text in English" value="download" />
          <label for="download_text_en">Downlaod button text in English</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="download_text_ar" name="download_text_ar" placeholder="Downlaod button text in Arabic" value="تحميل" />
          <label for="download_text_ar">Downlaod button text in Arabic</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <select class="form-select " id="download_link_type" name="download_link_type" aria-label="Link type">
            <option value="inner">Inner Link</option>
            <option value="outer">Outer link</option>
          </select>
          <label for="download_link_type">Link type</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="download_linkOuter" name="download" onchange="$('#download_link').val(this.value)" placeholder="Subscribe Link" style="display: none" />
          <select class="form-select " id="download_linkInner" name="download" aria-label="Link type" onchange="$('#download_link').val(this.value)">
            <option value="#joinsection">join section</option>
            <option value="#downloadsection">download section</option>
          </select>
          <input type="hidden" class="form-control" value="#joinsection" id="download_link" name="download_link" placeholder="Download Link" />
          <label for="download_link">Download link</label>
        </div>

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

