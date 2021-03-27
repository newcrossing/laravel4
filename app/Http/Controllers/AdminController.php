<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function loginPage()
    {
        if (Auth::user()->isAdmin()) {
            return redirect('/admin/index');
        } else {
            return view('backend.auth.auth-login');
        }
    }

    public function index()
    {
        return view('backend.pages.content-typography');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/index');
        }

        return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
