<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(title="Gerenciador de Produtos - API", version="1.0")
 */

use App\Models\Produto;
use App\Models\Usuario;
use App\Services\ValidaProdutosApi;
use App\Services\ValidaUsuarioApi;

class ApiController extends Controller
{
    public function index()
    {
        return view('apiHome');
    }
    /**
     * @OA\Get(
     *     path="/api/produtos",
     *     @OA\Response(response="200", description="Lista de produtos"),
     *     externalDocs={
     *         "description": "Link para o endpoint",
     *         "url": getenv('SERVER_URL') . "/api/produtos"
     *     }
     * )
     */

    public function showProdutos()
    {
        $produtos = Produto::with(['categoria', 'usuario'])->get();

        // Valide os dados antes de enviá-los ao cliente
        if (!$produtos->isEmpty()) {

            $validator = new ValidaProdutosApi();
            foreach ($produtos as $produto) {
                $validator->validate($produto->toArray());
            }
            return response()
                ->json($produtos)
                ->setEncodingOptions(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        } else {
            return response()->json([
                "message" => "Não há produtos cadastrados"
            ], 404);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/usuario/{id}",
     *     @OA\Response(response="200", description="Detalhes do usuário"),
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID do usuário",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\ExternalDocumentation(
     *         description="Link para o endpoint",
     *         url= getenv('SERVER_URL') . "/api/usuario/{id}"
     *     )
     * )
     */

    public function showUsuario($id)
    {
        $usuarios = Usuario::with('produto.categoria')->where('id', $id)->first();

        // Valide os dados antes de enviá-los ao cliente
        if ($usuarios) {

            $validator = new ValidaUsuarioApi();
            foreach ($usuarios as $usuario) {

                if (is_object($usuario)) {
                    $validator->validate($usuario->toArray());
                }
            }
            return response()
                ->json($usuarios)
                ->setEncodingOptions(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        } else {
            return response()
                ->json(['error' => 'Usuário não encontrado'], 404)
                ->setEncodingOptions(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }
    }
}
