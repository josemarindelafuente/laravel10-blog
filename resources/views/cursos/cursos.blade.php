@extends('layouts.plantilla_web')

@section('title', 'Lista de cursos')

@section('content')
    
    <h1>Lista de cursos de nuestra plataforma
        <a href="{{ route('curso.create') }}">
             <button type="button" class="btn btn-primary">Agregar +</button>
        </a>
       
    </h1>
    <h3> {{ $cursos->total() }} Cursos</h3>

  
    <div>
        {{ $cursos->links();}}
    </div>

    <div class="row">
        
            @foreach ($cursos as $curso)
                <div class="col-3">
                    <div class="card mt-4">
                        <div class="card-body">
                            <a href="{{ route('cursos.show', $curso->slug) }}">
                                {{ $curso->name_curso }}
                            </a>  
                            <br>
                            <small style="font-size: 10px; color:brown;">slug link: {{ $curso->slug }}</small> 

                        </div>
                    </div>
                </div>
            @endforeach
        
    </div>

    <br>


    {{ $cursos->links();}}
    

@endsection