<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientesController extends Controller
{
   

    public function listaClientes(){
        $clientes=Cliente::all(); // Select * from  clientes
        
        return view('/clientes/listaClientes')->with('clientes',$clientes);
    }

    public function formularioClientes(){
        return view('/clientes/formularioClientes');
    }


      public function in(Request $request){
        
      $correo= trim($request->correo);
      $cliente = Cliente::where('correo', $correo)->first();
      //dd($cliente);
      //dd(Hash::check($request->contraseña, $cliente->contraseña));
      if (!$cliente) {
          
          return back()->withErrors(['correo' => 'Correo no encontrado']);
      }
  
      if (!Hash::check($request->contraseña, $cliente->contraseña)) {
          return back()->withErrors(['contraseña' => 'Contraseña incorrecta']);
      }
  
      Auth::guard('clientes')->login($cliente);
      $request->session()->regenerate();
  
      return redirect('/panel');
      }
  
  
      public function out(Request $request){
  
          Auth::logout('clientes');
          
          $request->session()->invalidate();
   
          $request->session()->regenerateToken();
   
          return redirect('/');
  
          
      }
  
      public function login(){
  
          return view('clientes.login');
      }
  
 


      public function guardar(Request $req){
        // Crear un nuevo cliente
        $cliente = new Cliente();
    
        $cliente->nombres = $req->nombres;
        $cliente->apellidos = $req->apellidos;
        $cliente->correo = $req->correo;
    
        // Encriptar la contraseña antes de guardarla
        $cliente->contraseña = Hash::make($req->contraseña);
    
        $cliente->direccion = $req->direccion;
        $cliente->imagen = "storage/cliente/clientes/cliente_default.jpg";
        $cliente->estado = $req->estado;
    
        $cliente->save();
    
        // Subir imagen si está presente
        if($req->hasFile('imagen')){
            $imagen = $req->file('imagen');
            $extension = $imagen->extension();
            $nombre = "cliente_" . $cliente->id . "_1." . $extension;
            $ruta = $imagen->storeAs('imagenes/clientes', $nombre, 'public');
            $cliente->imagen = asset('storage/' .$ruta);
            $cliente->save();
        }
    
        return redirect('/clientes/formularioClientes');
    }



     public function editar($id){
      $cliente = Cliente::find($id);
      return view('/clientes/edicionClientes')->with('cliente',$cliente);
    }

    public function mostrar($id){
    $cliente = Cliente::find($id);
    return view('/clientes/verClientes')->with('cliente',$cliente);
    }

    public function actualizar(Request $req, $id){
        $cliente = Cliente::find($id);
    
        $cliente->nombres = $req->nombres;
        $cliente->apellidos = $req->apellidos;
        $cliente->correo = $req->correo;
    
        // Si la contraseña fue modificada, encriptarla antes de guardarla
        if ($req->contraseña) {
            $cliente->contraseña = Hash::make($req->contraseña);
        }
    
        $cliente->direccion = $req->direccion;
        $cliente->estado = $req->estado;
    
        // Guardar los cambios
        $cliente->save();
    
        // Subir imagen si está presente
        if ($req->hasFile('imagen')) {
            $imagen = $req->file('imagen');
            $extension = $imagen->extension();
            $nombre = "cliente_" . $cliente->id . "_1." . $extension;
            $ruta = $imagen->storeAs('imagenes/clientes', $nombre, 'public');
            $cliente->imagen = asset('storage/' .$ruta);
            $cliente->save();
        }
    
        return redirect('/clientes/listaClientes');
    }
    
  
  public function borrar( Request $req, $id){
    $cliente = Cliente::find($id);

    
    $cliente->estado="inactivo";


    $cliente->save();
    return redirect('/clientes/formularioClientes');
  }
}