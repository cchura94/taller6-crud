<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function listar(Request $request)
    {
        if($request->buscar){
            $categorias = Categoria::where("nombre", "like", "%".$request->buscar."%")->get();
        }else{
            $categorias = Categoria::get();
        }
       
        return view("categoria.listar", compact("categorias"));
    }

    public function crear()
    {
        return view("categoria.crear");
    }

    public function guardar(Request $request)
    {
        $cat = new Categoria;
        $cat->nombre = $request->nombre;
        $cat->detalle = $request->detalle;
        $cat->save();

        return redirect("/categoria");
    }

    public function mostrar($id)
    {
        $cat = Categoria::find($id);
        return view("categoria.mostrar", compact("cat"));
    }

    public function editar($id)
    {
        $cat = Categoria::find($id);
        return view("categoria.editar", compact("cat"));
    }

    public function modificar($id, Request $request)
    {
        $cat = Categoria::find($id);
        $cat->nombre = $request->nombre;
        $cat->detalle = $request->detalle;
        $cat->save();

        return redirect("/categoria")->with("mensaje", "Categoria modificada");
    }

     public function eliminar($id)
    {
        $cat = Categoria::find($id);
        $cat->delete();
        
        return redirect("/categoria")->with("mensaje", "Categoria modificada");

    }

}
