
<br>
<br>    
{{-- <p>test from cursos </h1> --}}
<h5>Cursos creados:</h5>
{{-- @foreach ($cursos as $service)
    {{$service}} <br>    
@endforeach --}}

{{-- funcionó --}}
{{-- @if(count($cursos)>0)
<ul class="list-group">
    @foreach ($cursos as $curso)
        <li class="list-group-item">{{$curso->nombre_curso}}</li>
    @endforeach
</ul>
@endif --}}

@if(count($cursos)>0)
<div class="row">
    @foreach ($cursos as $curso)
        <div class="col-sm-6" >
            <div class="card" style="margin-bottom:20px;">
              <div class="card-body" style="height: 200px;">
                <h5 class="card-title">{{$curso->nombre_curso}}</h5>
                <p class="card-text">{{$curso->descripcion}}</p>
                <a href="#" class="btn btn-primary">Editar</a>
              </div>
            </div>
        </div>
    
{{-- <h2 class="h3 pb-2 font-weight-normal border-bottom">2<sup>nd</sup> example with cards</h2>
		<ul class="list-group list-group-horizontal align-items-stretch flex-wrap">
			<li class="list-group-item border-0">
				<div class="card my-3">
	                <h5 class="card-title">{{$curso->nombre_curso}}</h5>
                    <p class="card-text">{{$curso->descripcion}}</p>
                    <a href="#" class="btn btn-primary">Editar</a>
				</div>
			</li>
			
		</ul>
	</section>
</div>
 --}}



    @endforeach
</div>    
@endif




