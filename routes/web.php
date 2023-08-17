<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('users', [UserController::class, 'listar_usuarios'])->name('usuarios');


Route::get('cursos' , [CursoController::class, 'index'])->name('cursos');
Route::get('cursos/create', [CursoController::class, 'create'])->name('curso.create');
Route::get('cursos/show/{id?}', [CursoController::class, 'show'])->name('curos.show');
