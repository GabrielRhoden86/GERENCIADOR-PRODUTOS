<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;


class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::all();
        return view("categorias.index", ["categorias" => $categorias]);
    }

    public function create()
    {
        return view('categorias.cadastro-categoria');
    }


    public function store(StoreCategoriaRequest $request)
    {
        $data = [
            'nome' => trim(strip_tags($request->input('nome'))),
        ];
        $validatedData = Validator::make($data, [
            'nome' => 'required|max:100',
        ])->validate();

        $categoria = new Categoria($validatedData);
        $categoria->save();
        return redirect("/categorias/cadastro-categoria")->with('msg', true);
    }

    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view("categorias.editar-categoria", ['categoria' => $categoria]);
    }


    public function update(UpdateCategoriaRequest $request)
    {
        $data = [
            'nome' => trim(strip_tags($request->input('nome'))),
        ];

        Categoria::findOrFail($request->id)->update($data);
        return redirect("/categorias")->with('msgUpdate', true);
    }



    public function destroy($id)
    {
        Categoria::findOrFail($id)->delete();
        return redirect("/categorias")->with('msgDestroy', true);
    }
}
