<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister() {
        if (request()->cookie('auth_user')) {
            return redirect('/dashboard');
        }
        return view('register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }

    public function showLogin() {
        if (request()->cookie('auth_user')) {
            return redirect('/dashboard');
        }
        return view('login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Set cookie for authentication (valid for 1 hour)
            return redirect('/dashboard')->cookie('auth_user', $user->id, 60);
        } else {
            return back()->withErrors(['email' => 'Invalid credentials!']);
        }
    }

    public function dashboard(Request $request) {
        $userId = $request->cookie('auth_user');
        if (!$userId) {
            return redirect('/login');
        }

        $user = User::find($userId);
        return view('dashboard', compact('user'));
    }

    public function logout() {
        // Forget the cookie
        return redirect('/login')->withCookie(cookie()->forget('auth_user'));
    }
}
