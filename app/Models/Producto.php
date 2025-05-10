<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function productospedidos()
    {
        return $this->belongsToMany(ProductosPedido::class);
    }
    public function envases()
    {
        return $this->belongsToMany(Envase::class);
    }

    public function embalajes()
    {
        return $this->belongsToMany(Embalaje::class);
    }
    public function utensilios()
    {
        return $this->belongsToMany(Utensilio::class);
    }
    public function papelerias()
    {
        return $this->belongsToMany(Papeleria::class);
    }
    public function proveedores()
    {
        return $this->belongsTo(Proveedor::class);
    }
}
