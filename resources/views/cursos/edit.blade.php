@extends('layouts.plantilla_web')

@section('title', 'Editar un curso')

@section('content')

<h1>Editar curso</h1>

<form action="{{ route('cursos.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="curso" class="form-label">Nombre del Curso</label>
                <input type="text" class="form-control" name="curso" >
              </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label class="form-label">Categoría</label>
                <select class="form-select" name="categoria">
                <option selected Value="NULL">ELija una categoria para el curso</option>
                <option value="1">Diseño Web</option>
                <option value="2">Programación Web</option>
              </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <label class="form-label">Descripción del curso</label>
                <textarea name="descripcion" class="form-control" rows="3"></textarea>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Editar este Curso</button>
</form>
    
@endsection