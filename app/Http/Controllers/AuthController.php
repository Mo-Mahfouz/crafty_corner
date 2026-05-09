<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ActivityLog;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        ActivityLog::create([
            'user_id' => $user->id,
            'action' => 'register',
            'description' => $user->name . ' created a new account',
            'ip_address' => $request->ip(),
        ]);

        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            ActivityLog::create([
                'user_id' => Auth::id(),
                'action' => 'login',
                'description' => Auth::user()->name . ' logged in',
                'ip_address' => $request->ip(),
            ]);

            if (Auth::user()->isAdmin()) {
                return redirect()->route('dashboard.index');
            }

            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials'
        ]);
    }

    public function logout(Request $request)
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => 'logout',
            'description' => Auth::user()->name . ' logged out',
            'ip_address' => $request->ip(),
        ]);

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate(
            ['email' => $googleUser->email],
            [
                'name' => $googleUser->name,
                'password' => bcrypt(str()->random(16)),
                'role' => 'user',
            ]
        );

        Auth::login($user);

        return redirect()->route('home');
    }
}