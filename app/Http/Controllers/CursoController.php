<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\View\ViewName;

class CursoController extends Controller
{
    //
    public function index(){
        $cursos = Curso::paginate(30);
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
}
