<?php

namespace App\Services;

class ValidaUsuarioApi

{
    public function validate($data)
    {
        if (!isset($data['id']) || !is_int($data['id'])) {
            echo 'O campo id é obrigatório e deve ser sum número inteiro';
        }

        if (!isset($data['nome']) || !is_string($data['nome'])) {
            echo 'O campo nome é obrigatório e deve ser uma string';
        }

        if (!isset($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            echo 'O campo email é obrigatório e deve ser um endereço de email válido';
        }
    }
}
