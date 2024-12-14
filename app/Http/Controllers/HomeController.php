<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\social_links;
use App\Models\contact_us;
use App\Models\terms;

class HomeController extends Controller
{
  //
  public function index(Request $request)
  {
    // dd($request->cookie('countryCode'));
    $sliders = Slider::all();
    $social = social_links::first();
    return view('homepage', compact('sliders', 'social'));
  }
  public function send_contact_us(Request $request)
  {
    $contact = new contact_us();
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->phone = $request->phone;
    $contact->reason = $request->reason;
    $contact->msg = $request->msg;
    $contact->save();
    return true;
  }
  public function about()
  {
    return view('about');
  }
  public function download_app()
  {
    return view('download_app');
  }

  public function faq_question()
  {
    return view('faqs');
  }

  public function questions()
  {
    return view('jeel_question');
  }

  public function contact_us()
  {
    $social = social_links::first();

    return view('contact', compact('social'));
  }

  public function terms_conditions()
  {
    $terms = terms::first();

    // dd($terms);
    return view('terms', compact('terms'));
  }
}
