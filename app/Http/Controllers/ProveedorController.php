<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;


class ProveedorController extends Controller
{
    //
    public function listaProveedores()
    {
        $proveedores = Proveedor::all();
        return view('/proveedores/listaProveedores')->with ('proveedores', $proveedores);
    }

    public function registroProveedores()
    {
        return view('/proveedores/registroProveedores');
    }

    public function guardar(Request $req)
    {
        $proveedor=new Proveedor();
        $proveedor->id=$req->id;
        $proveedor->nombre=$req->nombre;
        $proveedor->contacto=$req->contacto;
        $proveedor->telefono=$req->telefono;
        $proveedor->correo=$req->correo;
        $proveedor->direccion=$req->direccion;
        $proveedor->estado = $req->estado;
    
        $proveedor->save();
        return redirect("/proveedores/listaProveedores");
        
    }

    public function mostrar($id)
    {
        $proveedor=Proveedor::find($id);
        return view('/proveedores/verProveedores')->with('proveedor',$proveedor);
    }

    public function editar($id)
    {
        $proveedor=Proveedor::find($id);
        return view('/proveedores/edicionProveedores')->with('proveedor',$proveedor);
    }

    public function actualizar(Request $req, $id)
    {
        $proveedor=Proveedor::find($id);
        $proveedor->id=$req->id;
        $proveedor->nombre=$req->nombre;
        $proveedor->contacto=$req->contacto;
        $proveedor->telefono=$req->telefono;
        $proveedor->correo=$req->correo;
        $proveedor->direccion=$req->direccion;
    
        $proveedor->save();
        return redirect("/proveedores/listaProveedores");
    }

    public function borrar($id)
    {
        $proveedor=Proveedor::find($id);

        $proveedor->estado="inactivo";
    
        $proveedor->save();

        return redirect("/proveedores/listaProveedores");
    }
    
}
