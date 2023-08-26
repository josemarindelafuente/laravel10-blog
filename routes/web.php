<?php
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginRegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('users', [UserController::class, 'listar_usuarios'])->name('usuarios');


Route::get('cursos' , [CursoController::class, 'index'])->name('cursos');
Route::get('cursos/create', [CursoController::class, 'create'])->name('curso.create');
Route::get('cursos/{slug?}', [CursoController::class, 'show'])->name('cursos.show');
//Route::get('cursos/{id?}/edit', [CursoController::class, 'edit'])->name('cursos.editar');
Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.editar');
Route::put('cursos/{curso}/update',[CursoController::class, 'update'])->name('cursos.update');
Route::post('cursos' , [CursoController::class, 'store'])->name('cursos.store');
Route::delete('cursos/{curso}/delete', [CursoController::class, 'destroy'])->name('cursos.destroy');


Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('login', 'login')->name('login');
    Route::post('authenticate', 'authenticate')->name('authenticate');
    Route::get('logout', 'logout')->name('logout');
});