<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class KonsultantController extends Controller
{

    public function create(){
      return view('auth.login-konsultant');
    }

    public function store(Request $request){
        $request->validate([
          'email' => ['required','string'],
          'password' => ['required','string']
        ]
      );
      if(Auth::guard('konsultant')->attempt(['email'=>$request->email,'password'=>$request->password])){
        $request->session()->regenerate();
        return redirect()->intended('/dashboard-konsultant');
      }
      return back()->withInput($request->only('login'));
    }
    public function destroy(Request $request)
    {
        Auth::guard('konsultant')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
