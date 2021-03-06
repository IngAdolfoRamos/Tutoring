<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
            $this->username() => 'required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials))
        {
//            return redirect()->route('home');

            $user = Auth::user();


            foreach ($user->roles as $role)
            {
                $role;
            }

            // Checking user role and redirecting based on its role.
            switch ($role->id)
            {
                case 1:
                    return redirect('/home');
                    break;
                case 2:
                    return redirect('/home');
                    break;
                case 3:
                    return redirect('/home');
                    break;
                case 4:
//                    $id = $user->id;
//
//                    $user = User::find($id);
//                    $record = $user->record;
//                    $people = Person::where('record', $record)->get();
//
//                    foreach ($people as $person)
//                    {
//                        $person;
//                        //echo $p->photo;
//                    }
                    //return $photo;
                    //return $people;
                    //return view('students.index', compact('user','person'));

                    return redirect(route('students.index'));
                    break;
                default:
                    return back()->withErrors([$this->username() => 'Verifica tu usuario y/o contraseña'])
                        ->withInput(request([$this->username()]));
                    break;
            }
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
