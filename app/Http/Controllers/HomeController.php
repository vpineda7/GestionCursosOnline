<?php
namespace App\Http\Controllers;
use Validator, Redirect; 
use App\Listas;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
    //     $cursos = Listas::where('user_id', auth()->user()->id)->get();
    //     return view('home')-> with('cursos', $cursos);
        // $user_id=$request->id;
        $user_id=Auth::user()->id;
        
        $cursos = DB::table('listas')
            ->select('*')
            ->join('cursos', 'listas.curso_id', '=', 'cursos.id')
            ->join('users', 'listas.user_id', '=', 'users.id')
            ->where('listas.user_id', '=', $user_id)
            ->get();   
        
        return view('home')-> with('cursos', $cursos);

    }

    public function send_email(){
        
        $to_name = 'Vladimir';
        $to_email = 'vladimir.pineda7@gmail.com';
        $data = array('name'=>"Sam Jose", "body" => "Test mail");
        $template= 'mail'; // resources/views/mail/xyz.blade.php
        Mail::send($template, $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Artisans Web Testing Mail');
            $message->from('gestiondecursosenlinea@gmail.com','Artisans Web');
        });
    }
}
