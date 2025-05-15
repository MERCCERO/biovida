@extends('/plantilla/vista1')

@section('titulo','- Registro ')

@section('contenido')
<form action="/clientes/guardarRegistro" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Inicia tu Registro</h2>
    @csrf

    <div class="mb-4">
        <label for="correo" class="block text-sm font-medium text-gray-700 mb-1">Correo</label>
        <input type="email" name="correo" id="correo" maxlength="100" required
            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-green-500 text-sm text-gray-900" />
    </div>

    <div class="mb-4">
        <label for="contraseña" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña" minlength="8" maxlength="255" required
            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-green-500 text-sm text-gray-900" />
    </div>

    <div class="grid md:grid-cols-2 md:gap-4">
        <div class="mb-4">
            <label for="nombres" class="block text-sm font-medium text-gray-700 mb-1">Nombres</label>
            <input type="text" name="nombres" id="nombres" maxlength="100" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-green-500 text-sm text-gray-900" />
        </div>

        <div class="mb-4">
            <label for="apellidos" class="block text-sm font-medium text-gray-700 mb-1">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" maxlength="100" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-green-500 text-sm text-gray-900" />
        </div>
    </div>

    <div class="mb-4">
        <label for="direccion" class="block text-sm font-medium text-gray-700 mb-1">Dirección</label>
        <input type="text" name="direccion" id="direccion" maxlength="100" required
            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-green-500 text-sm text-gray-900" />
    </div>

    <div class="mb-6">
        <label for="imagen" class="block text-sm font-medium text-gray-700 mb-1">Imagen</label>
        <input type="file" name="imagen" accept="image/*" id="imagen"
            class="w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50 focus:outline-none" />
    </div>

    <div class="mb-5 text-center">
        <button type="submit"
            class="w-full py-2.5 px-4 text-sm font-semibold text-white bg-green-500 rounded-md hover:bg-green-600 transition-colors duration-300">
            Registrar
        </button>
    </div>

    <div class="text-center">
        <a href="/" class="text-sm text-green-600 hover:underline">← Regresar</a>
    </div>
</form>
@endsection

