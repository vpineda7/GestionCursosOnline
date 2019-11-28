@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buscar estudiantes para el curso:
               <a class="btn btn-success  float-right" style="margin-right:10px" href="{{ url('/profesor') }}">Regresar</a>
                
                </div>
                <br>
                <br>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                {{-- <form class="col-md-12 col-md-offset-6" method="GET" action="{{ url('/curso/search/'.$lista_id[0]->id) }}"> --}}
                  <form class="col-md-12 col-md-offset-6" method="GET" action="{{ url('/curso/search/'.$curso_id) }}">
                        <div class="row">
                          <div class="col-md-6">
                            <input type="text" name="search" class="form-control" placeholder="Correo electrónico" value="">
                          </div>
                          <div class="col-md-6">
                            <button class="btn btn-primary">Buscar</button>
                          </div>
                        </div>
                  </form>    
                
                <br><br>
                        <p></p>
                      <form action="{{ url('curso/'.$curso_id) }}" method="POST">
                        {{ csrf_field() }}
                      <table class="table table-bordered">
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th></th>
                        </tr>
                        @if(count($searchResult)>0)
                          @foreach($searchResult as $user)
                          <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                            <input name="id" value="{{$user->id}}" type="hidden">
                            <button type="submit" class="btn btn-success text-white" >Agregar a curso</button>
                            
                            {{-- {{ Form::button('Agregar a curso', ['type'=>'submit', 'class'=>'btn btn-success text-white'])}} --}}
                            </td>
                          </tr>
                          @endforeach
                        @else
                        <tr>
                          <td colspan="4">Result not found.</td>
                        </tr>
                        @endif
                      </table>
                    </form>
                
	              
            </div>
        </div>
    </div>
</div>
</div>

@endsection



