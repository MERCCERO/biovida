@extends('/plantilla/layout')

{{-- Colocar una secction  por cada yield agregaadao en la palntilla--}}
 @section('titulo','Inicio')
     
{{--Section para ele contenido,  son componentes--}}

@section('contenido')
<style>
  .text-justify-custom {
    text-align: justify;
}
</style>
<section class="py-24 relative bg-gray-50">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full justify-start items-center gap-8 grid lg:grid-cols-2 grid-cols-1">
            <div class="w-full flex-col justify-start lg:items-start items-center gap-10 inline-flex">
                <div class="w-full flex-col justify-start lg:items-start items-center gap-4 flex">
                    <h2 class="text-gray-900 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">¡Bienvenidos!</h2>
                    <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center text-justify-custom">
                      Nuestra página está dedicada a la venta de productos biodegradables desechables. Aquí encontrarás soluciones sostenibles para reducir el impacto ambiental de tus actividades diarias. 
                      Desde cubiertos hasta empaques, todos nuestros productos están diseñados pensando en el planeta. 
                      Explora nuestra oferta y únete a la lucha contra el plástico.
                  </p>
                  
                </div>
                {{-- <button class="sm:w-fit w-full px-3.5 py-2 bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                    <span class="px-1.5 text-white text-sm font-medium leading-6">Get Started</span>
                </button> --}}
            </div>
            <img class="lg:mx-0 mx-auto h-full rounded-3xl object-cover" src="/imagenes/pexels-akilmazumder-4763942.jpg" alt="about Us image" />
        </div>
    </div>
</section>
  <!-- Custom Style -->
  <style>
    .gallery-top .swiper-slide {
        height: fit-content;
        margin-right: 0px;
    }
    .swiper-wrapper{  
      
  }
  .gallery-top .swiper-slide-active {
    transform: scale(1.1);
  }      
.swiper-button-prev:after, .swiper-rtl .swiper-button-next:after,
.swiper-button-next:after, .swiper-rtl .swiper-button-prev:after{
    content: ' ';
}
.swiper-button-next svg, .swiper-button-prev svg{
    width: 20px;
    height: 20px;
}
.swiper-button-next, .swiper-button-prev{
  
  margin-top: 1px;
}
.swiper-button-prev, .swiper-rtl .swiper-button-next {
    left: auto;
}
.swiper-button-next, .swiper-rtl .swiper-button-prev {
    right: 10;
}

.swiper-horizontal>.swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal, .swiper-pagination-custom, .swiper-pagination-fraction{
  bottom: var(--swiper-pagination-bottom,px);
  z-index: 10;
  color: transparent;
  left: 14px;
}
.swiper-pagination-current{
  color: black;
}
.gallery-top .swiper-slide .swiper-box {
  opacity: 0;
  transform: scale(1);
}
.gallery-top .swiper-slide-active .swiper-box {
  transform: scale(0.9);
  opacity: 1;
}
@media (max-width: 1920px){
  .gallery-top .swiper-slide-active .swiper-box{
    opacity: 1;
  }
} 

</style>
<section class="py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 overflow-hidden">
    <div class="pb-16">
      <h2 class="w-full text-center text-gray-900 text-4xl font-bold font-manrope leading-loose pb-2.5">Galería</h2>
      <p class="w-full text-center text-gray-600 text-lg font-normal leading-8">Encuentra la armonía entre belleza y sostenibilidad en nuestra galería de productos.</p>
    </div>

    
    </div>
  </div>
</section>

<section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16 bg-gray-50">
  <div class="mx-auto grid max-w-screen-xl px-4 pb-8 md:grid-cols-12 lg:gap-12 lg:pb-16 xl:gap-0">
  <a href="{{ url('/products') }}">
   
      <div class="content-center justify-self-start md:col-span-7 md:text-start">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight dark:text-dark md:max-w-2xl md:text-5xl xl:text-6xl">¡No dejes pasar esta oportunidad!<br /></h1>
        <p class="mb-4 max-w-2xl text-gray-500 dark:text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl">No esperes mas - ¡Aprovecha un 20% de descuento en productos seleccionados y ahorra en grande!</p>
        <a href="#" class="inline-block rounded-lg bg-primary-700 px-6 py-3.5 text-center font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Shop Now</a>
      </div>
    </a>
    <a href="">
      <div class="hidden md:col-span-5 md:mt-0 md:flex">
       
        {{-- <img class="hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/girl-shopping-list-dark.svg" alt="shopping illustration" /> --}}
      </div>

    </a>
      
    </div>
  
  
  
</section>

    
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
  new Swiper('.swiper-container', {
    slidesPerView: 3, // Muestra 3 productos al mismo tiempo
    spaceBetween: 20, // Espaciado entre productos
    loop: true, // Activa el bucle para que los productos nunca desaparezcan
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 2000, // Intervalo de 5 segundos entre cambios
      },
  });
});
</script>

                                                                                            
                                            
                                                                                                                                        
@endsection

