<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        Produto::create([
            'nome' => 'Sal',
            'valor' => 6,
            'usuario_id' => 1,
            'categoria_id' => 1
        ]);
    }
}
