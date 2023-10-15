<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;


class ProdutoController extends Controller
{

    public function index()
    {

        $id = auth()->id();
        $produtos = Produto::where('usuario_id', $id)->get();
        return view('produtos.index', ["produtos" => $produtos]);
    }

    public function create()
    {
        $categorias = Categoria::all();

        return view('produtos.cadastro-produto', ['categorias' => $categorias]);
    }

    //StoreProdutoRequest  valida os campos dos formuário
    public function store(StoreProdutoRequest $request)
    {
        $data = [
            'nome' => trim(strip_tags($request->input('nome'))),
            'valor' => trim(strip_tags($request->input('valor'))),
            'categoria_id' => trim(strip_tags($request->input('categoria_id'))),
        ];

        $produto = new Produto($data);
        $usuario = auth()->user();
        $produto->usuario_id = $usuario->id;
        $produto->save();

        $categorias = Categoria::all();


        return redirect("produtos/cadastro-produto")->with('msg', true);
    }

    //Retorna a view e os arrays produto e categoria
    public function edit($id)
    {
        $categorias = Categoria::all();
        $produto = Produto::findOrFail($id);
        return view("produtos.editar-produto", ['produto' => $produto, "categorias" => $categorias]);
    }

    public function update(UpdateProdutoRequest $request)
    {
        $data = [
            'nome' => trim(strip_tags($request->input('nome'))),
            'valor' => trim(strip_tags($request->input('valor'))),
            'categoria_id' => trim(strip_tags($request->input('categoria_id'))),
        ];

        Produto::findOrFail($request->id)->update($data);
        return redirect("/produtos")->with('msgEdit', true);
    }

    public function destroy($id)
    {
        Produto::findOrFail($id)->delete();
        return redirect("/produtos")->with('msgDestroy', true);
    }
}
