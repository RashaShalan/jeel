<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\translate;
use Yajra\DataTables\Facades\DataTables;
use App\helper; // Adjust this namespace as per your helper file location
use Illuminate\Support\Facades\Validator;

class translateController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //

    $translates = translate::all();

    return view('admin/content/translate/index', compact('translates'));
  }
  public function getDataInfo()
  {
    $data = translate::get();
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
    return view('admin/content/translate/add');
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
    $translate = new translate();
    $translate->title_ar = $request->title_ar;
    $translate->title_en = $request->title_en;
    $translate->desc_ar = $request->desc_ar;
    $translate->desc_en = $request->desc_en;
    $translate->created_by = Auth::user()->id;
    $translate->created_at = now();

    $translate->save();
    if ($request->hasFile('image')) {
      UploadFiles('uploads/translate', 'image', $translate, $request->image);
    }
    if (!empty($translate)) {
      return redirect()
        ->to(app()->getLocale() . '/dashboard/translate')
        ->with('message', 'translate added successfully');
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
    $translate = translate::where('id', $request->id)->first();
    // dd($translate);
    return view('admin/content/translate/edit', compact('translate'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request)
  {
    $rules = [
      'title_ar' => 'required|string',
      'title_en' => 'required|string',
    ];

    // // Define custom messages
    $messages = [
      'title_ar.required' => 'Title in Arabic is required',
      'title_en.required' => 'Title in English is required',
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
    $translate = translate::find($request->id);
    $translate->title_ar = $request->title_ar;
    $translate->title_en = $request->title_en;

    $translate->updated_at = now();

    $translate->save();
    return 1;
    // return redirect()->route('translate.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Request $request)
  {
    //
    $translate = translate::find($request->id);
    $translate->delete();
    return '1';
  }
}
