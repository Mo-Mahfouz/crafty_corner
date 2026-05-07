<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register(Request $request){
        $request->validate([
                'name'=>'required|string|max:255',
                'email'=>'required|string|email|max:255|unique:users,email',
                'password'=>'required|string|min:8|confirmed'
            ]
        );
    
       $user= User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return redirect('/home');
    }
    public function login(Request $request){
         $request->validate([
                'email'=>'required|string|email',
                'password'=>'required|string'
            ]
        );
        if(Auth::attempt($request->only('email','password'))){
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        return back()->withErrors([
    'email' => 'Invalid credentials'
])->withInput();

    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('');
    }
}
