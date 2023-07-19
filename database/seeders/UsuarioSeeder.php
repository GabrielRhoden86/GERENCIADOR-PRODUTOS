<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        Usuario::create([
            "name" => "Gabriel",
            "email" => "gabrielrhoden@gmail.com",
            "password" => Hash::make("230803")
        ]);
    }
}
