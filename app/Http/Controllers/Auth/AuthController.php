<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register()
    {
        $user = new CreateNewUser();
        $input = [
            "name" => request('name'),
            "email" => request('email'),
            "password" => request(('password')),
            "password_confirmation" => request(('password_confirmation'))
        ];
        $user = $user->create($input);
        event(new Registered($user));

        auth()->login($user);

        return redirect()->to('/');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function resendVerification(){

    }

    public function verify(EmailVerificationRequest $request){
        $request->fulfill();
        return redirect('/');
    }

    public function logout(Request $request): RedirectResponse
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/login');
    }
}