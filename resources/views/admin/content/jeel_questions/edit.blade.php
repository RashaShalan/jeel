@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Edit Jeel question')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>

@endsection


@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Edit /</span>  Jeel Question
</h4>





<div class="row">
  <!-- Form controls -->
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Edit jeel_questionss</h5>
      <form name="myForm" id="myForm" method="POST" action="{{ url(app()->getLocale() .'/dashboard/jeel_questions/update') }}" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="{{$jeel_questions->id}}" />
        @csrf
      <div class="card-body demo-vertical-spacing demo-only-element">
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="question_ar" name="question_ar" value="{{$jeel_questions->question_ar}}"  placeholder="jeel_questionss in Arabic" />
          <label for="name_ar">jeel_questionss in Arabic</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="question_en" name="question_en" value="{{$jeel_questions->question_en}}" placeholder="jeel_questionss in English" />
          <label for="name_en">jeel_questionss in English</label>
        </div>
       

        <div class="form-floating form-floating-outline mb-4">
          <textarea class="form-control h-px-100" id="answer_ar" name="answer_ar" placeholder="Answer in Arabic...">{{$jeel_questions->answer_ar}}</textarea>
          <label for="answer_ar">Answer in Arabic</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <textarea class="form-control h-px-100" id="answer_en" name="answer_en" placeholder="Answer in English...">{{$jeel_questions->answer_en}}</textarea>
          <label for="answer_en">Answer in English</label>
        </div>
        <div class="mb-3">
          <label for="defaultSelect" class="form-label">Type</label>
          <select id="defaultSelect" class="form-select" name="type" id="type">
            <option value="parent" @if($jeel_questions->type=='parent') selected @endif>Parent</option>
            <option value="child"  @if($jeel_questions->type=='child') selected @endif>Child</option>
          </select>
        </div>
        <div class="col-md p-4">
          <small class=" fw-medium d-block">Statu</small>
          <div class="form-check form-check-inline mt-3">
            <input class="form-check-input" type="radio" name="is_active" id="inlineRadio1" value="1"  @if($jeel_questions->is_active=='1') checked @endif />
            <label class="form-check-label" for="inlineRadio1">Active</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="is_active" id="inlineRadio2" value="0"@if($jeel_questions->is_active=='0') checked @endif />
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
