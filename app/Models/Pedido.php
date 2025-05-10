<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    public function clientes()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function productospedidos()
    {
        return $this->belongsToMany(ProductosPedido::class);
    }
}
