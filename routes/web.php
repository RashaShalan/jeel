<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\dashboard\Analytics;
use App\Http\Controllers\admin\authentications\LoginBasic;
use App\Http\Controllers\admin\authentications\RegisterBasic;
use App\Http\Controllers\admin\authentications\ForgotPasswordBasic;
/* Route::get('/dashboard', function () {
  return redirect(app()->getLocale() . '/dashboard');
}); */

Route::prefix('{locale?}')
  ->middleware('setLocale')
  ->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    /**
     * Dasnboard
     */
    Route::get('dashboard/login', [LoginBasic::class, 'index'])->name('dashboard.login');
    Route::post('dashboard/LogmeIn', [LoginBasic::class, 'Login'])->name('dashboard.login.logme');

    Route::group(
      [
        'prefix' => '/dashboard',
        'middleware' => ['auth', 'dashboard'],
      ],
      function () {
        Route::get('/', [Analytics::class, 'index'])->name('dashboard-analytics');
      }
    );

    /*  Route::get('/dashboard/auth/register-basic', [RegisterBasic::class, 'index'])->name(
      'dashboard.auth-register-basic'
    );
    Route::get('/dashboard/auth/forgot-password-basic', [ForgotPasswordBasic::class, 'index'])->name(
      'dashboard.auth-reset-password-basic'
    ); */
  });

Route::get('language/{locale}', function ($locale) {
  app()->setLocale($locale);
  session()->put('locale', $locale);
  return redirect()->back();
});
