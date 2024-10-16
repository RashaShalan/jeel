<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  //
  public function index()
  {
    return view('homepage');
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
    return view('contact');
  }
}
