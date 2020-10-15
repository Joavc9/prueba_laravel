<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth\LoginCreateRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest',['only'=>'index']);
  }

  public function showLoginForm()
  {
    return view('auth.login');
  }

  public function login(LoginCreateRequest $request)
  {
    if (Auth::attempt($request->only('email', 'password')))
      return redirect()->route('home');
    return back()
      ->withErrors(['email' => 'Las credenciales introducidas son incorrectas.'])
      ->withInput(request(['email']));
  }

  public function logout()
  {
    Auth::logout();
    return redirect()->route("login");
  }
}
