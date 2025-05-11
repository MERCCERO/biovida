<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="../path/to/src/pagedone.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Swiper JS -->
    
    

    @vite('resources/css/app.css')

    <title>BioVida @yield('titulo')</title>
  
</head>


<header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="{{ url('/') }}" class="flex items-center">
                   <img src="/imagenes/file.png" class="mr-3 h-16 sm:h-20" alt="Biovida Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">BioVida</span>
                </a>
                <div class="flex items-center lg:order-2">

                  <div> 
                    <button type='button' onclick="window.location.href='{{ url('/') }}';">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 17.0001V11.1408C3 10.0929 3 9.56895 3.23665 9.12676C3.4733 8.68457 3.90927 8.39393 4.7812 7.81264L9.7812 4.47931C10.8567 3.76231 11.3944 3.40381 12 3.40381C12.6056 3.40381 13.1433 3.76231 14.2188 4.47931L17.4376 6.62517C19.1815 7.78775 20.0534 8.36904 20.5267 9.25341C21 10.1378 21 11.1857 21 13.2816V17.0001C21 18.8857 21 19.8285 20.4142 20.4143C19.8284 21.0001 18.8856 21.0001 17 21.0001H7C5.11438 21.0001 4.17157 21.0001 3.58579 20.4143C3 19.8285 3 18.8857 3 17.0001Z" stroke="green" stroke-width="null" class="my-path"></path>
                        <path d="M15 17L9 17" stroke="green" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                        </svg>
                    </button>
  
                    <button type='button' onclick="window.location.href='{{ url('/profile') }}';">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="green" stroke-width="null" class="my-path"></path>
                      <path d="M11.9998 14C9.15153 14 6.65091 15.3024 5.23341 17.2638C4.48341 18.3016 4.10841 18.8204 4.6654 19.9102C5.2224 21 6.1482 21 7.99981 21H15.9998C17.8514 21 18.7772 21 19.3342 19.9102C19.8912 18.8204 19.5162 18.3016 18.7662 17.2638C17.3487 15.3024 14.8481 14 11.9998 14Z" stroke="green" stroke-width="null" class="my-path"></path>
                      </svg>
                    </button>
  
                    <button type='button' onclick="window.location.href='{{ url('/faq') }}';">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="green" stroke-width="null" class="my-path"></path>
                        <path d="M9.23163 9.2148C9.23163 5.59165 14.7684 5.59165 14.7684 9.2148C14.7684 11.8031 12.2525 11.2866 12.2525 14.3913" stroke="green" stroke-width="null" stroke-linecap="round" stroke-linejoin="round" class="my-path"></path>
                        <path d="M11.975 17.5026L12.025 17.5026" stroke="green" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                        </svg>
                    </button>
  
                    <button type='button' onclick="window.location.href='{{ url('/help') }}';">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 7L12 13" stroke="green" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                        <path d="M11.9992 15.9414L11.9492 15.9414" stroke="green" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                        <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="green" stroke-width="null" class="my-path"></path>
                        </svg>
                    </button>
  
                  </div>
                  
                  
                    <a href="{{ url('/login') }}" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Iniciar Sesion</a>
                    {{-- <a href="{{ url('/subscription') }}" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Get started</a> --}}
                    <button id="subButton"    type='button' onclick="window.location.href='{{ url('/formularioClientes') }}';" class="w-36 h-12 rounded-full bg-green-500 transition-all duration-700 hover:bg-green-700 shadow text-white text-center px-5 text-base font-semibold leading-6">Registrarse</button>
          

                    <button type="button" onclick="window.location.href='{{ url('/cart') }}';" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-10 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
<svg class="w-5 h-5me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
<path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
</svg><span class="budget bg-danger">{{\Cart::count()}} </span>
</button>
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                      

                    

                </div>
                
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    
                        <li>
                          <a href="{{ url('/catalogoProductos') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Productos</a>
                        </li>
                        <li>
                            <a href="{{ url('/acercan') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Nosotros</a>
                        </li>

                        <li>
                          <a href="{{ url('/contact') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contactanos</a>
                        </li>
                    
                        <li>
                            <a href="{{ url('/team') }}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
</header> 
<body class="py-10">
    @yield('contenido')

    <footer class="w-full py-10 ">
        <div class="mx-auto max-w-7xl">
        <!--Grid-->
        <div class="grid grid-cols-2 lg:grid-cols-4 2xl:grid-cols-6 gap-8 py-10 ">
        <div class="col-span-full mb-10 2xl:col-span-2 lg:mb-0 flex items-center flex-col 2xl:items-start">
        <a href="{{ url('/index') }}" class="flex justify-center lg:justify-start">
          <img src="/imagenes/file_1.png" alt="Descripción de la imagen" class="mt-4" />
        </a>
        <div class="flex items-center justify-between w-full max-w-xl mx-auto flex-col  2xl:flex-col 2xl:items-start">
          <p class="py-8 text-sm text-gray-500 lg:max-w-xs text-center lg:text-left">Confianza en más de 100 países y 5 millones de clientes..</p>
          <button id="contactButton" type='button' onclick="window.location.href='{{ url('/contact') }}';" class='py-2.5 px-6 text-sm rounded-full bg-green-500 text-white cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-green-700'>Contactanos</button>
        </div>
        </div>
        <!--End Col-->
        <div class="lg:mx-auto text-left">
        <h4 class="text-lg text-gray-900 font-medium mb-7">BioVida</h4>
        <ul class="text-sm  transition-all duration-500 ">
          <li class="mb-6">
            <a href="{{ url('/') }}" class="text-gray-600 hover:text-green-500">Home</a>
          </li>
          <li class="mb-6">
            <a href="{{ url('/acercan') }}" class=" text-gray-600 hover:text-green-500">Acerca de nosotros</a>
          </li>
          <li class="mb-6">
            <a href="{{ url('/products') }}" class=" text-gray-600 hover:text-green-500">Productos</a>
          </li>
          {{-- <li>
            <a href="{{ url('/details') }}" class=" text-gray-600 hover:text-green-500">Caracteristicas</a>
          </li> --}}
        </ul>
        </div>
        <!--End Col-->
        <div class="lg:mx-auto text-left">
        <h4 class="text-lg text-gray-900 font-medium mb-7">Productos</h4>
        <ul class="text-sm  transition-all duration-500">
          <li class="mb-6">
            <a href="{{ url('/promotions') }}" class=" text-gray-600 hover:text-green-500">Promociones</a>
          </li>
          <li class="mb-6">
            <a href="{{ url('/orders') }}" class=" text-gray-600 hover:text-green-500">Ordenes</a>
          </li>
        </ul>
        </div>
        <!--End Col-->
        <div class="lg:mx-auto text-left">
          <h4 class="text-lg text-gray-900 font-medium mb-7">Recursos</h4>
          <ul class="text-sm  transition-all duration-500">
            <li class="mb-6">
              <a href="{{ url('/faq') }}" class="text-gray-600 hover:text-green-500">FAQs</a>
            </li>
            <li>
              <a href="{{ url('/terms') }}" class="text-gray-600 hover:text-green-500">Terminos y condiciones</a>
            </li>
        </ul>
        </div>
        <!--End Col-->
      <div class="lg:mx-auto text-left">
        <h4 class="text-lg text-gray-900 font-medium mb-7">Blogs</h4>
        <ul class="text-sm  transition-all duration-500">
          
          <li>
            <a href="{{ url('/productos') }}" class="text-gray-600 hover:text-green-500">admin</a>
          </li>
        </ul>
        </div>
        </div> 
        <!--Grid-->
        <div class="py-7 border-t border-gray-200">
        <div class="flex items-center justify-center flex-col lg:justify-between lg:flex-row">
        <span class="text-sm text-gray-500 ">©<a href="{{ url('/') }}">BioVida</a> 2024, All rights reserved.</span>
          <div class="flex mt-4 space-x-4 sm:justify-center lg:mt-0 ">
            <a href="https://x.com/i/flow/login?lang=es" class="w-9 h-9 rounded-full bg-gray-700 flex justify-center items-center hover:bg-green-500">
              <svg class=" text-white" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="Vector" d="M17.5667 14.7386L24.072 7.33936H22.5305L16.8819 13.764L12.3704 7.33936H7.16699L13.9892 17.0546L7.16699 24.8139H8.70862L14.6736 18.0292L19.4381 24.8139H24.6415L17.5663 14.7386H17.5667ZM15.4552 17.1402L14.764 16.1728L9.2641 8.47491H11.632L16.0704 14.6873L16.7617 15.6548L22.5312 23.73H20.1633L15.4552 17.1406V17.1402Z" fill="currentColor" />
              </svg>
            </a>
            <a href="https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2F&hl=es-es&aa_click=8891933284028179" class="w-9 h-9 rounded-full bg-gray-700 flex justify-center items-center hover:bg-green-500">
              <svg class="w-[1.25rem] h-[1.125rem] text-white" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.70975 7.93663C4.70975 6.65824 5.76102 5.62163 7.0582 5.62163C8.35537 5.62163 9.40721 6.65824 9.40721 7.93663C9.40721 9.21502 8.35537 10.2516 7.0582 10.2516C5.76102 10.2516 4.70975 9.21502 4.70975 7.93663ZM3.43991 7.93663C3.43991 9.90608 5.05982 11.5025 7.0582 11.5025C9.05658 11.5025 10.6765 9.90608 10.6765 7.93663C10.6765 5.96719 9.05658 4.37074 7.0582 4.37074C5.05982 4.37074 3.43991 5.96719 3.43991 7.93663ZM9.97414 4.22935C9.97408 4.39417 10.0236 4.55531 10.1165 4.69239C10.2093 4.82946 10.3413 4.93633 10.4958 4.99946C10.6503 5.06259 10.8203 5.07916 10.9844 5.04707C11.1484 5.01498 11.2991 4.93568 11.4174 4.81918C11.5357 4.70268 11.6163 4.55423 11.649 4.39259C11.6817 4.23095 11.665 4.06339 11.6011 3.91109C11.5371 3.7588 11.4288 3.6286 11.2898 3.53698C11.1508 3.44536 10.9873 3.39642 10.8201 3.39635H10.8197C10.5955 3.39646 10.3806 3.48424 10.222 3.64043C10.0635 3.79661 9.97434 4.00843 9.97414 4.22935ZM4.21142 13.5892C3.52442 13.5584 3.15101 13.4456 2.90286 13.3504C2.57387 13.2241 2.33914 13.0738 2.09235 12.8309C1.84555 12.588 1.69278 12.3569 1.56527 12.0327C1.46854 11.7882 1.3541 11.4201 1.32287 10.7431C1.28871 10.0111 1.28189 9.79119 1.28189 7.93669C1.28189 6.08219 1.28927 5.86291 1.32287 5.1303C1.35416 4.45324 1.46944 4.08585 1.56527 3.84069C1.69335 3.51647 1.84589 3.28513 2.09235 3.04191C2.3388 2.79869 2.57331 2.64813 2.90286 2.52247C3.1509 2.42713 3.52442 2.31435 4.21142 2.28358C4.95417 2.24991 5.17729 2.24319 7.0582 2.24319C8.9391 2.24319 9.16244 2.25047 9.90582 2.28358C10.5928 2.31441 10.9656 2.42802 11.2144 2.52247C11.5434 2.64813 11.7781 2.79902 12.0249 3.04191C12.2717 3.2848 12.4239 3.51647 12.552 3.84069C12.6487 4.08513 12.7631 4.45324 12.7944 5.1303C12.8285 5.86291 12.8354 6.08219 12.8354 7.93669C12.8354 9.79119 12.8285 10.0105 12.7944 10.7431C12.7631 11.4201 12.6481 11.7881 12.552 12.0327C12.4239 12.3569 12.2714 12.5882 12.0249 12.8309C11.7784 13.0736 11.5434 13.2241 11.2144 13.3504C10.9663 13.4457 10.5928 13.5585 9.90582 13.5892C9.16306 13.6229 8.93994 13.6296 7.0582 13.6296C5.17645 13.6296 4.95395 13.6229 4.21142 13.5892ZM4.15307 1.03424C3.40294 1.06791 2.89035 1.18513 2.4427 1.3568C1.9791 1.53408 1.58663 1.77191 1.19446 2.1578C0.802277 2.54369 0.56157 2.93108 0.381687 3.38797C0.207498 3.82941 0.0885535 4.3343 0.0543922 5.07358C0.0196672 5.81402 0.0117188 6.05074 0.0117188 7.93663C0.0117188 9.82252 0.0196672 10.0592 0.0543922 10.7997C0.0885535 11.539 0.207498 12.0439 0.381687 12.4853C0.56157 12.9419 0.802334 13.3297 1.19446 13.7155C1.58658 14.1012 1.9791 14.3387 2.4427 14.5165C2.89119 14.6881 3.40294 14.8054 4.15307 14.839C4.90479 14.8727 5.1446 14.8811 7.0582 14.8811C8.9718 14.8811 9.212 14.8732 9.96332 14.839C10.7135 14.8054 11.2258 14.6881 11.6737 14.5165C12.137 14.3387 12.5298 14.1014 12.9219 13.7155C13.3141 13.3296 13.5543 12.9419 13.7347 12.4853C13.9089 12.0439 14.0284 11.539 14.062 10.7997C14.0962 10.0587 14.1041 9.82252 14.1041 7.93663C14.1041 6.05074 14.0962 5.81402 14.062 5.07358C14.0278 4.33424 13.9089 3.82913 13.7347 3.38797C13.5543 2.93135 13.3135 2.5443 12.9219 2.1578C12.5304 1.7713 12.137 1.53408 11.6743 1.3568C11.2258 1.18513 10.7135 1.06735 9.96388 1.03424C9.21256 1.00058 8.97236 0.992188 7.05876 0.992188C5.14516 0.992188 4.90479 1.00002 4.15307 1.03424Z" fill="currentColor" />
              </svg>
            </a>
            <a href="https://mx.linkedin.com/" class="w-9 h-9 rounded-full bg-gray-700 flex justify-center items-center hover:bg-green-500">
              <svg class="w-[1rem] h-[1rem] text-white" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.8794 11.5527V3.86835H0.318893V11.5527H2.87967H2.8794ZM1.59968 2.81936C2.4924 2.81936 3.04817 2.2293 3.04817 1.49188C3.03146 0.737661 2.4924 0.164062 1.61666 0.164062C0.74032 0.164062 0.167969 0.737661 0.167969 1.49181C0.167969 2.22923 0.723543 2.8193 1.5829 2.8193H1.59948L1.59968 2.81936ZM4.29668 11.5527H6.85698V7.26187C6.85698 7.03251 6.87369 6.80255 6.94134 6.63873C7.12635 6.17968 7.54764 5.70449 8.25514 5.70449C9.18141 5.70449 9.55217 6.4091 9.55217 7.44222V11.5527H12.1124V7.14672C12.1124 4.78652 10.8494 3.68819 9.16483 3.68819C7.78372 3.68819 7.17715 4.45822 6.84014 4.98267H6.85718V3.86862H4.29681C4.33023 4.5895 4.29661 11.553 4.29661 11.553L4.29668 11.5527Z" fill="currentColor" />
              </svg>
            </a>
            <a href="https://www.youtube.com/" class="w-9 h-9 rounded-full bg-gray-700 flex justify-center items-center hover:bg-green-500">
              <svg class="w-[1.25rem] h-[0.875rem] text-white" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9346 1.13529C14.5684 1.30645 15.0665 1.80588 15.2349 2.43896C15.5413 3.58788 15.5413 5.98654 15.5413 5.98654C15.5413 5.98654 15.5413 8.3852 15.2349 9.53412C15.0642 10.1695 14.5661 10.669 13.9346 10.8378C12.7886 11.1449 8.19058 11.1449 8.19058 11.1449C8.19058 11.1449 3.59491 11.1449 2.44657 10.8378C1.81277 10.6666 1.31461 10.1672 1.14622 9.53412C0.839844 8.3852 0.839844 5.98654 0.839844 5.98654C0.839844 5.98654 0.839844 3.58788 1.14622 2.43896C1.31695 1.80353 1.81511 1.30411 2.44657 1.13529C3.59491 0.828125 8.19058 0.828125 8.19058 0.828125C8.19058 0.828125 12.7886 0.828125 13.9346 1.13529ZM10.541 5.98654L6.72178 8.19762V3.77545L10.541 5.98654Z" fill="currentColor" />
              </svg>
            </a>
        </div>
        </div>
        </div>
        </div>
        </footer>

    <script src="../path/to/src/pagedone.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="/js/botoncont.js"></script>
    <script src="/js/sub.js"></script>
    <script src="/js/acordeon.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    

</body>
</html>