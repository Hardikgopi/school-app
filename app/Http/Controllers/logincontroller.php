<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\value;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function logval(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = value::where('email', $credentials['email'])->first();

        if (!$user || $user->password !== $request->password) {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }

        // Login successful, redirect to dashboard or wherever you want
        return redirect('/')->with('success', 'Login successful');
    }
}
