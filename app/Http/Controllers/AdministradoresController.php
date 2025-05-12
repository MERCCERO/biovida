<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdministradoresController extends Controller
{
    //

    public function lista(){
        $administradores=Administrador::all(); // Select * from administradores
        
        return view('/admins/lista')->with('administradores',$administradores);
    }

    public function registro(){
    
        return view('/admins/registro');
    }

    public function in(Request $request)
{
    $username= trim($request->username);
    $admin = Administrador::where('username', $username)->first();

    if (!$admin) {
        
        return back()->withErrors(['username' => 'Usuario no encontrado']);
    }

    if (!Hash::check($request->contraseña, $admin->contraseña)) {
        return back()->withErrors(['contraseña' => 'Contraseña incorrecta']);
    }

    Auth::guard('admins')->login($admin);
    $request->session()->regenerate();

    return redirect('/panel');
}


    public function out(Request $request){

        Auth::logout('admins');
        
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');

        
    }

    public function login(){

        return view('admins.login');
    }



    public function guardar(Request $req){

        //return dd($req->all());

        $administrador=new Administrador();
        $administrador->id=$req->id;
        $administrador->nombres=$req->nombres;
        $administrador->apellidos=$req->apellidos;
        $administrador->correo=$req->correo;
        $administrador->username=$req->username;
        $administrador->contraseña=$req->contraseña;
        $administrador->imagen="storage/administrador/admin/administrador_default.jpg";
        $administrador->estado=$req->estado;
        $administrador->rol=$req->rol;

        $administrador->save();

        if($req->hasFile('imagen')){

            $imagen=$req->imagen;
            $extension=$imagen->extension();
            $nombre="administrador_".$administrador->id."_1.".$extension;
            $ruta=$imagen->storeAS('imagenes/admin',$nombre,'public');
            $administrador->imagen=asset('storage/'.$ruta);
            $administrador->save();

        }
      
    }

    public function editar($id){
        $administrador=Administrador::find($id);
        return view('/admins/edicion')->with('administrador',$administrador);
        
        
    }

    public function actualizar(Request $req, $id){

        $administrador=Administrador::find($id);
        $administrador->id=$req->id;
        $administrador->nombres=$req->nombres;
        $administrador->apellidos=$req->apellidos;
        $administrador->correo=$req->correo;
        $administrador->username=$req->username;
        $administrador->contraseña=$req->contraseña;
        //$administrador->imagen=$req->imagen;
        $administrador->estado=$req->estado;
        $administrador->rol=$req->rol;

        $administrador->save();
        if($req->hasFile('imagen')){

            $imagen=$req->imagen;
            $extension=$imagen->extension();
            $nombre="administrador_".$administrador->id."_1.".$extension;
            $ruta=$imagen->storeAS('imagenes/admin',$nombre,'public');
            $administrador->imagen=asset('storage/'.$ruta);
            $administrador->save();

        }
        return redirect('/administradores/lista');
        
    }

    public function mostrar($id){

       $administrador=Administrador::find($id);
        return view('/admins/ver')->with('administrador',$administrador);
        
    }

    public function borrar($id){

        $administrador=Administrador::find($id);

        $administrador->estado="inactivo";
       

        $administrador->save();
        return redirect('/administradores/lista');
        
    }

}
