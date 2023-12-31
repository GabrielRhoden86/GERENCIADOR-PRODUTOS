<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'Categoria';
    public $timestamps = false;
    protected $fillable = ['nome'];

    public function categoria()
    {
        return $this->hasMany(Produto::class);
    }
}
