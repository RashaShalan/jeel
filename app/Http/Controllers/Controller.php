<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;
use App\Models\social_links;
use View;

class Controller extends BaseController
{
  use AuthorizesRequests, ValidatesRequests;
  public $socialLinks;
  public function __construct(Request $request)
  {
    $this->socialLinks = social_links::first();
    view()->share('socialLinks', $this->socialLinks);

    // $ip = $request->ip(); //Dynamic IP address

    /* $ip = '162.159.24.227';  Static IP address */

    //  $currentUserInfo = Location::get($ip);

    // dd($ip);
  }
}
