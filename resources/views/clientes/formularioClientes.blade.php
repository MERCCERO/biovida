@extends('/plantilla/layout')

{{-- Colocar una seccion por cada yiel agregado en la plantilla --}}

{{-- section para titulo, este solo el texto, NO REQUIERE el endsection --}}
@section('titulo','- Clientes ')
    

{{-- setiono para el contenido  con componentes --}}
@section('contenido')


<form action="/administradores/guardar" method="POST"    enctype="multipart/form-data"  class="max-w-md mx-auto">
    <h2 class="font-semibold text-black-700 rounded-lg mb-5">Clientes</h2>
    @csrf
    <div class="relative z-0 w-full mb-5 group">
        <input type="email" name="correo" id="correo" maxlength="100" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" " />
        <label for="correo" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Correo</label>
    </div>
  
    <div class="relative z-0 w-full mb-5 group">
        <input type="password" name="contraseña" id="contraseña" minlength="8" maxlength="255" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" " />
        <label for="contraseña" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Contraseña</label>
    </div>
  
    <div class="grid md:grid-cols-2 md:gap-6">
      <div class="relative z-0 w-full mb-5 group">
          <input type="text" name="nombres" id="nombres" maxlength="100" required
              class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
              placeholder=" " />
          <label for="nombres" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Nombres</label>
      </div>
  
      <div class="relative z-0 w-full mb-5 group">
          <input type="text" name="apellidos" id="apellidos" maxlength="100" required
              class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
              placeholder=" " />
          <label for="apellidos" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Apellidos</label>
      </div>
    </div>
  
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="username" id="username" maxlength="50" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" " />
        <label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Nombre de usuario</label>
    </div>
  
    <div class="relative z-0 w-full mb-5 group">
      <label for="imagen" class="peer-focus:font-medium text-sm py-10 text-gray-500 dark:text-gray-400">Imagen</label>
        <input type="file" name="imagen" accept="image/*" id="imagen"
            class="block w-full px-2 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" />
        
    </div>
  
    <div class="mb-4"> 
        <button type="submit"
          class='py-2.5 px-6 text-sm rounded-lg bg-green-500 text-white cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-green-700'>
          Registrar
        </button>
    </div>
    

  </form>


@endsection
