<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([UsuarioSeeder::class]);
        $this->call([ProdutoSeeder::class]);
        $this->call([CategoriaSeeder::class]);
    }
}
