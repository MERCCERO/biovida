@extends('/plantilla/layout')

@section('titulo', '- Clientes')

@section('contenido')



<form action="/clientes/{{$cliente->id}}/borrar" method="POST" class="max-w-md mx-auto">
    @csrf
    <div class="relative z-0 w-full mb-5 group">
        <p class="text-sm text-gray-700 dark:text-gray-300">{{$cliente->correo}}</p>
    </div>

    <div class="relative z-0 w-full mb-5 group">
        <p class="text-sm text-gray-700 dark:text-gray-300">{{$cliente->contraseña}}</p>
    </div>

    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <p class="text-sm text-gray-700 dark:text-gray-300">{{$cliente->nombres}}</p>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <p class="text-sm text-gray-700 dark:text-gray-300">{{$cliente->apellidos}}</p>
        </div>
    </div>

    <div class="relative z-0 w-full mb-5 group">
        <p class="text-sm text-gray-700 dark:text-gray-300">{{$cliente->direccion}}</p>
    </div>

    <div class="relative z-0 w-full mb-5 group">
        <img src="{{$cliente->imagen}}" alt="{{$cliente->imagen}}" width="100" class="w-full max-w-xs rounded-lg shadow-md">
    </div>
    <div class="mb-4">
        <button type="submit"
            class='py-2.5 px-6 text-sm rounded-lg bg-green-500 text-white cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-green-700'>
            Borrar
        </button>
    </div>
</form>

@endsection