<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Proveedor;

class ProductoController extends Controller
{
    //
    
    public function registros(){
        $productos = Producto::all();
    return view('productos.listaProductos', compact('productos'));
        
    }

    public function guardar(Request $req){
        
      $productos = new Producto();

        // Asignar valores del formulario
        $productos->nombre = $req->nombre;
        $productos->descripcion = $req->descripcion;
        $productos->precio = $req->precio;
        $productos->existencia = $req->existencia;
        $productos->descuento = $req->descuento;
        $productos->modelado = $req->modelado;
        $productos->estado = $req->estado;

        // Valores por defecto para las imágenes
        $productos->imagen1 = "storage/imagenes/productos/producto_default.jpg";
        $productos->imagen2 = "storage/imagenes/productos/producto_default.jpg";
        $productos->imagen3 = "storage/imagenes/productos/producto_default.jpg";

        // Guardar primero para generar el ID
        $productos->save();

        // Imagen 1
        if ($req->hasFile('imagen')) {
            $imagen = $req->file('imagen');
            $extension = $imagen->extension();
            $nombre = "cliente_" . $productos->id . "_1." . $extension;
            $ruta = $imagen->storeAs('imagenes/productos', $nombre, 'public');
            $productos->imagen = asset('storage/' .$ruta);
            $productos->save();
        }

        // Imagen 2
        if ($req->hasFile('imagen')) {
            $imagen = $req->file('imagen');
            $extension = $imagen->extension();
            $nombre = "cliente_" . $productos->id . "_1." . $extension;
            $ruta = $imagen->storeAs('imagenes/productos', $nombre, 'public');
            $productos->imagen = asset('storage/' .$ruta);
            $productos->save();
        }

        // Imagen 3
        if ($req->hasFile('imagen')) {
            $imagen = $req->file('imagen');
            $extension = $imagen->extension();
            $nombre = "cliente_" . $productos->id . "_1." . $extension;
            $ruta = $imagen->storeAs('imagenes/productos', $nombre, 'public');
            $productos->imagen = asset('storage/' .$ruta);
            $productos->save();
        }

        // Guardar de nuevo con rutas de imágenes actualizadas
        $productos->save();

        return redirect('/productos/registros');
    }

    public function editar($id){
        $productos = Producto::find($id);
        return view('/productos/editarProductos')->with('producto',$productos);
        
    }
    public function detalle($id) {
    $producto = Producto::find($id);

    if (!$producto) {
        abort(404); // O redirigir a una vista personalizada de error
    }

    return view('productos.detalleProductos', compact('producto'));
}


    public function mostrar($id){
      $productos = Producto::find($id);
      return view('productos/verProductos')->with('producto',$productos);
      
  }

    public function verProductos() {
    $productos = Producto::paginate(8);
    return view('productos/catalogoProductos', compact('productos'));
}


    public function actualizar(Request $req, $id){
    $producto = Producto::find($id);

    // Actualizar datos básicos
    $producto->nombre = $req->nombre;
    $producto->descripcion = $req->descripcion;
    $producto->precio = $req->precio;
    $producto->existencia = $req->existencia;
    $producto->descuento = $req->descuento;
    $producto->modelado = $req->modelado;
    $producto->estado = $req->estado;

    // Imagen 1
    if ($req->hasFile('imagen1')) {
        $imagen = $req->file('imagen1');
        $extension = $imagen->extension();
        $nombre = "producto_" . $producto->id . "_1." . $extension;
        $ruta = $imagen->storeAs('imagenes/productos', $nombre, 'public');
        $producto->imagen1 = 'storage/' . $ruta;
    }

    // Imagen 2
    if ($req->hasFile('imagen2')) {
        $imagen = $req->file('imagen2');
        $extension = $imagen->extension();
        $nombre = "producto_" . $producto->id . "_2." . $extension;
        $ruta = $imagen->storeAs('imagenes/productos', $nombre, 'public');
        $producto->imagen2 = 'storage/' . $ruta;
    }

    // Imagen 3
    if ($req->hasFile('imagen3')) {
        $imagen = $req->file('imagen3');
        $extension = $imagen->extension();
        $nombre = "producto_" . $producto->id . "_3." . $extension;
        $ruta = $imagen->storeAs('imagenes/productos', $nombre, 'public');
        $producto->imagen3 = 'storage/' . $ruta;
    }

    // Guardar todo
    $producto->save();

    return redirect('/productos/registros');
}


    public function borrar( Request $req, $id){
        $productos = Producto::find($id);
    
        
        $productos->estado="INACTIVO";
    
    
        $productos->save();
        return redirect('/productos/registros');
      }
      
}
