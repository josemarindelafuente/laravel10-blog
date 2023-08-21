<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\View\ViewName;

class CursoController extends Controller
{
    //
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate(28);
        return view('cursos.cursos', compact('cursos'));
    }
    
    public function create(){
        return view('cursos.create');

    }

    public function show($id = NULL){
        if ($id == NULL){
            return "no ingreso un id";
        }else{

            //$curso = Curso::where('id', $id)->first(); 
            $curso = Curso::find($id);

            if ($curso) {
            return view('cursos.show', compact('curso'));
            } else {
                return "curso no existente";
            }
        }
    }

    public function store(Request $request){

        //return $request->all();
        $curso = new Curso;
        $curso->name_curso = $request->curso;
        $curso->description_curso = $request->descripcion;
        $curso->categoria = $request->categoria;

        //return $curso;
        $curso->save();
        //echo "listo....";

        //return redirect()->route('curos.show', $curso->id);
        return redirect()->route('curos.show', $curso); // si pongo la instancia del curso
        // laravel entiende que tiene que usar su ID
    }

    public function edit($id){

        return $curso = Curso::find($id);
        //return view('cursos.edit', compact('curso'));

    }
}
