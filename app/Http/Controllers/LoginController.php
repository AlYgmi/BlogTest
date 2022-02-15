<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.index', [
            'title' => 'login',
            'active' => 'login'
        ]);
    }
    public function authenticate(Request $request)
    {
         
            $credentials = $request->validate([
             'email' => 'required|email:dns',
             'password' => 'required'
            ]);

            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('/dashboard');
            }

            return back()->with('loginError', 'Login Gagal!');

    }

    public function logout() 
    {
	    return view('login.logout');
    }

    public function proses_logout(Request $request) 
    {
	    Auth::logout();
        //    auth()->logout;
            
        //    return redirect('index') ;
            
            
        // Auth::logout();

         // $request->session()->invalidate();

         // $request->session()->regeneratedToken();

         return redirect('/');
    }
}
