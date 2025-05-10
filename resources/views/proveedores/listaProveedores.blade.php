@extends('/plantilla/layout')

@section('titulo','- Proveedores')

@section('contenido')

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Nombre</th>
                <th scope="col" class="px-6 py-3">Contacto</th>
                <th scope="col" class="px-6 py-3">Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">Proveedor A</td>
                <td class="px-6 py-4">contacto@empresa.com</td>
                <td class="px-6 py-4">+1 234 567 890</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="mt-4">
    <a href="{{ url('/registroProveedores') }}" 
       class="py-2.5 px-6 text-sm rounded-lg border border-solid border-emerald-200 
              text-emerald-600 cursor-pointer font-semibold text-center shadow-xs 
              transition-all duration-500 hover:bg-emerald-600 hover:text-white">
        Registrar Proveedor
    </a>
</div>

@endsection