<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function loginPage()
    {
        $site = [
            'title' => 'APALAH'
        ];
        return view('page.login', ['site' => $site]);
    }

    public function loginAction(Request $request): RedirectResponse
    {
        $remember = false;
        $validate = $request->validate([
            'username' => 'string',
            'password' => 'string',
            'remember' => 'string'
        ]);
        if ($request->has('remember')) {
            $remember = true;
        }

        if (Auth::attempt($validate, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => "email or Password wrong"
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
