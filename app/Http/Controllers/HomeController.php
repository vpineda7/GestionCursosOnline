<?php
namespace App\Http\Controllers;
use Validator, Redirect; 
use App\Listas;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
            ->select('cursos.*')
            ->join('cursos', 'listas.curso_id', '=', 'cursos.id')
            ->join('users', 'listas.user_id', '=', 'users.id')
            ->where('listas.user_id', '=', $user_id)
            ->get();   
        
        return view('home')-> with('cursos', $cursos);

    }
}
