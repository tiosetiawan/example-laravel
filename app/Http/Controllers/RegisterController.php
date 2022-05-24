<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index', [
            'title'  => 'Register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request){
       $validateData = $request->validate([
            'name'     => 'required|max:255',
            'username' => ['required','min:3','max:255', 'unique:users'],
            'email'    => 'required|unique:users|email:dns',
            'password' => 'required|min:5|max:255',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        return redirect('/login')->with('berhasil', 'Registrasi berhasil!');
    }
}
