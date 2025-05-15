@extends('/plantilla/layout') 

@section('titulo','Acerca de nosotros')

@section('contenido')
<section class="py-24 bg-gray-50">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
            
            <!-- Imágenes -->
            <div class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-first order-last">
                <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                    <img class="rounded-xl object-cover" src="/imagenes/takeCare.jpg" alt="about Us image" />
                </div>
                <img class="sm:ml-0 ml-auto rounded-xl object-cover" src="/imagenes/biodegradable.png" alt="about Us image" />
                
                <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                    <img class="rounded-xl object-cover" src="/imagenes/biodegradable3.jpg" alt="about Us image" />
                </div>
                <img class="sm:ml-0 ml-auto rounded-xl object-cover" src="/imagenes/biodegradable2.jpg" alt="about Us image" />
            </div>

            <!-- Contenido -->
            <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                <div class="w-full flex-col justify-center items-start gap-8 flex">
                    <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                        <h2 class="text-gray-900 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">Eco-consciente, responsable y 100% biodegradable.</h2>
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center text-justify">
                            Somos una empresa mexicana comprometida con el cuidado del medio ambiente. Nuestra misión es contribuir activamente a la reducción de residuos plásticos y del impacto ambiental, proporcionando productos biodegradables y ecológicos que faciliten un estilo de vida más sustentable.
                        </p>
                    </div>

                    <div class="w-full lg:justify-center items-center sm:gap-10 gap-5 inline-flex">
                        <div class="flex-col justify-start items-start inline-flex">
                            <h3 class="text-green-400 text-4xl font-bold font-manrope leading-normal">33+</h3>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed">Años de experiencia</h6>
                        </div>
                        <div class="flex-col justify-start items-start inline-flex">
                            <h4 class="text-green-400 text-4xl font-bold font-manrope leading-normal">125+</h4>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed">Proyectos exitosos</h6>
                        </div>
                        <div class="flex-col justify-start items-start inline-flex">
                            <h4 class="text-green-400 text-4xl font-bold font-manrope leading-normal">52+</h4>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed">Clientes satisfechos</h6>
                        </div>
                    </div>

                    <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center text-justify">
                            Fundada con la visión de un futuro más verde, creemos en la importancia de ofrecer alternativas sostenibles que sean tanto accesibles como eficaces. Nos especializamos en una amplia gama de productos biodegradables, diseñados para descomponerse naturalmente y minimizar su huella ambiental.
                        </p>
                    </div>

                    <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center text-justify">
                            Nos dedicamos a la constante innovación para asegurar que nuestros productos cumplan con los más altos estándares de calidad y sustentabilidad. Además, trabajamos estrechamente con proveedores y fabricantes comprometidos con prácticas ecológicas, asegurando que cada producto que llega a las manos de nuestros clientes sea un paso hacia un planeta más limpio.
                        </p>
                    </div>

                    <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center text-justify">
                            En <b>BIOVIDA</b>, estamos convencidos de que cada pequeña acción cuenta. Te invitamos a unirte a nuestra misión de crear un futuro más saludable y sustentable para las generaciones futuras.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
