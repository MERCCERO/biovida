<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CartController;

// Route::get('/', function () {
 //return view('welcome');
//});

// Route::view('/', 'admins.login');

//vista princiapal
Route::view('/', 'index');

//vista de Acerca de nosotros
Route::view('/acercan', 'preview.acercan');
//vista de Contactanos
Route::view('/contact', 'preview.contact');
//vista de Team
Route::view('/team', 'preview.team');
//vista de FAQs
Route::view('/faq','preview.faq');
//vista de Termionos y condiciones
Route::view('/terms', 'preview.terms');

//vista login
Route::get('/login', [AdministradoresController::class, 'login'])->name('login'); // Página de login si no está autenticado
Route::post('/administradores/in', [AdministradoresController::class, 'in']); // Enviar formulario de login
Route::middleware('auth:admins')->group(function(){
//Sarai
// Rutas de vista
Route::view('/panel', 'plantilla.layoutAuth'); // Página principal del panel
Route::view('/registro', 'admins.registro'); // Página de registro de administradores
// Route::view('/lista', 'admins.lista'); // Página de lista de administradores
Route::get('/lista', [AdministradoresController::class, 'lista']);


// Rutas de autenticación
//Route::post('/administradores/in', [AdministradoresController::class, 'in']); // Enviar formulario de login
Route::post('/administradores/out', [AdministradoresController::class, 'out']); // Cerrar sesión (logout)
//Route::get('/', [AdministradoresController::class, 'login'])->name('login'); // Página de login si no está autenticado

//Sarai - Administradores 
Route::get('/administradores/lista',[AdministradoresController::class,'lista']);
Route::get('/administradores/registro',[AdministradoresController::class,'registro']);
Route::post('/administradores/guardar',[AdministradoresController::class,'guardar']);
Route::get('/administradores/{id}/editar',[AdministradoresController::class,'editar']);
Route::post('/administradores/{id}/actualizar',[AdministradoresController::class,'actualizar']);
Route::get('/administradores/{id}/mostrar',[AdministradoresController::class,'mostrar']);
Route::post('/administradores/{id}/borrar',[AdministradoresController::class,'borrar']);
});


//controllers


//vistas de los productos
Route::view('/catalogoProductos','/productos/catalogoProductos');
Route::view('/registroProductos','/productos/registroProductos');
Route::view('/listaProductos','/productos/listaProductos');

//Controlador del CRUD de los productos
Route::get('/productos/registros', [ProductoController::class,'registros']);
Route::post('/productos/guardar', [ProductoController::class, 'guardar']);
Route::get('/productos/{id}/editar', [ProductoController::class, 'editar']);
Route::get('/productos/{id}/detalle', [ProductoController::class, 'detalle']);
Route::post('/productos/{id}/actualizar', [ProductoController::class, 'actualizar']);
Route::get('/productos/{id}/mostrar', [ProductoController::class, 'mostrar']);
Route::get('/catalogoProductos', [ProductoController::class, 'verProductos']);
Route::post('/productos/{id}/borrar', [ProductoController::class, 'borrar']);


//vistas de los clientes 
Route::view('/formularioClientes','/clientes/formularioClientes');

//Rutas para carrito de compras
Route::view('cart','carrito/cart');
//AgregarProductos
Route::post('cart/add',[CartController::class,'add'])->name('add');
//vistadeCheoutProductos
Route::get('cart/checkout',[CartController::class,'checkout'])->name('checkout');
//limpiarProductos
Route::get('cart/clear',[CartController::class,'clear'])->name('clear');
//removerProductos
Route::post('cart/removeItem',[CartController::class,'removeItem'])->name('removeItem');

//pedidos
Route::get('pedidos/listaPedidos',[CartController::class,'hacerPedido'])->name('hacerPedido');