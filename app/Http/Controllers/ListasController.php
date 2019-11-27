<?php


namespace App\Http\Controllers;
use Validator, Redirect; 
use App\Listas;
use App\User;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ListasController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:profesor'); //funciona >> muestra detalle de estudiantes
        //$this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($curso_id)
    {
        // //$estudiantes = Listas::where('curso_id', $id_curso)->get();
        // $estudiantes = \App\Listas::with(['user','curso'])->all();
        // //retrieve user name 
        // $estudiantes->user->user;  
        // //retrieve category name 
        // $estudiantes->curso->nombre_curso;

        
        $estudiantes = DB::table('listas')
            ->select('*')
            ->join('cursos', 'listas.curso_id', '=', 'cursos.id')
            ->join('users', 'listas.user_id', '=', 'users.id')
            ->where('listas.curso_id', '=', $curso_id)
            ->get();   
        $lista_id = DB::table('listas')
            ->select('listas.id')
            ->join('cursos', 'listas.curso_id', '=', 'cursos.id')
            ->join('users', 'listas.user_id', '=', 'users.id')
            ->where('listas.curso_id', '=', $curso_id)
            ->get();    

        return view('mostrar_cursos_estudiantes')-> with('estudiantes', $estudiantes)->with('lista_id',$lista_id)->with('curso_id',$curso_id);
    }


    public function main_search($curso_id){
        //se agrega las dos variables sin evaluación curso_id y search_reuslt para que no de error al mostarr template
        $searchResult=[];
        return view('search_estudiantes')-> with('searchResult',$searchResult)->with('curso_id',$curso_id);
    }


    public function search($curso_id){
        // $searchResult=[];
        // return view('search_estudiantes')-> with('curso_id',$curso_id)-> with('searchResult',$searchResult);

        $email = Input::get('search');
        // $searchResult = User::where('email', 'LIKE', "%{$email}%")->get(); //funciona
        
        $usuarios_existentes = DB::table('listas')
                            ->select('users.id')
                            ->join('cursos', 'listas.curso_id', '=', 'cursos.id')
                            ->join('users', 'listas.user_id', '=', 'users.id')
                            ->where('listas.curso_id','=',"{$curso_id}")
                            ->distinct('users.id')
                            ->get()->pluck('id')->toArray();;

        $searchResult = DB::table("users")
                            ->select('users.*')
                            // ->where('email', 'LIKE', "%{$email}%")
                            // ->whereNotIn('users.id',$usuarios_existentes->get('id'))
                            ->whereNotIn('id',$usuarios_existentes)
                            ->get();      
        
        

        return view('search_estudiantes')-> with('searchResult',$searchResult)-> with('email',$email)->with('curso_id',$curso_id);
        // return Response()->json($searchResult);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $curso_id)
    {
        //
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
            
        ]);
    
        if ($validator->fails()) {
            return redirect('/')    
                ->withInput()
                ->withErrors($validator);
        }

        // dd($request->all());  //to check all the datas dumped from the form
   
        // $someName = $request->id; 

        $lista = new Listas;
        $lista->curso_id = $curso_id;
        $lista->user_id = $request->id;
        $lista->solicitud_baja= 0;
        $lista->save();
        return redirect('profesor');
        
        // return Response()->json($request);

    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar_resultado($curso_id)
    {
        //
        $email = Input::get('search');
        $searchResult = User::where('name', 'LIKE', "%{$email}%")->get(1);
        return view('search_estudiantes')-> with('searchResult',$searchResult)-> with('email',$email);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $curso_id, $lista_id)
    {
        $student = Listas::findOrFail($lista_id);
        $student->delete();
        return back();
    }
}
