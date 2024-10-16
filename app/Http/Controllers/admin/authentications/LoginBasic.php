<?php

namespace App\Http\Controllers\admin\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Console\View\Components\Alert;
use App\Models\User;

class LoginBasic extends Controller
{
  public function index()
  {
    return view('admin.content.authentications.auth-login-basic');
  }
  /**
   * Handle an incoming authentication request.
   */
  public function Login(Request $request)
  {
    // dd($request);
    $messages = [
      'email.required' => 'البريد الالكتروني مطلوب',
      'password.required' => 'كلمة المرور مطلوبة.',
    ];

    $validatedData = $request->validate(
      [
        'email' => 'required|string',
        'password' => 'required|string',
      ],
      $messages
    );

    $email = $request->email;
    $password = $request->password;

    // Check if the user exists
    $user = User::where('email', $email)->first();
    if (!$user) {
      return back()
        ->with('error', 'البريد الالكتروني غير موجود فى سجلاتنا')
        ->withInput();
    }

    // Check if the user has the correct flag

    $credentials = [
      'password' => $password,
    ];
    // Use a custom login function
    $credentials['email'] = $email;

    $twoHoursAgo = now()->subHours(6);

    if (Auth::attempt($credentials)) {
      // to not send code
      if ($user->token == 'logined') {
        Auth::login($user); // Log the user in
        return redirect()->route('/');
      }
      //end code

      Auth::login($user); // Log the user in
      return redirect()->to(url(app()->getLocale() . '/dashboard'));
      // return redirect()->route('dashboard.dashboard-analytics');
    }

    return back()
      ->with('error', 'كلمة المرور لا تتطابق مع سجلاتنا')
      ->withInput();
  }
}
