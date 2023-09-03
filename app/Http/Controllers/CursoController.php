<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Cursos_categorias;
use Illuminate\View\ViewName;
use App\Http\Requests\StoreCursoRequest; // validaciones para el formulario store
use Illuminate\Support\Str;

class CursoController extends Controller
{
    //
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate(28);
        return view('cursos.cursos', compact('cursos'));
    }
    
    public function create(){
        $categorias = Cursos_categorias::All();        
        return view('cursos.create', compact('categorias'));

    }

    public function show($slug = NULL){

            $curso = Curso::where('slug', $slug)->first(); 
            //$curso = Curso::find($slug);
            // no funciona el Find con slug?

            if ($curso) {
            return view('cursos.show', compact('curso'));
            } else {
                return "curso no existente";
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
                $curso->slug = Str::slug($request->curso);
                $curso->description_curso = $request->descripcion;
                $curso->categoria = $request->categoria;
                $curso->id_categoria = $request->categoria;

                //return $curso;
                $curso->save();
                
        /*        
        $curso = Curso::create([
            'name' => $request->curso, 
            'description_curso' => $request->descripcion,
            'categoria' => $request->categoria
        ]);
        */

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


    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos');
    }
}
