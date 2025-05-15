<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
    <style>
        body {
            font-family: 'Verdana', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 overflow-hidden"> 
   
  <section class="flex justify-center items-center min-h-screen relative">
    <img src="/imagenes/fondo.jpg" alt="gradient background image" class="absolute inset-0 w-full h-full object-cover z-0">
    <div class="mx-auto max-w-lg px-6 lg:px-8 absolute z-10 py-20">
      <img src="" alt="" class="mx-auto lg:mb-11 mb-8 object-cover">
      <div class="rounded-2xl bg-white shadow-xl p-7 sm:p-11">
        <form action="/clientes/in"   method="POST" class="space-y-4">
          @csrf
          <div class="text-center">
            <h1 class="text-gray-900 text-3xl font-bold leading-10 mb-2">¡Bienvenido!</h1>
          </div>

        
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo</label>
            <input id="correo" name="correo" type="text"
              class="w-full px-4 py-2 text-sm text-gray-900 placeholder-gray-400 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" 
              placeholder="Ingresa tu correo">
          </div>
          <div class="mt-4">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
            <input id="contraseña" name="contraseña" type="password"
              class="w-full px-4 py-2 text-sm text-gray-900 placeholder-gray-400 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" 
              placeholder="Ingresa tu contraseña">
          </div>

          <button type="submit" class="w-full h-8 text-white text-sm font-medium rounded-full bg-indigo-600 hover:bg-indigo-700 transition duration-300 shadow-sm">
            Entrar
          </button>
          
          <button type="button" 
           onclick="window.location.href='{{ url('/registro') }}'"
          class="w-full h-8 text-white text-sm font-medium rounded-full bg-indigo-600 hover:bg-indigo-700 transition duration-300 shadow-sm mt-2">
          Registrarse
         </button>
         

          
          
          <div class="flex items-center justify-center my-4">
            <div class="w-full h-px bg-gray-300"></div>
            <span class="px-3 text-gray-500 text-sm">o</span>
            <div class="w-full h-px bg-gray-300"></div>
          </div>
          

         <div>
          <a href=""
             class="w-full py-1.5 px-4 bg-white text-gray-800 text-sm font-medium rounded-lg border border-gray-300 shadow hover:bg-gray-100 transition duration-200 flex items-center justify-center gap-2">
            <img src="{{ asset('imagenes/google_logo.png') }}" alt="Google Logo" class="w-4 h-4">
            Continuar con Google
          </a>
        </div>
        <div class="flex items-center justify-center my-4">
                <ul class="flex items-center gap-5">
                    <li> <a href="{{ url('/') }}" class="inline-flex items-center font-medium text-grey-600 dark:text-green-500 hover:underline">
                           
                            <span class="font-medium text-base leading-7 text-grey-600">Regresar</span>
                        </a>
                    </li>
    </div>
        
        </form>
        @error('credenciales')

        <span>{{$message}}</span>
            
        @enderror
      </div>
    </div>
  </section>
</body>


</html> 
