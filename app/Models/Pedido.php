<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    // Remover 'data_pedido' do array fillable, pois agora será gerenciado automaticamente
    protected $fillable = [
        'cliente_id',
        'produto',
        'quantidade',
        'preco_unitario',
        'status_pedido',
    ];

    // Definir o relacionamento com o cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
    }
}
