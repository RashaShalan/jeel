<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jeel_question;
use App\helper; // Adjust this namespace as per your helper file location
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class jeel_questionsController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
    $jeel_questions = jeel_question::all();

    return view('admin/content/jeel_questions/index', compact('jeel_questions'));
  }
  public function getDataInfo()
  {
    $data = jeel_question::SelectRaw(
      "*,IF(is_active=1,'Active','In active') as Status,question_" .
        app()->getLocale() .
        ' as question,answer_' .
        app()->getLocale() .
        ' as answer'
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
    return view('admin/content/jeel_questions/add');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
    $rules = [
      'question_ar' => 'required|string',
      'question_en' => 'required|string',
      'answer_ar' => 'required|string',
      'answer_en' => 'required|string',
    ];

    // // Define custom messages
    $messages = [
      'question_ar.required' => 'Question in Arabic is required',
      'question_en.required' => 'Question in English is required',
      'question_ar.string' => "Question in Arabic can't contanin symbols",
      'question_en.string' => "Question in English can't contanin symbols",

      'answer_ar.required' => 'Answer in Arabic is required',
      'answer_en.required' => 'Answer in English is required',
      'answer_ar.string' => "Answer in Arabic can't contanin symbols",
      'answer_en.string' => "Answer in English can't contanin symbols",
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
    $slider = new jeel_question();
    $slider->question_ar = $request->question_ar;
    $slider->question_en = $request->question_en;
    $slider->answer_ar = $request->answer_ar;
    $slider->answer_en = $request->answer_en;

    $slider->is_active = $request->is_active;
    $slider->type = $request->type;

    $slider->created_at = now();

    $slider->save();

    if (!empty($slider)) {
      return redirect()
        ->to(app()->getLocale() . '/dashboard/jeel_questions')
        ->with('message', 'jeel_questionss added successfully');
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
    $jeel_questions = jeel_question::where('id', $request->id)->first();
    return view('admin/content/jeel_questions/edit', compact('jeel_questions'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request)
  {
    //
    $rules = [
      'question_ar' => 'required|string',
      'question_en' => 'required|string',
      'answer_ar' => 'required|string',
      'answer_en' => 'required|string',
    ];

    // // Define custom messages
    $messages = [
      'question_ar.required' => 'Question in Arabic is required',
      'question_en.required' => 'Question in English is required',
      'question_ar.string' => "Question in Arabic can't contanin symbols",
      'question_en.string' => "Question in English can't contanin symbols",

      'answer_ar.required' => 'Answer in Arabic is required',
      'answer_en.required' => 'Answer in English is required',
      'answer_ar.string' => "Answer in Arabic can't contanin symbols",
      'answer_en.string' => "Answer in English can't contanin symbols",
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
    $slider = jeel_question::find($request->id);
    $slider->question_ar = $request->question_ar;
    $slider->question_en = $request->question_en;
    $slider->answer_ar = $request->answer_ar;
    $slider->answer_en = $request->answer_en;

    $slider->is_active = $request->is_active;
    $slider->type = $request->type;

    $slider->updated_at = now();

    $slider->save();

    if (!empty($slider)) {
      return redirect()
        ->to(app()->getLocale() . '/dashboard/jeel_questions')
        ->with('message', 'jeel_questionss updated successfully');
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
    $jeel_questions = jeel_question::find($request->id);
    $jeel_questions->delete();
    return '1';
  }
}
