@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profesor Dashboard- Creación de curso
                    
                {{-- <a class="btn btn-success  float-right btn-primary" href="{{ url('/profesor') }}">Cancelar</a> --}}
                <a class="btn btn-success  float-right btn-primary" href="{{ URL::previous() }}">Regresar</a>
                
                </div>
                
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        
            
                <div class="card-header">
                <form action="{{ url('curso') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
            
                        
                        <div class="form-group">
                          <label>Nombre curso</label>
                          <input type="text" class="form-control" placeholder="Nombre del curso" id="nombre_curso" name="nombre_curso">
                          
                        </div>
                        <div class="form-group">
                                <label>Descripción del curso</label>
                                <input type="text" class="form-control" placeholder="Descripción del curso" id="descripcion" name="descripcion">        
                        </div>
                        <button type="submit" class="btn btn-primary">Crear curso</button>
                    </div>
                    </form>
                </div>    
            
                    
          

                {{-- <div class="panel-body">                
                        <!-- New Curso Form -->
                        <form action="{{ url('curso') }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}
                
                            <!-- Curso Name -->
                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Curso</label>
                                <div class="col-sm-6">
                                    <input type="text" name="nombre_curso" id="nombcre_curso" class="form-control">
                                </div>
                            </div>
                
                            <!-- Add Curso Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-plus"></i> Crear curso
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div> --}}


            </div>
        </div>
    </div>
</div>
</div>
@endsection



