<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Usuario;

class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();

        return view('produtos', ["produtos" => $produtos]);
    }

    public function create()
    {
        return view('cadastro-produto');
    }

    public function store(Request $request)
    {
        // $usuario = new Usuario();
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->usuario_id = $request->valor;
        $produto->categoria_id = $request->categoria_id;
        $usuario = auth()->user();
        $produto->usuario_id = $usuario->id;
        $produto->save();

        return redirect("/cadastro-produtos")->with('msg', true);
    }


    public function show()
    {
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view("editar-produto", ['produto' => $produto]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $event = Produto::findOrFail($request->id)->update($data);
        return redirect("/categoria")->with('msgEdit', true);
    }

    public function destroy($id)
    {
        $event = Produto::findOrFail($id)->delete();
        return redirect("/produtos")->with('msgDestroy', true);
    }
}
