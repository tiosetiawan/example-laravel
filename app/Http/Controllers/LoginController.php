<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){ 
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'    => 'required|email:dns',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return response()->json([
                'success' => true
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Login Gagal!'
            ], 401);
        }

        return back()->with('gagal', 'Login gagal!');
    }

    public function logout(Request $request){
            
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
