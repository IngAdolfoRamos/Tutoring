<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['only' => 'showLoginForm']);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            $this->username() => 'required|string|min:9|max:9',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials))
        {
            return redirect()->route('home');
        }
        return back()->withErrors([$this->username() => 'Verifica tu usuario y/o contraseña'])
            ->withInput(request([$this->username()]));
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function username()
    {
        return 'record';
    }
}
