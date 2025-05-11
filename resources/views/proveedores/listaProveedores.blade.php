@extends('/plantilla/layout')

@section('titulo','- Proveedores')

@section('contenido')

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Nombre</th>
                <th scope="col" class="px-6 py-3">Contacto</th>
                <th scope="col" class="px-6 py-3">Teléfono</th>
                <th scope="col" class="px-6 py-3">Correo</th>
                <th scope="col" class="px-6 py-3">Direccion</th>
                <th scope="col" class="px-6 py-3">Estado</th>
                <th scope="col" class="px-6 py-3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
                
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4"> {{$proveedor->id}} </td>
                <td class="px-6 py-4"> {{$proveedor->nombre}} </td>
                <td class="px-6 py-4"> {{$proveedor->contacto}} </td>
                <td class="px-6 py-4"> {{$proveedor->telefono}} </td>
                <td class="px-6 py-4"> {{$proveedor->correo}} </td>
                <td class="px-6 py-4"> {{$proveedor->direccion}} </td>
                <td class="px-6 py-4"> {{$proveedor->estado}} </td>
                <td class="px-6 py-4">
                    <a href="/proveedores/{{ $proveedor->id }}/editar" class="text-blue-600 hover:underline">Editar</a> |
                    <a href="/proveedores/{{ $proveedor->id }}/mostrar" class="text-red-600 hover:underline">Eliminar</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-4">
    <a href="{{ url('/registroProveedores') }}" class='py-2.5 px-6 text-sm rounded-lg bg-green-500 text-white cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-green-700'>
        Registrar Proveedor
    </a>
</div>

@endsection