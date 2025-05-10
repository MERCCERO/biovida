<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductosPedido extends Model
{
    use HasFactory;
    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class);
    }
}
