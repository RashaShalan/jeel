<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\campign;
use App\helper; // Adjust this namespace as per your helper file location
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
    $campign = campign::all();

    return view('admin/content/campign/index', compact('campign'));
  }
  public function getDataInfo()
  {
    $url = url(app()->getLocale() . '/campaign'); //route_code
    $data = campign::SelectRaw(
      "*,IF(is_active=1,'Active','In active') as Status,CONCAT('" . $url . "','?code=',route_code) as route"
    )->get();
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
    return view('admin/content/campign/add');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
    $rules = [
      'name_ar' => 'required|string',
      'name_ar' => 'required|string',
      'main_title_ar' => 'required|string',
      'main_title_en' => 'required|string',

      'main_details_ar' => 'required|string',
      'main_details_en' => 'required|string',
    ];

    // // Define custom messages
    $messages = [
      'name_ar.required' => 'Name in Arabic is required',
      'name_en.required' => 'Name in English is required',
      'name_ar.string' => "Name can't contanin symbols",
      'name_en.string' => "Name can't contanin symbols",

      'main_title_ar.required' => 'Main title in Arabic is required',
      'main_title_en.required' => 'Main title in English is required',
      'main_title_ar.string' => "Main title can't contanin symbols",
      'main_title_en.string' => "Main title can't contanin symbols",

      'main_details_ar.required' => 'Description in Arabic is required',
      'main_details_en.required' => 'Description in English is required',

      'main_details_ar.string' => "Description can't contanin symbols",
      'main_details_en.string' => "Description can't contanin symbols",
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
    $route_code = urlencode($request->name_en);
    $slider = new campign();
    $slider->name_ar = $request->name_ar;
    $slider->name_en = $request->name_en;
    $slider->main_title_ar = $request->main_title_ar;
    $slider->main_title_en = $request->main_title_en;

    $slider->main_details_ar = $request->main_details_ar;
    $slider->main_details_en = $request->main_details_en;

    $slider->sub_title_ar = $request->sub_title_ar;
    $slider->sub_title_en = $request->sub_title_en;

    $slider->sub_details_ar = $request->sub_details_ar;
    $slider->sub_details_en = $request->sub_details_en;

    $slider->is_active = $request->is_active;
    $slider->route_code = $route_code;

    $slider->created_at = now();

    $slider->save();
    if ($request->hasFile('image')) {
      UploadFiles('uploads/campagins', 'main_image', $slider, $request->image);
    }
    if ($request->hasFile('sub_image')) {
      UploadFiles('uploads/campagins', 'sub_image', $slider, $request->sub_image);
    }
    if (!empty($slider)) {
      return redirect()
        ->to(app()->getLocale() . '/dashboard/campaign')
        ->with('message', 'Campaign added successfully');
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
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Request $request)
  {
    //
    $campign = campign::where('id', $request->id)->first();
    // dd($slider);
    return view('admin/content/campign/edit', compact('campign'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request)
  {
    //
    $rules = [
      'name_ar' => 'required|string',
      'name_ar' => 'required|string',
      'main_title_ar' => 'required|string',
      'main_title_en' => 'required|string',

      'main_details_ar' => 'required|string',
      'main_details_en' => 'required|string',
    ];

    // // Define custom messages
    $messages = [
      'name_ar.required' => 'Name in Arabic is required',
      'name_en.required' => 'Name in English is required',
      'name_ar.string' => "Name can't contanin symbols",
      'name_en.string' => "Name can't contanin symbols",

      'main_title_ar.required' => 'Main title in Arabic is required',
      'main_title_en.required' => 'Main title in English is required',
      'main_title_ar.string' => "Main title can't contanin symbols",
      'main_title_en.string' => "Main title can't contanin symbols",

      'main_details_ar.required' => 'Description in Arabic is required',
      'main_details_en.required' => 'Description in English is required',

      'main_details_ar.string' => "Description can't contanin symbols",
      'main_details_en.string' => "Description can't contanin symbols",
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
    $route_code = urlencode($request->name_en);

    $slider = campign::find($request->campign_id);
    $slider->name_ar = $request->name_ar;
    $slider->name_en = $request->name_en;
    $slider->main_title_ar = $request->main_title_ar;
    $slider->main_title_en = $request->main_title_en;

    $slider->main_details_ar = $request->main_details_ar;
    $slider->main_details_en = $request->main_details_en;

    $slider->sub_title_ar = $request->sub_title_ar;
    $slider->sub_title_en = $request->sub_title_en;

    $slider->sub_details_ar = $request->sub_details_ar;
    $slider->sub_details_en = $request->sub_details_en;

    $slider->is_active = $request->is_active;
    $slider->route_code = $route_code;

    $slider->updated_at = now();

    $slider->save();
    if ($request->hasFile('image')) {
      UploadFiles('uploads/campagins', 'main_image', $slider, $request->image);
    }
    if ($request->hasFile('sub_image')) {
      UploadFiles('uploads/campagins', 'sub_image', $slider, $request->sub_image);
    }
    if (!empty($slider)) {
      return redirect()
        ->to(app()->getLocale() . '/dashboard/campaign')
        ->with('message', 'Campaign updated successfully');
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
  public function destroy(string $id)
  {
    //
    $campign = campign::find($request->id);
    $campign->delete();
    return '1';
  }
}
