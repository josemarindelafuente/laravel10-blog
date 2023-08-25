@extends('layouts.plantilla_web')

@section('title', $curso->name_curso )

@section('content')

<h1>Curso <b>"{{ $curso->name_curso }}"</b></h1>

<div>
    <span class="badge text-bg-success">Categoría: {{ $curso->categoria }}</span> | <a href="{{route('cursos.editar', $curso->id)}}">[Editar Curso]</a>
</div>

<hr>

<p>
    <b>Detalles del curso:</b><br>
    {{ $curso->description_curso }}
</p>

<hr>

<a href="{{ route('cursos') }}"> 
<button type="button" class="btn btn-outline-primary"> << Volver </button>
</a>

<br><br>

<form action="{{ route('cursos.destroy', $curso )}}" method="POST">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-outline-danger"> Eliminar este curso </button>
</form>


@endsection