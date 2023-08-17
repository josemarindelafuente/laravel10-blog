<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function listar_usuarios(){

        $usuarios = User::paginate(45);
        return view('users.listar', compact('usuarios'));

    }
}
