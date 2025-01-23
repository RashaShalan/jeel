@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Add FAQs')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Add /</span> Jeel Question
</h4>




<div class="row">
  <!-- Form controls -->
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">New Jeel Question</h5>
      <form name="myForm" id="myForm" method="POST" action="{{ url(app()->getLocale() .'/dashboard/jeel_questions/add') }}" enctype="multipart/form-data">
        @csrf
      <div class="card-body demo-vertical-spacing demo-only-element">
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control " id="question_ar" name="question_ar" placeholder="Question  in Arabic" />
          <label for="question_ar">Question in Arabic</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <input type="text" class="form-control" id="question_en" name="question_en" placeholder="Question in English" />
          <label for="question_en">Campagin name in English</label>
        </div>
       

        <div class="form-floating form-floating-outline mb-4">
          <textarea class="form-control h-px-100" id="answer_ar" name="answer_ar" placeholder="Answer in Arabic..."></textarea>
          <label for="answer_ar">Answer in Arabic</label>
        </div>
        <div class="form-floating form-floating-outline mb-4">
          <textarea class="form-control h-px-100" id="answer_en" name="answer_en" placeholder="Answer in English..."></textarea>
          <label for="answer_en">Answer in English</label>
        </div>
        <div class="mb-3">
          <label for="defaultSelect" class="form-label">Type</label>
          <select id="defaultSelect" class="form-select" name="type" id="type">
            <option value="parent" selected>Parent</option>
            <option value="child">Child</option>
          </select>
        </div>
        <div class="col-md p-4">
          <small class=" fw-medium d-block">Status</small>
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

