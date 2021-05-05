<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get("/categoria", [CategoriaController::class, "listar"])->name("categoria_listar");
    Route::get("/categoria/crear", [CategoriaController::class, "crear"])->name("categoria_crear");
    Route::post("/categoria", [CategoriaController::class, "guardar"])->name("categoria_guardar");
    Route::get("/categoria/{id}", [CategoriaController::class, "mostrar"])->name("categoria_mostrar");
    Route::get("/categoria/{id}/editar", [CategoriaController::class, "editar"])->name("categoria_editar");
    Route::put("/categoria/{id}", [CategoriaController::class, "modificar"])->name("categoria_modificar");
    Route::delete("/categoria/{id}", [CategoriaController::class, "eliminar"])->name("categoria_eliminar");

    Route::resource("curso", CursoController::class)->middleware("auth");

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
