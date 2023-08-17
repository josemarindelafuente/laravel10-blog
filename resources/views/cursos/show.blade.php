@extends('layouts.plantilla_web')

@section('title', $curso->name_curso )

@section('content')

<h1>Curso <b>"{{ $curso->name_curso }}"</b></h1>

<div>
    <span class="badge text-bg-success">Categoría: {{ $curso->categoria }}</span>
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

@endsection