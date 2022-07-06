<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  //
  public function __construct()
  {
    $this->middleware(['guest']);
  }

  public function index()
  {
    return view('auth.register');
  }

  public function create(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|max:255|min:3',
      'username' => 'required|max:255|min:3',
      'email' => 'required|email|max:255|min:3',
      'password' => 'required|confirmed|min:6',
    ]);
    User::create([
      'name' => $request->name,
      'username' => $request->username,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    auth()->attempt($request->only('email', 'password'));

    return redirect()->route('store_homepage');
  }
}
