@extends('layouts.app')

@section('content')
    {{-- <h1>Services</h1> --}}
    <h1>{{$title}}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, fugiat? Perferendis ipsam fugit aliquam soluta molestiae fuga, voluptatem quos sapiente nemo laboriosam maiores aut quod! Accusamus molestias ducimus ratione quidem?</p>
    @if(count($services)>0)
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection
