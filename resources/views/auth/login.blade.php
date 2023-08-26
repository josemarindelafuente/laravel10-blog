@extends('layouts.plantilla_web')

@section('title', 'Lista de cursos')

@section('content')
    
    <h1>Login de Usuarios</h1>

    <form action="{{ route('authenticate')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">          
          @error('email') <span class="text-danger"> *{{ $message }} </span>@enderror
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
          @error('password') <span class="text-danger"> *{{ $message }} </span>@enderror
        </div>

        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>
        
    

@endsection