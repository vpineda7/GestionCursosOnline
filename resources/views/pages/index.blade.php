@extends('layouts.app')

@section('content')
    <br>
    <!-- <h1>Welcom to Laravel</h1>-->
    <h1 class="text-center"><?php echo $title;?></h1>
    {{-- <p >Lorem ipsum doloraa sit amet consectetur adipisicing elit. Tempora, fugiat? Perferendis ipsam fugit aliquam soluta molestiae fuga, voluptatem quos sapiente nemo laboriosam maiores aut quod! Accusamus molestias ducimus ratione quidem?</p> --}}
    <div class="jumbotron text-center">
        <p>Esta es una aplicación en línea para la inscripción de listas de cursos con respectivos roles</p>
        <div>
            {{-- <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> --}}
            {{-- <a class="btn btn-success btn-lg" href="/register" role="button">Estudiante</a> --}}
            {{-- <a class="btn btn-success btn-lg" href="/register2" role="button">Profesor</a> --}}
            <a class="btn btn-success btn-lg" href="{{url('/register/estudiante')}}" role="button">Estudiante</a>
            <a class="btn btn-success btn-lg" href="{{url('/register/profesor')}}" role="button">Profesor</a>
            
        </div>
    </div>
    </div>    

@endsection