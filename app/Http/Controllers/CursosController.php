<?php
namespace App\Http\Controllers;
use Validator, Input, Redirect; 
use App\Cursos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

        $curso = new Cursos;
        $curso->nombre_curso = $request->nombre_curso;
        $curso->descripcion = $request->descripcion;
        $curso->owner_id = Auth::user()->id;
        $curso->save();

        $to_name = Auth::user()->name;
        $to_email = Auth::user()->email;
        $data2 = array('name'=>$to_name, 'nombre_curso' => $curso['nombre_curso'], 'descripcion'=>$curso['descripcion']);
        $template= 'mail_crear_curso'; // resources/views/mail/xyz.blade.php
        Mail::send($template, $data2, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Creación de curso en el Sistema de Gestion en linea de cursos online');
            $message->from('gestiondecursosenlinea@gmail.com','Gestión de Cursos en Linea');
        });


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
