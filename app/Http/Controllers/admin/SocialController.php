<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\social_links;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
    $social = social_links::first();

    return view('admin/content/social/index', compact('social'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
    //dd($request->all());
    $social = social_links::get();
    if (count($social) == 0) {
      $slider = new social_links();
      $slider->facebook = $request->facebook ?? '';
      $slider->twitter = $request->twitter ?? '';
      $slider->gmail = $request->gmail ?? '';
      $slider->whatsapp = $request->whatsapp ?? '';
      $slider->linkedin = $request->linkedin ?? '';
      $slider->instagram = $request->instagram ?? '';
      $slider->tiktok = $request->tiktok ?? '';

      // $slider->created_by = Auth::user()->id;
      $slider->created_at = now();

      $slider->save();
    } else {
      $slider = social_links::find(1);
      $slider->facebook = $request->facebook ?? '';
      $slider->twitter = $request->twitter ?? '';
      $slider->gmail = $request->gmail ?? '';
      $slider->whatsapp = $request->whatsapp ?? '';
      $slider->linkedin = $request->linkedin ?? '';
      $slider->instagram = $request->instagram ?? '';
      $slider->tiktok = $request->tiktok ?? '';
      // $slider->updated_by = Auth::user()->id;
      $slider->updated_at = now();
      $slider->save();
    }
    return redirect()
      ->to(app()->getLocale() . '/dashboard/social')
      ->with('message', 'Social added successfully');
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
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
