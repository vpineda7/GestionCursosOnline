@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle de estudiante por curso:
               <a class="btn btn-primary  float-right " href="{{url('/curso/main_search/'.$curso_id) }}" >Agregar estudiante</a>
               <a class="btn btn-success  float-right" style="margin-right:10px" href="{{ URL::previous() }}">Regresar</a>
                
                </div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if(count($estudiantes)>0)
                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h3 id="myModalLabel">Delete</h3>
                        </div>
                        <div class="modal-body">
                            <p></p>
                        </div>                        
                </div>

                {{-- <ul class="list-group"> --}}
                <table class="table table-striped table-hover table-users">
                    <thead>
                        <tr>                
                            <th class="hidden-phone">Nombre del estudiante</th>
                            <th class="hidden-phone">Correo</th>
                            <th>Nombre del Curso</th>
                            {{-- <th>Profesor</th> --}}
                            <th>Solicitud de baja</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($estudiantes as $estudiante)
                            {{-- <li class="list-group-item">{{$estudiante-> nombre_curso}}</li> --}}
                            {{-- <li class="list-group-item"> El estudiante:{{$estudiante -> name}}
                            >> cursa la materia {{$estudiante -> nombre_curso}}</li> --}}
                            <tr>
                                <td class="hidden-phone">{{$estudiante-> name}}</td>
                                <td>{{$estudiante -> email}}</td>
                                <td>{{$estudiante -> nombre_curso}}</td>
                                {{-- @if ($estudiante->solicitud_baja <= 0) --}}
                                    <td><a class="btn nohover btn-success text-white">No</span></td>
                                {{-- @else
                                    <td><a class="btn nohover btn-warning text-white">Si</span></td>    
                                @endif --}}
                                <td>
                                    {{-- <a href="#" class="btn btn-danger" role="button" data-title="johnny" data-id="1">Eliminar</a></td> --}}

                                    <form action="{{ url('curso/'.$estudiante->curso_id.'/'.$lista_id[0]->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>Eliminar
                                        </button>
                                    </form>
                                </tr>
                    @endforeach
                    {{-- </ul> --}}
                        </tbody>
                    </table>
                        
                @endif

	              
            </div>
        </div>
    </div>
</div>
</div>

@endsection



