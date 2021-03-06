<?php

namespace EICM\Http\Controllers\Auth;

use EICM\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles authenticating users for the application and
  | redirecting them to your home screen. The controller uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */

  use AuthenticatesUsers;

  /**
  * Where to redirect users after login.
  *
  * @var string
  */
  protected $redirectTo = '/';

  /**
  * Create a new controller instance.
  *
  * @return void
  */

  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }


  //Este método será utilizado para permitir que os utilizadores
  //autentiquem utilizando os seus nomes de utilizadores ou email

  public function username()
  {
    $login = request()->input('login');
    $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    request()->merge([$field => $login]);
    return $field;
  }
}
