<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use App\Models\Form;
use App\Models\Funeral;
use App\Models\Good;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
    public function user_login() {
        return view('funeral.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ],
            [
                'email.required' => 'メールアドレスを入力してください。',
                'password.required' => 'パスワードを入力してください。',
            ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended("/menu");
        }

        return back()->withErrors([
            'email' => 'メールアドレス、またはパスワードが違います。',
        ])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }
}
