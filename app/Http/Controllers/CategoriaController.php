<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{


    public function index()
    {
        $categorias = Categoria::all();

        return view("Categoria", ["categorias" => $categorias]);
    }


    public function create()
    {
        return view('cadastro-categoria');
    }

    public function store(Request $request)
    {
        $categoria = new Categoria;
        $categoria->nome = $request->nome;
        $categoria->save();
        return redirect("/cadastro-categoria")->with('msg', true);
    }
    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view("editar-categoria", ['categoria' => $categoria]);
    }

    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $event = Categoria::findOrFail($request->id)->update($data);
        return redirect("/categoria")->with('msgUpdate', true);
    }

    public function destroy($id)
    {
        $event = Categoria::findOrFail($id)->delete();
        return redirect("/categoria")->with('msgDestroy', true);
    }
}
