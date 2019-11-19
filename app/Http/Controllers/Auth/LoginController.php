<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //custom function create at 18-11-19
    // public function login(Request $request){
    //     dd($request -> all());

    //     if(Auth::attemp([
    //         'email' -> $request -> email,
    //         'password' -> $request -> password
    //     ]))
    //     {
    //         $user = User::where('email', $request->email)->first();
            
    //         if ($user->is_admin())  {
    //             return redirect()->route('dashboard');
    //         }
    //             return redirect()->route('home');
    //     }
    // }

}
