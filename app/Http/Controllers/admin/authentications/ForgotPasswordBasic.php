<?php

namespace App\Http\Controllers\admin\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordBasic extends Controller
{
  public function index()
  {
    return view('admin.content.authentications.auth-forgot-password-basic');
  }
}
