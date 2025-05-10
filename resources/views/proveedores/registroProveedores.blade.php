@extends('/plantilla/layout')

@section('titulo', '- Registro de Proveedores')

@section('contenido')

<form action="/proveedores/guardar" method="POST" class="max-w-md mx-auto">
    @csrf
    
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="nombre" id="nombre" maxlength="100" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" " />
        <label for="nombre" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Nombre</label>
    </div>
    
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="contacto" id="contacto" maxlength="100" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" " />
        <label for="contacto" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Contacto</label>
    </div>
    
    <div class="relative z-0 w-full mb-5 group">
        <input type="tel" name="telefono" id="telefono" maxlength="20" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" " />
        <label for="telefono" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Teléfono</label>
    </div>
    
    <div class="relative z-0 w-full mb-5 group">
        <input type="email" name="correo" id="correo" maxlength="100" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" " />
        <label for="correo" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Correo</label>
    </div>
    
    <div class="relative z-0 w-full mb-5 group">
        <textarea name="direccion" id="direccion" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" "></textarea>
        <label for="direccion" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Dirección</label>
    </div>
    
    <div class="relative z-0 w-full mb-5 group">
        <select name="estado" id="estado" required
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer">
            <option value="" disabled selected>Seleccione el estado</option>
            <option value="activo">activo</option>
            <option value="inactivo">inactivo</option>
        </select>
        <label for="estado" class="peer-focus:font-medium text-sm text-gray-500 dark:text-gray-400">Estado</label>
    </div>
    
    <div class="mb-4"> 
        <button type="submit"
          class='py-2.5 px-6 text-sm rounded-lg border border-solid border-emerald-200 text-emerald-600 cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-emerald-600 hover:text-white'>
          Registrar
        </button>
    </div>
    
    <div>
        <a href="{{ url('/proveedores/lista') }}" class="inline-flex items-center font-medium text-green-600 dark:text-green-500 hover:underline">
            Ver Proveedores
        </a>
    </div>
</form>


@endsection
