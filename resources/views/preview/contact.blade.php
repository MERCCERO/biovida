@extends('/plantilla/layout')

@section('titulo','Contacto')

@section('contenido')
<section class="py-24 bg-gray-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="md:flex gap-x-24 clear-left md:mb-16 mb-10">
            <div class="md:mb-0 mb-4">
                <h2 class="text-black font-manrope text-4xl font-semibold leading-10 mb-5 md:text-left text-center">Contáctenos</h2>
                <p class="text-gray-600 text-lg font-normal leading-7 mb-7 md:text-left text-center">
                    Ya sea que tenga una inquietud o simplemente quiera saludarnos, estamos aquí para facilitar la comunicación con usted.
                </p>
                {{-- <div class="flex md:items-center md:justify-start justify-center">
                    <button class="w-36 h-12 rounded-full bg-green-400 transition-all duration-700 hover:bg-green-600 shadow text-white text-center text-base font-semibold leading-6" type="button" onclick="window.location.href='{{ url('/help') }}';">¿Necesitas ayuda?</button>
                </div> --}}
            </div>
            <div class="border-l-2 md:border-green-400 border-white px-10 py-6">
                <div class="mb-8">
                    <h6 class="text-gray-500 text-sm font-medium leading-5 pb-3 md:text-start text-center">Dirección de correo electrónico</h6>
                    <h3 class="text-black text-xl font-semibold leading-8 md:text-start text-center">contactanos@biovida.com</h3>
                </div>
                <div>
                    <h6 class="text-gray-500 text-sm font-medium leading-5 pb-3 md:text-start text-center">Número de teléfono</h6>
                    <h3 class="text-black text-xl font-semibold leading-8 md:text-start text-center">470-601-1911</h3>
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-8">
            <div class="h-96 relative flex justify-center mb-6">
                <div class="w-full h-full absolute bg-gradient-to-t from-gray-800/50 to-gray-600/50"></div>
                <img src="/imagenes/mex1.jpg" alt="United Kingdom image" class="w-full h-full object-cover">
                <div class="absolute bottom-0 mb-6 text-center px-6">
                    <h5 class="text-white text-lg font-semibold leading-7 mb-2">Bellas Artes</h5>
                    <p class="text-white text-base font-medium leading-6">060 Avenida Juárez, Eje Central</p>
                </div>
            </div>
            <div class="h-96 relative flex justify-center mb-6">
                <div class="w-full h-full absolute bg-gradient-to-t from-gray-800/50 to-gray-600/50"></div>
                <img src="/imagenes/mex2.jpg" alt="Germany image" class="w-full h-full object-cover">
                <div class="absolute bottom-0 mb-6 text-center px-6">
                    <h5 class="text-white text-lg font-semibold leading-7 mb-2">Museo Soumaya</h5>
                    <p class="text-white text-base font-medium leading-6">115 Blvd. Miguel de Cervantes Saavedra, Granada</p>
                </div>
            </div>
            <div class="h-96 relative flex justify-center mb-6">
                <div class="w-full h-full absolute bg-gradient-to-t from-gray-800/50 to-gray-600/50"></div>
                <img src="/imagenes/mex3.jpg" alt="France image" class="w-full h-full object-cover">
                <div class="absolute bottom-0 mb-6 text-center px-6">
                    <h5 class="text-white text-lg font-semibold leading-7 mb-2">Museo Cabañas</h5>
                    <p class="text-white text-base font-medium leading-6">443 C. Cabañas, Las Fresas</p>
                </div>
            </div>
            <div class="h-96 relative flex justify-center mb-6">
                <div class="w-full h-full absolute bg-gradient-to-t from-gray-800/50 to-gray-600/50"></div>
                <img src="/imagenes/mex4.jpg" alt="Switzerland image" class="w-full h-full object-cover">
                <div class="absolute bottom-0 mb-6 text-center px-6">
                    <h5 class="text-white text-lg font-semibold leading-7 mb-2">Torre Latinoamericana</h5>
                    <p class="text-white text-base font-medium leading-6">600Eje Central Lázaro Cárdenas</p>
                </div>
            </div>
        </div>
    </div>

    <div class="location-body py-5 bg-light">
        <div class="w-full flex flex-col items-center justify-center text-center px-4">
            <h1 class="text-gray-500 text-xl font-semibold leading-8 md:text-start text-center">Nuestra Ubicación</h1>
            <p class="text-black-500 text-sm font-medium leading-5 pb-3 md:text-start text-center">Visítanos en nuestra tienda física:</p>

            <!-- Google Maps Embed -->
            <div class="w-full flex justify-center">
                <iframe class="location-map" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.263990935317!2d-103.3295223!3d20.7252968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b04f56f4c085%3A0xb846fc8c465602b6!2sC.%20Antonio%20%C3%81lvarez%20Vega%20957%2C%20Lomas%20del%20Para%C3%ADso%20II%2C%2044250%20Guadalajara%2C%20Jal.!5e0!3m2!1sen!2smx!4v1696170306544!5m2!1sen!2smx"
                        allowfullscreen>
                </iframe>
            </div>

            <!-- External map link button -->
            <a class="btn btn-outline-primary btn-lg view-map-btn" 
               href="https://maps.app.goo.gl/S2eUgxebgGRrp2bCA" 
               target="_blank">
                Ver en Google Maps
            </a>
        </div>
    </div>

    <style>
    .location-container {
        text-align: center;
    }

  .location-map {
    width: 100%;
    max-width: 960px;
    height: 500px;
    border: 0;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.15);
    display: block;
}

    .view-map-btn {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 20px;
        border: 2px solid #007bff;
        border-radius: 5px;
        color: #007bff;
        text-decoration: none;
        transition: 0.3s;
    }

    .view-map-btn:hover {
        background-color: #007bff;
        color: white;
    }
    </style>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</section>
@endsection
