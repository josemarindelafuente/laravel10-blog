@extends('layouts.plantilla_web')

@section('title', 'Lista de usuarios registrados')

@section('content')

<h1> Lista de usuario del sistema </h1>
<h3> {{ $usuarios->total() }} Usuarios registrados</h3>

<div>
    {{ $usuarios->links();}}
</div>

<div class="row">
    @foreach ($usuarios as $user)
        <div class="col-6 mt-2">
            <a href="">
                <b>{{ $user->name }}</b> | {{$user->email }} 
            </a>            
        </div>
    @endforeach
</div>
   

<br>

{{ $usuarios->links();}}
    
@endsection
    
