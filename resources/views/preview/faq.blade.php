@extends('/plantilla/layout')

{{-- Colocar una seccion por cada yiel agregado en la plantilla --}}

{{-- section para titulo, este solo el texto, NO REQUIERE el endsection --}}
@section('titulo','FAQs')
    

{{-- setiono para el contenido  con componentes --}}
@section('contenido')
<section class="py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div
      class="flex flex-col justify-center items-center gap-x-16 gap-y-5 xl:gap-28 lg:flex-row lg:justify-between max-lg:max-w-2xl mx-auto max-w-full"
    >
      <div class="w-full lg:w-1/2">
        <img
          src="https://pagedone.io/asset/uploads/1696230182.png"
          alt="FAQ tailwind section"
          class="w-full rounded-xl object-cover"
        />
      </div>
      <div class="w-full lg:w-1/2">
        <div class="lg:max-w-xl">
          <div class="mb-6 lg:mb-16">
            <h6
              class="text-lg text-center font-medium text-green-500 mb-2 lg:text-left"
            >
              FAQs
            </h6>
            <h2
              class="text-4xl text-center font-bold text-gray-900 leading-[3.25rem] mb-5 lg:text-left"
            >
            ¿Buscas respuestas?
            </h2>
          </div>
          <div class="accordion-group" data-accordion="default-accordion">
            <div
              class="accordion pb-8 border-b border-solid border-gray-200 active"
              id="basic-heading-one-with-arrow-always-open"
            >
              <button
                id='p_qs1'
                class="accordion-toggle group inline-flex items-center justify-between text-xl font-normal leading-8 text-gray-600 w-full transition duration-500 hover:text-green-400 accordion-active:text-green-400 accordion-active:font-medium always-open"
                aria-controls="basic-collapse-one-with-arrow-always-open"
              >
                <h5 >¿Cómo crear una cuenta?</h5>
                <svg
                  class="text-gray-900 transition duration-500 group-hover:text-green-400 accordion-active:text-green-400 accordion-active:rotate-180"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
              </button>
              <div
                id="div_qs1"
                class="accordion-content w-full px-0 overflow-hidden pr-4 active"
                aria-labelledby="basic-heading-one-with-arrow-always-open"
                style="display: none;"
              >
                <p class="text-base font-normal text-gray-600 ">
                  Para crear una cuenta, busque el botón “Registrarse” o “Crear
cuenta”, complete el formulario de registro con su
información personal y haga clic en “Crear cuenta” o “Registrarse”. Verifique su dirección de correo electrónico si es necesario y luego inicie
sesión para comenzar a usar la plataforma.
                </p>
              </div>
            </div>
            <div
              class="accordion py-8 border-b border-solid border-gray-200 "
              id="basic-heading-two-with-arrow-always-open"
            >
              <button
                id='p_qs2'
                class="accordion-toggle group inline-flex items-center justify-between font-normal text-xl leading-8 text-gray-600 w-full transition duration-500 hover:text-green-400 accordion-active:text-green-400 accordion-active:font-medium"
                aria-controls="basic-collapse-two-with-arrow-always-open"
              >
                <h5>¿Tiene algún problema de confianza?</h5>
                <svg
                  class="text-gray-900 transition duration-500 group-hover:text-green-400 accordion-active:text-gren-400 accordion-active:rotate-180"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
              </button>
              <div
                id="div_qs2"
                class="accordion-content w-full px-0 overflow-hidden pr-4"
                aria-labelledby="basic-heading-two-with-arrow-always-open"
                style="display: none;"
              >
                <p class="text-base text-gray-500 font-normal">
                  Nuestro enfoque en brindar capacidades de gestión de contenido sólidas y fáciles de usar garantiza que usted pueda administrar su contenido con confianza y alcanzar sus objetivos de marketing de contenido con facilidad.
                </p>
              </div>
            </div>
            <div
              class="accordion py-8 border-b border-solid border-gray-200"
              id="basic-heading-three-with-arrow-always-open"
            >
              <button
                id='p_qs3'
                class="accordion-toggle group inline-flex items-center justify-between text-xl font-normal leading-8 text-gray-600 w-full transition duration-500 hover:text-green-400 accordion-active:font-medium accordion-active:text-green-400"
                aria-controls="basic-collapse-three-with-arrow-always-open"
              >
                <h5>¿Cómo puedo restablecer mi contraseña?</h5>
                <svg
                  class="text-gray-900 transition duration-500 group-hover:text-green-400 accordion-active:text-green-400 accordion-active:rotate-180"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
              </button>
              <div
                id="div_qs3"
                class="accordion-content w-full px-0 overflow-hidden pr-4"
                aria-labelledby="basic-heading-three-with-arrow-always-open"
                style="display: none;"
              >
                <p class="text-base text-gray-500 font-normal">
                  Para restablecer tu contraseña, ve a la página de inicio de sesión y haz clic en "¿Olvidaste tu contraseña?". Luego, ingresa tu dirección de correo electrónico asociada con tu cuenta y te enviaremos un enlace para restablecer tu contraseña. Si no recibes el correo, revisa tu carpeta de spam o intenta nuevamente.
                </p>
              </div>
            </div>
            <div
              class="accordion py-8 border-b border-solid border-gray-200"
              id="basic-heading-four-with-arrow-always-open"
            >
              <button
                id='p_qs4'
                class="accordion-toggle group inline-flex items-center justify-between text-xl font-normal leading-8 text-gray-600 w-full transition duration-500 hover:text-green-400 accordion-active:font-medium accordion-active:text-green-400"
                aria-controls="basic-collapse-four-with-arrow-always-open"
              >
                <h5>¿Cuál es el proceso de pago?</h5>
                <svg
                  class="text-gray-900 transition duration-500 group-hover:text-green-400 accordion-active:text-green-400 accordion-active:rotate-180"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
              </button>
              <div
                id="div_qs4"
                class="accordion-content w-full px-0 overflow-hidden pr-4"
                aria-labelledby="basic-heading-four-with-arrow-always-open"
                style="display: none;"
              >
                <p class="text-base text-gray-500 font-normal">
                   El proceso de pago es sencillo: selecciona los productos que deseas comprar y dirígete a la página de pago. Allí, podrás elegir tu método de pago, ya sea tarjeta de crédito, débito o PayPal. Después de ingresar los detalles de pago, haz clic en "Confirmar compra". Recibirás una confirmación de tu pedido por correo electrónico.
                </p>
            </div> 
          </div>
          <div class="accordion-group" data-accordion="default-accordion">
            <div
              class="accordion py-8 "
              id="basic-heading-one-with-arrow-always-open"
            >
              <button
                id='p_qs5'
                class="accordion-toggle group inline-flex items-center justify-between text-xl font-normal leading-8 text-gray-600 w-full transition duration-500 hover:text-green-400 accordion-active:font-medium accordion-active:text-green-400"
                aria-controls="basic-collapse-one-with-arrow-always-open"
              >
                <h5 >¿Puedo cancelar mi pedido después de realizar el pago?</h5>
                <svg
                  class="text-gray-900 transition duration-500 group-hover:text-green-400 accordion-active:text-green-400 accordion-active:rotate-180"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
              </button>
              <div
                id="div_qs5"
                class="accordion-content w-full px-0 overflow-hidden pr-4"
                aria-labelledby="basic-heading-one-with-arrow-always-open"
                style="display: none;"
              >
                <p class="text-base font-normal text-gray-600 ">
                  Los pedidos son procesados rápidamente para garantizar una entrega ágil. Sin embargo, si necesitas modificar o cancelar un pedido, comunícanoslo lo antes posible. Si el pedido aún no ha sido procesado, podremos realizar cambios; de lo contrario, te orientaremos sobre los pasos a seguir.
                </p>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function togglePregunta(idButton, idDiv) {
    const button = document.getElementById(idButton);
    const contentDiv = document.getElementById(idDiv);

    button.addEventListener('click', () => {
      if (contentDiv.style.display === 'none') {
        contentDiv.style.display = 'block';
      } else {
        contentDiv.style.display = 'none';
      }
    });
  }

  // Inicializa los toggles
  togglePregunta('p_qs1', 'div_qs1');
  togglePregunta('p_qs2', 'div_qs2');
  togglePregunta('p_qs3', 'div_qs3');
  togglePregunta('p_qs4', 'div_qs4');
  togglePregunta('p_qs5', 'div_qs5');
</script>

                                        

@endsection