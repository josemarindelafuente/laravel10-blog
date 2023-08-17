@extends('layouts.plantilla_web')

@section('title', $curso->name_curso )

@section('content')

<h1>curso: {{ $curso->name_curso }} </h1>
<div>{{ $curso->categoria }}</div>

<p><a href="{{ route('cursos') }}"> Volver </a></p>

<p>
    {{ $curso->description_curso }}
</p>
    
@endsection