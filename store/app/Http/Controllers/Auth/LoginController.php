<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function __construct()
  {
    $this->middleware(['guest']);
  }

  public function index()
  {
    return view('auth.login');
  }

  public function login(Request $request)
  {
    $this->validate($request, [
      'username' => 'required',
      'password' => 'required',
    ]);

    if (!auth()->attempt($request->only('username', 'password'), $request->remember)) {
      return back();
    };

    return redirect()->route('store_homepage');
  }
  //
}
