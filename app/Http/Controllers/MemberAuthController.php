<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Jobs\SendWelcomeEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MemberAuthController extends Controller
{
    
    public function showLoginForm()
    {
        return view('auth.login');
    }

    
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email',
            'password' => 'required|min:6',
        ]);

        $member = Member::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
      ]);

           SendWelcomeEmail::dispatch($member);
        // Mail::to($member->email)->send(new WelcomeMail($member));

        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }

    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
