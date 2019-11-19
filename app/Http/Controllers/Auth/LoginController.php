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
        $this->middleware('guest:profesor')->except('logout');
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
    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'profesor']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('profesor')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/profesor');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

}
