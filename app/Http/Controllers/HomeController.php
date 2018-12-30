<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        $user = Auth::user();


        foreach ($user->roles as $role)
        {
            $role;
        }

        $ver = DB::table('role_user')
            ->where('role_id', '=', 1)
            ->get();


        $results = DB::table('users')
            ->join( 'role_user' , 'users.id' , '=' , 'role_user.id' )
            ->select( 'users.name' , 'role_user.role_id' )
            ->get();

        foreach ($results as $result)
        {
            $result->role_id;
        }


        return view('home', compact('users', 'user', 'role', 'ver', 'results', 'result'));
    }
}
