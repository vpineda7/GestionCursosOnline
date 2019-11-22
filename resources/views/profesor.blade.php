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

                    You are logged in as <strong>Profesor</strong>!
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
