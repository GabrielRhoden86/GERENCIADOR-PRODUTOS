<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'Produto';
    public $timestamps = false;

    protected $fillable = ['nome', 'valor', 'usuario_id', 'categoria_id'];
}
