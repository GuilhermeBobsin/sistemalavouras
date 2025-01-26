<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'cidade',
        'telefone'
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'cliente_id', 'id');
    }
}
