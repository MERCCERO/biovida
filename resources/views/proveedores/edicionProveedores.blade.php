@extends('/plantilla/layout')

@section('titulo', '- Registro de Proveedores')

@section('contenido')

<form action="/proveedores/ {{$proveedor->id}}/actualizar" method="POST" class="max-w-md mx-auto">
    @csrf
    
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="nombre" id="nombre" maxlength="100" required value=" {{$proveedor->nombre}}"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" " />
        <label for="nombre" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Nombre</label>
    </div>
    
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="contacto" id="contacto" maxlength="100" required value=" {{$proveedor->contacto}}"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" " />
        <label for="contacto" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Contacto</label>
    </div>
    
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="telefono" id="telefono" maxlength="20" required value=" {{$proveedor->telefono}}"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" " />
        <label for="telefono" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Teléfono</label>
    </div>
    
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="correo" id="correo" maxlength="100" required value=" {{$proveedor->correo}}"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" " />
        <label for="correo" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Correo</label>
    </div>
    
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="direccion" id="direccion" required value=" {{$proveedor->direccion}}"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"
            placeholder=" "></textarea>
        <label for="direccion" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-gray-600">Dirección</label>
    </div>
    
    <div class="relative z-0 w-full mb-5 group">
        <select id="estado" name="estado" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer">
            <option value="ACTIVO" {{ $proveedor->estado == 'ACTIVO' ? 'selected' : '' }}>ACTIVO</option>
            <option value="INACTIVO" {{ $proveedor->estado == 'INACTIVO' ? 'selected' : '' }}>INACTIVO</option>
        </select>
        <label for="estado" class="peer-focus:font-medium text-sm text-gray-500 dark:text-gray-400">Estado</label>
    </div>
    
    <div class="mb-4"> 
        <button type="submit"
          class='py-2.5 px-6 text-sm rounded-lg border border-solid border-emerald-200 text-emerald-600 cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-emerald-600 hover:text-white'>
          Guardar
        </button>
    </div>
    
    <div>
        <a href="{{ url('/proveedores/listaProveedores') }}" class="inline-flex items-center font-medium text-green-600 dark:text-green-500 hover:underline">
            Ver Proveedores
        </a>
    </div>
</form>


@endsection

