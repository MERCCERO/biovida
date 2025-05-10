<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;


class ProveedorController extends Controller
{
    //
    public function listaProveedores()
    {
        return view('/proveedores/listaProveedores');
    }

    public function registroProveedores()
    {
        return view('/proveedores/registroProveedores');
    }

    public function guardar(Request $req)
    {
        $proveedor=new Proveedor();
        $proveedor->id=$req->id;
        $proveedor->nombres=$req->nombre;
        $proveedor->contacto=$req->contacto;
        $proveedor->telefono=$req->telefono;
        $proveedor->correo=$req->correo;
        $proveedor->direccion=$req->direccion;
        $proveedor->estado=$req->estado;
    
        $proveedor->save();
        
    }

    public function mostrar($id)
    {
        
    }

    public function editar($id)
    {
        
    }

    public function actualizar(Request $request, $id)
    {
        
    }

    public function borrar($id)
    {
        
    }
}
