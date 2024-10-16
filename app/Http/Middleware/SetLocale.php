<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;

class SetLocale
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    /*  if(is_null(session('locale')))
      session(['locale'=> 'en']); // set language english if language is not set in session

        app()->setLocale(session('locale')); // set the session's language to our application

        return $next($request); // this will already be available in the handle request. It just passes the request to next handle.
    } */
    /* if (Session::has('locale')) {
      App::setLocale(Session::get('locale'));
    }
    return $next($request); */
    if ($request->method() === 'GET') {
      $segment = $request->segment(1);

      if (!in_array($segment, config('app.available_locales'))) {
        $segments = $request->segments();
        $fallback = session('locale') ?: config('app.fallback_locale');
        $segments = Arr::prepend($segments, $fallback);

        return redirect()->to(implode('/', $segments));
      }

      session(['locale' => $segment]);
      app()->setLocale($segment);
    }

    return $next($request);
  }
}
