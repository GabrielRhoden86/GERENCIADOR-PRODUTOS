<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Usuario;

class ApiController extends Controller
{

    public function produtos()
    {
        $produtos = Produto::with(['categoria', 'usuario'])->get();

        return response()
            ->json($produtos)
            ->setEncodingOptions(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function usuario($id)
    {
        $usuario = Usuario::with('produto.categoria')->where('id', $id)->first();
        if ($usuario) {

            return response()
                ->json($usuario)
                ->setEncodingOptions(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        } else {

            return response()
                ->json(['error' => 'Usuário não encontrado'], 404)
                ->setEncodingOptions(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }
    }
}
