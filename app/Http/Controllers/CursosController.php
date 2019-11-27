<?php
namespace App\Http\Controllers;
use Validator, Input, Redirect; 
use App\Cursos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CursosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:profesor');
        // $this->middleware('auth:users');
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crear_curso');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) //function post
    {
        $validator = Validator::make($request->all(), [
            'nombre_curso' => 'required|max:200',
            'descripcion' => 'required|max:200',
        ]);
    
        if ($validator->fails()) {
            return redirect('/profesor')    
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Cursos;
        $task->nombre_curso = $request->nombre_curso;
        $task->descripcion = $request->descripcion;
        $task->owner_id = Auth::user()->id;
        $task->save();
        return redirect('profesor');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy(Cursos $curso)
    {
        $curso->delete();
        return redirect('profesor');
    }
}
