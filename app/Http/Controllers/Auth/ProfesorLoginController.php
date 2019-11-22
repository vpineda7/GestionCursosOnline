<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ProfesorLoginController extends Controller
{
    //
    
    public function __construct(){
        $this->middleware('guest:profesor');
        // $this->middleware('guest:profesor', ['except' => ['logout', 'getLogout']]);
        //$this->middleware('guest:profesor', ['except' => 'getLogout']);
    }
    
    public function showLoginForm(){
        return view('auth.profesor-login');
    }

    public function login(Request $request){
        // return true; 


        //validate form
        $this-> validate($request, [
            'email'=> 'required|email', 
            'password' => 'required|min:6',
        ]);

        //attempt to log user in 
        if(Auth::guard('profesor')-> attempt(['email' => $request->email, 'password' => $request->password],$request->remember)){
            //if suseccefull, then redirect to their intendent location 
            // return redirect()->intended(route('profesor.dashboard'));
            return redirect()->intended(route('profesor_dashboard'));
        }

        //if unsuccefull, then redirect to login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));


        
    }
    // public function Logout()
    // {
    //     // $this->auth->logout();
    //     // Session::flush();
    //     // return redirect('/home');
        
    //     // Auth::logout();
    //     Auth::logout();
    //     Session::flush();
    //     return Redirect::to('/');
    // }

    // public function logout(Request $request)
    // {
    //     $this->guard()->logout();
    //     $request->session()->flush(); // this method should be called after we ensure that there is no logged in guards left
    //     $request->session()->regenerate(); //same 
    //     return redirect('/');
    // }

}
