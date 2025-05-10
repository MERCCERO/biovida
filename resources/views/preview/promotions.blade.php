@extends('/plantilla/layout')

{{-- Colocar una seccion por cada yiel agregado en la plantilla --}}

{{-- section para titulo, este solo el texto, NO REQUIERE el endsection --}}
@section('titulo','Promociones')
    

{{-- setiono para el contenido  con componentes --}}
@section('contenido')
<section class="bg-white px-4 py-8 antialiased dark:bg-gray-900 md:py-16">
    <div class="mx-auto grid max-w-screen-xl rounded-lg bg-gray-50 p-4 dark:bg-gray-800 md:p-8 lg:grid-cols-12 lg:gap-8 lg:p-16 xl:gap-16">
      <div class="lg:col-span-5 lg:mt-0">
        <a href="{{ url('/products') }}">
          <img class="mb-4 h-56 w-56 dark:hidden sm:h-96 sm:w-96 md:h-full md:w-full" src="/imagenes/bolsa4.jpg" alt="peripherals" />
          <img class="mb-4 hidden dark:block md:h-full" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-components-dark.svg" alt="peripherals" />
        </a>
      </div>
      <div class="me-auto place-self-center lg:col-span-7">
        <h1 class="mb-3 text-2xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-4xl">
          ¡Compra más de $1000 en productos y llévate una bolsa de caucho gratis con envío incluido!
        </h1>
        <p class="mb-6 text-gray-500 dark:text-gray-400">Producto reciclable echo completamente con manos artesanas mexicanas.</p>
        <a href="{{ url('/products') }}" class="inline-flex items-center justify-center rounded-lg bg-primary-700 px-5 py-3 text-center text-base font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900"> Pre-order now </a>
      </div>
    </div>
  </section>

  <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
    <div class="mx-auto grid max-w-screen-xl px-4 pb-8 md:grid-cols-12 lg:gap-12 lg:pb-16 xl:gap-0">
      <div class="content-center justify-self-start md:col-span-7 md:text-start">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight dark:text-dark md:max-w-2xl md:text-5xl xl:text-6xl">¡No dejes pasar esta oportunidad!<br /></h1>
        <p class="mb-4 max-w-2xl text-gray-500 dark:text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl">No esperes mas - ¡Aprovecha un 20% de descuento en productos seleccionados y ahorra en grande!</p>
        <a href="#" class="inline-block rounded-lg bg-primary-700 px-6 py-3.5 text-center font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Shop Now</a>
      </div>
      <div class="hidden md:col-span-5 md:mt-0 md:flex">
        <img class="dark:hidden" src="/imagenes/20.jpg" />
        {{-- <img class="hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/girl-shopping-list-dark.svg" alt="shopping illustration" /> --}}
      </div>
    </div>
    
  </section>
    
    
@endsection