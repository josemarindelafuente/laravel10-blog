@extends('layouts.plantilla_web')

@section('title', 'Editar un curso')

@section('content')

<h1>Editar curso</h1>

<form action="{{ route('cursos.update', $curso)}}" method="POST">
    
    @csrf
    @method('put')



    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="curso" class="form-label">Nombre del Curso</label>
                <input type="text"
                class="form-control" 
                name="curso"
                value="{{ old('curso', $curso->name_curso ) }}"
                >
              </div>
              @error('curso') <span class="text-danger"> *{{ $message }} </span>@enderror
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label class="form-label">Categoría</label>
                <select class="form-select" name="categoria">
                <option value="NULL">ELija una categoria para el curso</option>
                <option selected value="1">Diseño Web</option>
                <option value="2">Programación Web</option>
              </select>
            </div>
            @error('categoria') <span class="text-danger"> *{{ $message }} </span>@enderror
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <label class="form-label">Descripción del curso</label>
                <textarea name="descripcion" class="form-control" rows="3">{{ old('descripcion',$curso->description_curso) }}</textarea>
            </div>
            @error('descripcion') <span class="text-danger"> *{{ $message }} </span>@enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Editar este Curso</button>
</form>
    
@endsection