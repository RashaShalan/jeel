<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;

class Controller extends BaseController
{
  use AuthorizesRequests, ValidatesRequests;
  /* public function __construct(Request $request)
  {
    $ip = $request->ip(); //Dynamic IP address

    /* $ip = '162.159.24.227';  Static IP address */

  //  $currentUserInfo = Location::get($ip);

  // dd($ip);
  // } */
}
