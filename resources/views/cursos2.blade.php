
<br>
<br>    
<h5>Cursos inscritos:</h5>
@if(count($cursos)<=0)
<p class="font-italic font-weight-bold">Sin cursos inscritos</p>
@endif
@if(count($cursos)>0)
<div class="row">
    @foreach ($cursos as $curso)
        <div class="col-sm-6" >
        <div class="card" style="margin-bottom:20px;" id=@if (($curso->solicitud_baja)==0) "baja_no" @else "baja_si" @endif>
              <div class="card-body" style="height: 200px;">
                <h5 class="card-title">{{$curso->nombre_curso}}</h5>
                <p class="card-text">{{$curso->descripcion}}</p>
                <form action="{{ url('curso/'.$curso->id).'/dar_de_baja' }}" method="POST">
                    {{-- <a href="{{url('curso/'.$curso->id)}}" class="btn btn-primary">Ver</a> --}}
                    <a href="#" class="btn btn-primary">Ver</a>

                    {{ csrf_field() }}
        
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i>Dar de baja
                    </button>
                </form>
              </div>
            </div>
        </div>

    @endforeach
</div>    
@endif




