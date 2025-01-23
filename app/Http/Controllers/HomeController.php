<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\social_links;
use App\Models\contact_us;
use App\Models\terms;
use App\Models\campign;
use View;
use App\Models\faq;
use App\Models\jeel_question;

class HomeController extends Controller
{
  //
  public function __construct(Request $request)
  {
    $this->socialLinks = social_links::first();
    view()->share('socialLinks', $this->socialLinks);
  }
  public function index(Request $request)
  {
    // dd($request->cookie('countryCode'));
    //$sliders = Slider::all();
    $sliders = Slider::Select(
      '*',
      'title_' . app()->getLocale() . ' as title',
      'desc_' . app()->getLocale() . ' as detail',
      'image_' . app()->getLocale() . ' as image'
    )->get();
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

  public function contact_usCamagin(Request $request)
  {
    $contact = new contact_us();
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->phone = $request->phone;
    $contact->reason = $request->reason;
    $contact->msg = 'From Camagin Page : ' . $request->msg;
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
    $faq = faq::Select(
      '*',
      'question_' . app()->getLocale() . ' as question',
      'answer_' . app()->getLocale() . ' as answer'
    )
      ->where('is_active', '1')
      ->get();
    return view('faqs', compact('faq'));
  }

  public function questions()
  {
    $parents = jeel_question::Select(
      '*',
      'question_' . app()->getLocale() . ' as question',
      'answer_' . app()->getLocale() . ' as answer'
    )
      ->where('is_active', '1')
      ->where('type', 'parent')

      ->get();

    $childs = jeel_question::Select(
      '*',
      'question_' . app()->getLocale() . ' as question',
      'answer_' . app()->getLocale() . ' as answer'
    )
      ->where('is_active', '1')
      ->where('type', 'child')

      ->get();
    return view('jeel_question', compact('parents', 'childs'));
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
  public function campagin(Request $request)
  {
    //dd($request);
    $campagin = campign::where('route_code', urlencode($request->code))
      ->Select(
        '*',
        'name_' . app()->getLocale() . ' as name',
        'main_title_' . app()->getLocale() . ' as title',
        'main_details_' . app()->getLocale() . ' as detail',
        'sub_title_' . app()->getLocale() . ' as subTitle',
        'sub_details_' . app()->getLocale() . ' as subDetail'
      )
      ->first();
    $social = social_links::first();

    // dd($campagin);
    return view('campagin', compact('campagin', 'social'));
  }
  /**
   * Liability
   */
  public function Liability(Request $request)
  {
    return view('Liability');

  }
  /**
   * Parental_Consent
   */
  public function Parental_Consent(Request $request)
  {
    return view('Parental_Consent');

  }
  /**
   * Intellectual_Property
   */
  public function Intellectual_Property(Request $request)
  {
    return view('Intellectual_Property');

  }
}
