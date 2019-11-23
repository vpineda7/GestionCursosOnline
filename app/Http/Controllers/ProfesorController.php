<?php

namespace App\Http\Controllers;
use App\Cursos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfesorController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:profesor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //$cursos =Cursos::with('cursos')->get();
        //$id=1;
        // $cursos = Cursos::find(1);
        
        //$cursos =  Cursos::All(); //funcionó
        
        // $cursos = array(
        //     'title'=>'Services', 
        //     'services'=> ['Web Design', 'Programming', 'SEO']
        // );
        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);
        $cursos = Cursos::where('owner_id', auth()->user()->id)->get();
        
        return view('profesor')-> with('cursos', $cursos);
    }

    
}
