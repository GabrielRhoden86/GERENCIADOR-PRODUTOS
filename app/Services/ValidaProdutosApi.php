<?php

namespace App\Services;

class ValidaProdutosApi

{
    public function validate($data)
    {
        if (!isset($data['id']) || !is_int($data['id'])) {

            echo 'O campo id é obrigatório e deve ser sum número inteiro';
        }

        if (!isset($data['nome']) || !is_string($data['nome'])) {
            echo 'O campo nome é obrigatório e deve ser uma string';
        }

        if (!isset($data['valor']) || !is_numeric($data['valor'])) {

            echo 'O campo valor é obrigatório e deve ser um número ';
        }

        if (!isset($data['usuario_id']) || !is_int($data['usuario_id'])) {
            echo 'O campo usuario_id é obrigatório e deve ser um número inteiro';
        }

        if (!isset($data['categoria_id']) || !is_int($data['categoria_id'])) {
            echo 'O campo categoria_id é obrigatório e deve ser um número inteiro';
        }
    }
}
