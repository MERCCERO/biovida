@extends('/plantilla/vista')

{{-- Colocar una seccion por cada yiel agregado en la plantilla --}}

{{-- section para titulo, este solo el texto, NO REQUIERE el endsection --}}
@section('titulo','- Clientes ')
    

{{-- setiono para el contenido  con componentes --}}
@section('contenido')

<form action="/clientes/guardar" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto">
  <h2 class="font-semibold text-black-700 rounded-lg mb-5">Clientes</h2>
  @csrf
  <div class="relative z-0 w-full mb-5 group">
    <input type="email" name="correo" id="correo" maxlength="100" required
      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
      placeholder=" " />
    <label for="correo" class="absolute text-sm text-gray-500 dark:text-gray-400 top-1/2 left-0 transform -translate-y-1/2 peer-focus:text-gray-600">Correo</label>
  </div>

  <div class="relative z-0 w-full mb-5 group">
    <input type="password" name="contraseña" id="contraseña" minlength="8" maxlength="255" required
      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
      placeholder=" " />
    <label for="contraseña" class="absolute text-sm text-gray-500 dark:text-gray-400 top-1/2 left-0 transform -translate-y-1/2 peer-focus:text-gray-600">Contraseña</label>
  </div>

  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="nombres" id="nombres" maxlength="100" required
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
        placeholder=" " />
      <label for="nombres" class="absolute text-sm text-gray-500 dark:text-gray-400 top-1/2 left-0 transform -translate-y-1/2 peer-focus:text-gray-600">Nombres</label>
    </div>

    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="apellidos" id="apellidos" maxlength="100" required
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
        placeholder=" " />
      <label for="apellidos" class="absolute text-sm text-gray-500 dark:text-gray-400 top-1/2 left-0 transform -translate-y-1/2 peer-focus:text-gray-600">Apellidos</label>
    </div>
  </div>

  <div class="relative z-0 w-full mb-5 group">
    <input type="text" name="direccion" id="direccion" maxlength="100" required
      class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
      placeholder=" " />
    <label for="direccion" class="absolute text-sm text-gray-500 dark:text-gray-400 top-1/2 left-0 transform -translate-y-1/2 peer-focus:text-gray-600">Dirección</label>
  </div>

  <div class="relative z-0 w-full mb-5 group">
    <input type="file" name="imagen" accept="image/*" id="imagen"
      class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" />
    <label for="imagen" class="absolute text-sm text-gray-500 dark:text-gray-400 top-1/2 left-0 transform -translate-y-1/2">Imagen</label>
  </div>

  <div class="mb-4">
    <button type="submit"
      class="py-2.5 px-6 text-sm rounded-lg bg-green-500 text-white cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-green-700">
      Registrar
    </button>
  </div>

  <div>
    <a href="{{ url('/listaClientes') }}" class="inline-flex items-center font-medium text-green-600 dark:text-green-500 hover:underline">
      Ver Clientes
    </a>
  </div>
</form>




@endsection