<?php

namespace App\Services;

class ValidaProdutosApi

{
    public function validate($data)
    {
        if (!isset($data['id']) || !is_int($data['id'])) {
            throw new \Exception('O campo id é obrigatório e deve ser sum número inteiro');
        }

        if (!isset($data['nome']) || !is_string($data['nome'])) {
            throw new \Exception('O campo nome é obrigatório e deve ser uma string');
        }

        if (!isset($data['valor']) || !is_numeric($data['valor'])) {
            throw new \Exception('O campo valor é obrigatório e deve ser um número');
        }

        if (!isset($data['usuario_id']) || !is_int($data['usuario_id'])) {
            throw new \Exception('O campo usuario_id é obrigatório e deve ser um número inteiro');
        }

        if (!isset($data['categoria_id']) || !is_int($data['categoria_id'])) {
            throw new \Exception('O campo categoria_id é obrigatório e deve ser um número inteiro');
        }

        // // Verifique se o campo 'email' está presente e é uma string válida de email
        // if (!isset($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        //     throw new \Exception('O campo email é obrigatório e deve ser um endereço de email válido');
        // }
    }
}
