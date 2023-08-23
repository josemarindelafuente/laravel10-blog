<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\View\ViewName;
use App\Http\Requests\StoreCursoRequest; // validaciones para el formulario store

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

    public function store(StoreCursoRequest $request){

        /*
        //estas validaciones las vamos a hacer de otra manera, usando un form request
        // estas validaciones las copiamos y las pegamos en el archivo del form request que creamos
        // en este caso es : StoreCursoRequest

        $request->validate([
         'curso' => 'required',
         'categoria' => 'required',
         'descripcion' => 'required'
        ]);
        */


        //return $request->all();
        $curso = new Curso;
        $curso->name_curso = $request->curso;
        $curso->description_curso = $request->descripcion;
        $curso->categoria = $request->categoria;

        //return $curso;
        $curso->save();
        //echo "listo....";

        //return redirect()->route('curos.show', $curso->id);
        return redirect()->route('cursos.show', $curso); // si pongo la instancia del curso
        // laravel entiende que tiene que usar su ID
    }

    /*public function edit($id){
        $curso = Curso::find($id);
        return view('cursos.edit', compact('curso'));
    }*/

    public function edit(Curso $curso){
        //return $curso;
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request ,Curso $curso){
        //return $curso->categoria;
        //return $request->all();

        //validacion del formulario
        $request->validate([
            'curso' => 'required|min:3|max:100',
            'categoria' => 'required',
            'descripcion' => 'required'
           ]);

        $curso->name_curso = $request->curso;
        $curso->description_curso = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        //return redirect()->route('curos.show', $curso->id);
        return redirect()->route('cursos.show', $curso); // si pongo la instancia del curso
        // laravel entiende que tiene que usar su ID
    }
}
