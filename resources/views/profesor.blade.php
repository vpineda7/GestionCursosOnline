@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profesor Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Usted ha ingresado como <strong>Profesor</strong>!
                    <a href="{{url('/crear_curso')}}" class="btn btn-success  float-right btn-primary">¡Crear curso!</a>
                
                    @include('cursos')
                    
                    <br>
                    <br>
                    <br>
                    {{-- <div class="container mt-3">
                        @yield('content')    
                    </div>   --}}
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
