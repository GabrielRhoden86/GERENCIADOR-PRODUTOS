<?php

namespace App\Models;

use App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'Produto';
    public $timestamps = false;
    protected $fillable = ['nome', 'valor', 'usuario_id', 'categoria_id'];


    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
