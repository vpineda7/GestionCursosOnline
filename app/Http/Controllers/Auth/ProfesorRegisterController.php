<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profesor;//agregado el 22-11-19
use Illuminate\Http\Request; //agregado el 22-11-19
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;

use Auth;

class ProfesorRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/profesor';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:profesor');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            // 'tipo' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Profesor
     */
    protected function create(array $data)
    {
        $to_name = $data['name'];
        $to_email = $data['email'];
        $data2 = array('name'=>$data['name'], "body" => "Test mail");
        $template= 'mail_bienvenida'; // resources/views/mail/xyz.blade.php
        Mail::send($template, $data2, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Bienvenido al Sistema de Gestión en línea de cursos online');
            $message->from('gestiondecursosenlinea@gmail.com','Gestión de Cursos en Linea');
        });


        return Profesor::create([
            'name' => $data['name'],
            // 'tipo' => $data['tipo'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // public function showRegistrationForm($userType){
    //     return view('auth.register', compact('userType'));
    // } 
    public function showRegistrationForm() {
        return view('auth/profesor-register');
    }

    public function register(Request $request)
    {
       //Validates data
        $this->validator($request->all())->validate();

       //Create profesor
        $profesor = $this->create($request->all());

        //Authenticates profesor
        $this->guard()->login($profesor);

       //Redirects profesor
        //return redirect($this->$redirectTo);
        return redirect()->intended(route('profesor_dashboard'));
        // if(Auth::guard('profesor')-> attempt(['email' => $request->email, 'password' => $request->password],$request->remember)){
        //     //if suseccefull, then redirect to their intendent location 
        //     // return redirect()->intended(route('profesor.dashboard'));
        //     return redirect()->intended(route('profesor_dashboard'));
        // }
    }
    protected function guard(){
        return Auth::guard('profesor');
    }

}
