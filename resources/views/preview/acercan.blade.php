@extends('/plantilla/layout')

{{-- Colocar una seccion por cada yiel agregado en la plantilla --}}

{{-- section para titulo, este solo el texto, NO REQUIERE el endsection --}}
@section('titulo','Acerca de nosotros')
    

{{-- setiono para el contenido  con componentes --}}
@section('contenido')
<section class="py-24 bg-gray-50">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
                <div class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-first order-last">
                <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                    <img class=" rounded-xl object-cover" src="/imagenes/takeCare.jpg" alt="about Us image" />
                </div>
                <img class="sm:ml-0 ml-auto rounded-xl object-cover" src="/imagenes/biodegradable.png"
                    alt="about Us image" />
                
                <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                    <img class=" rounded-xl object-cover" src="/imagenes/biodegradable3.jpg" alt="about Us image" />
                </div>
                <img class="sm:ml-0 ml-auto rounded-xl object-cover" src="/imagenes/biodegradable2.jpg"
                    alt="about Us image" />
                    
        </div>
        
                
            <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                <div class="w-full flex-col justify-center items-start gap-8 flex">
                    <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                        <h2
                            class="text-gray-900 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">Eco-consciente, responsable y 100% biodegradable.</h2>
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                            somos una empresa mexicana comprometida con el cuidado del medio ambiente. Nuestra misión es contribuir activamente a la reducción de residuos plásticos y el impacto ambiental, proporcionando productos biodegradables y ecológicos que faciliten un estilo de vida más sustentable..</p>
                    </div>
                    <div class="w-full lg: justify-center items-center sm:gap-10 gap-5 inline-flex">
                        <div class="flex-col justify-start items-start inline-flex">
                            <h3 class="text-green-400 text-4xl font-bold font-manrope leading-normal">33+</h3>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed">Anos de Experiencia</h6>
                        </div>
                        <div class="flex-col justify-start items-start inline-flex">
                            <h4 class="text-green-400 text-4xl font-bold font-manrope leading-normal">125+</h4>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed">Proyectos Exitosos</h6>
                        </div>
                        <div class="flex-col justify-start items-start inline-flex">
                            <h4 class="text-green-400 text-4xl font-bold font-manrope leading-normal">52+</h4>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed">Clientes Satisfechos</h6>
                        </div>
                    </div>
                    <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                            Fundada con la visión de un futuro más verde, creemos en la importancia de ofrecer alternativas sostenibles que sean tanto accesibles como eficaces. Nos especializamos en una amplia gama de productos biodegradables, diseñados para descomponerse naturalmente y minimizar su huella ambiental.</p>
                    </div>
                    <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                            Nos dedicamos a la constante innovación para asegurar que nuestros productos cumplan con los más altos estándares de calidad y sustentabilidad. Además, trabajamos estrechamente con proveedores y fabricantes comprometidos con prácticas ecológicas, asegurando que cada producto que llega a las manos de nuestros clientes sea un paso hacia un planeta más limpio.</p>
                    </div>
                    <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                            En <b>BIOVIDA</b>, estamos convencidos de que cada pequeña acción cuenta. Te invitamos a unirte a nuestra misión de crear un futuro más saludable y sustentable para las generaciones futuras.</p>
                    </div>
                    
                    
                </div>
                {{-- <button
                    class="sm:w-fit w-full px-3.5 py-2 bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                    <span class="px-1.5 text-white text-sm font-medium leading-6">Read More</span>
                </button> --}}
            </div>
        </div>
    </div>
</section>
                              
@endsection