<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\slider;
use App\helper; // Adjust this namespace as per your helper file location
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //

    $sliders = slider::all();

    return view('admin/content/slider/index', compact('sliders'));
  }
  public function getDataInfo()
  {
    $data = slider::get();
    return DataTables::of($data)
      ->addColumn('action', function ($row) {
        return ' <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1"></i> Delete</a>
              </div>
            </div>';
      })

      ->rawColumns(['action'])
      ->make(true);
  }
  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
    return view('admin/content/slider/add');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $rules = [
      'title_ar' => 'required|string',
      'title_en' => 'required|string',
      'desc_ar' => 'required|string',
      'desc_en' => 'required|string',
    ];

    // // Define custom messages
    $messages = [
      'title_ar.required' => 'Title in Arabic is required',
      'title_en.required' => 'Title in English is required',
      'title_ar.string' => "Title can't contanin symbols",
      'title_en.string' => "Title can't contanin symbols",
      'desc_ar.required' => 'Description in Arabic is required',
      'desc_en.required' => 'Description in English is required',

      'desc_ar.string' => "Description can't contanin symbols",
      'desc_en.string' => "Description can't contanin symbols",
    ];

    // // Validate the request
    $validatedData = Validator::make($request->all(), $rules, $messages);

    // // Validate the request
    // $request->validate($rules, $messages);
    if ($validatedData->fails()) {
      //  dd($validatedData);
      return redirect()
        ->back()
        ->withErrors($validatedData)
        ->withInput();
    }
    $slider = new Slider();
    $slider->title_ar = $request->title_ar;
    $slider->title_en = $request->title_en;
    $slider->desc_ar = $request->desc_ar;
    $slider->desc_en = $request->desc_en;
   /*  $slider->subscribe_link = $request->subscribe_link;
    $slider->subscribe_link_type = $request->subscribe_link_type;
    $slider->download_link = $request->download_link;
    $slider->download_link_type = $request->download_link_type; */
    $slider->created_by = Auth::user()->id;
    $slider->created_at = now();

    $slider->save();
    if ($request->hasFile('image')) {
      UploadFiles('uploads/slider', 'image_ar', $slider, $request->image);
    }
    if ($request->hasFile('image_en')) {
      UploadFiles('uploads/slider', 'image_en', $slider, $request->image_en);
    }
    if (!empty($slider)) {
      return redirect()
        ->to(app()->getLocale() . '/dashboard/slider')
        ->with('message', 'Slider added successfully');
    } else {
      // Handle specific errors based on listener responses
      return redirect()
        ->back()
        ->with('message', 'Wrong ');
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Request $request)
  {
    // dd($request);
    //
    $slider = slider::where('id', $request->id)->first();
    // dd($slider);
    return view('admin/content/slider/edit', compact('slider'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request)
  {
    $rules = [
      'title_ar' => 'required|string',
      'title_en' => 'required|string',
      'desc_ar' => 'required|string',
      'desc_en' => 'required|string',
    ];

    // // Define custom messages
    $messages = [
      'title_ar.required' => 'Title in Arabic is required',
      'title_en.required' => 'Title in English is required',
      'title_ar.string' => "Title can't contanin symbols",
      'title_en.string' => "Title can't contanin symbols",
      'desc_ar.required' => 'Description in Arabic is required',
      'desc_en.required' => 'Description in English is required',

      'desc_ar.string' => "Description can't contanin symbols",
      'desc_en.string' => "Description can't contanin symbols",
    ];

    // // Validate the request
    $validatedData = Validator::make($request->all(), $rules, $messages);

    // // Validate the request
    // $request->validate($rules, $messages);
    if ($validatedData->fails()) {
      //  dd($validatedData);
      return redirect()
        ->back()
        ->withErrors($validatedData)
        ->withInput();
    }
    $slider = Slider::find($request->slider_id);
    $slider->title_ar = $request->title_ar;
    $slider->title_en = $request->title_en;
    $slider->desc_ar = $request->desc_ar;
    $slider->desc_en = $request->desc_en;
  /*   $slider->subscribe_link = $request->subscribe_link;
    $slider->subscribe_link_type = $request->subscribe_link_type;
    $slider->download_link = $request->download_link;
    $slider->download_link_type = $request->download_link_type; */
    $slider->updated_by = Auth::user()->id;
    $slider->updated_at = now();

    $slider->save();
    if ($request->hasFile('image')) {
      UploadFiles('uploads/slider', 'image_ar', $slider, $request->image);
    }
    if ($request->hasFile('image_en')) {
      UploadFiles('uploads/slider', 'image_en', $slider, $request->image_en);
    }
    if (!empty($slider)) {
      return redirect()
        ->to(app()->getLocale() . '/dashboard/slider')
        ->with('message', 'Slider Updated successfully');
    } else {
      // Handle specific errors based on listener responses
      return redirect()
        ->back()
        ->with('message', 'Wrong ');
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Request $request)
  {
    //
    $slider = Slider::find($request->id);
    $slider->delete();
    return '1';
  }
}
