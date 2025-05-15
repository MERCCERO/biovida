@extends('/plantilla/layout')

{{-- Colocar una secction  por cada yield agregaadao en la palntilla--}}
 @section('titulo','Políticas de privacidad y términos y condiciones')
     
{{--Section para ele contenido,  son componentes--}}

@section('contenido')

    <section class="">
      <div class="w-full">
        
        <div class="w-full bg-cover bg-center bg-no-repeat lg:pt-44 pt-28 lg:pb-24 pb-14 px-12 xl:px-20  " style="background-image: url('/imagenes/fondoTerms.jpg'); filter brightness-90">
          <h1 class="mb-8 text-center text-white font-bold font-manrope leading-tight lg:text-5xl text-3xl">
            Condiciones de uso  </h1>
          <p class="text-white text-lg leading-8 text-center font-normal px-4"> ¡Estamos aquí para ayudarte! Comunícate con nosotros por teléfono al <b>444-545-666</b> o envíanos un correo electrónico a <b>soporte@biovida.com</b> si tienes alguna pregunta o inquietud. </p>
        </div>
        <section class="w-full relative overflow-hidden lg:py-28 py-16">
          <div class="px-12 xl:px-20">
            <div class="flex flex-col md:flex-row w-full gap-8">
              <div class="w-full md:max-w-[176px] md:border-r md:border-gray-200">
                <ul class="tab-nav flex flex-col md:items-start items-center lg:gap-10 gap-6">
                  <li>
                    <a href="#" class="font-medium text-base leading-7 text-green-500">Terminos de Uso</a>
                  </li>
                  
                </ul>
              </div>
              <div class="w-full tab-pane max-md:px-4">
                <h2 class="font-manrope font-bold lg:text-4xl text-3xl text-gray-900 mb-5">Terminos de Uso</h2>
                <div class="flex items-center gap-3 lg:mb-10 mb-8">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.0054 8V12.5322C12.0054 12.8286 12.1369 13.1098 12.3645 13.2998L15 15.5M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22Z" stroke="#22C55E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <p class="font-medium text-xl leading-8 text-green-400">Ultima Actualizacion: May 10, 2025</p>
                </div>
                <p class="font-normal text-lg leading-8 text-gray-500 lg:mb-10 mb-8"> Estos son los términos y condiciones (los “Términos”) en virtud de los cuales le proporcionamos productos, incluidos servicios y contenido digital. Lea estos Términos detenidamente antes de acceder a nuestro contenido digital o utilizar nuestros servicios. Estos Términos, junto con nuestra Política de privacidad y Política de cookies a las que se hace referencia, detallan cómo le proporcionaremos contenido y/o servicios digitales, cómo usted y nosotros podemos cambiar o finalizar el contrato, qué hacer en caso de que surja un problema y otra información importante.<br>
                  <br>Quienes somos - Somos Biovida.<br>
                  <br> Cómo contactarnos - Puede contactarnos llamando a nuestro equipo de atención al cliente al [número de contacto] o escribiéndonos a soporte@biovida.com.
                </p>
                <h5 class="font-manrope font-bold md:text-3xl text-2xl text-gray-900 mb-4">Contenido</h5>
                <ul class="ml-8 lg:mb-10 mb-8">
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#01">Su aceptación de estos Términos a través de su acceso al Sitio o su uso del Sitio.</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#02">Contenido y servicios</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#03">Biovida no ofrece ni proporciona asesoramiento legal</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#04">Biovida no es un bufete de abogados. BioVida no ofrece representación legal</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#05">BioVida is Not a Referral Service</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#06">There is No Attorney-Client relationship between You and BioVida and You Agree that You</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#07">Attorney Users Are Not Employees of Pagedone</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#08">All Legal Fees Are Paid to Attorney Users, Not to Pagedone</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#09">There Is No Fee to BioVida for Finding EngagementsThere Is No Fee to BioVida for Finding Engagements</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#10">Non-circumvention</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#11">Expectations</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#12">Your Responsibilities</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#13">Your Use and Restrictions</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#14">Confidentiality</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#15">Indemnification</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#16">Communication and Other Data</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#17">Electronic Notices and Agreements</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#18">Premium Services </a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#19">Hyperlinks</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="20">Copyright and Limited Use</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#21">Changes</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#22">Your Content</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#23">Copyright Complaints</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#24">Disclaimer</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#25">Limitation of Liability. BioVida provides the Site and the Service “as is”, without warranty of any kind</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#26">Entire agreement</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#27">Assignability</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#28">Arbitration</a>
                  </li>
                  <li class="list-decimal font-normal text-lg text-gray-500">
                    <a href="#29">Minimum Age for Use</a>
                  </li>
                </ul>
                <ul class="flex flex-col ml-8 gap-10 list-outside list-decimal font-manrope font-bold text-3xl">
                  <li id="01" class="list-decimal">
                    <h2 class="font-manrope font-bold lg:text-3xl text-2xl text-gray-900"> Your Agreement to these Terms through Your Access of the Site or Your Use of the Site. </h2>
                    <p class="mt-5 font-normal text-lg leading-8 text-gray-500"> These Terms govern your use of the Site, both as a visitor and as a registered user (each visitor and each registered user is referred to generally for purposes of these Terms as a "Client User"). BY USING THE SITE, AND/OR BY REGISTERING WITH US, YOU AGREE TO THESE TERMS OF USE, You consent to the information practices disclosed in our Privacy Policy and our Cookies Policy which are incorporated herein by reference, and that you consent to resolve in the State of New York pursuant to the terms set forth herein any dispute that you may have with us, or the Site. Please note that we offer the Site "AS IS" and without warranties. If you are registering an account or using the Site on behalf of an individual or entity other than yourself, you represent that you are authorized by such individual or entity to accept these Terms on such individual's or entity's behalf. </p>
                  </li>
                  <li id="02" class="list-decimal">
                    <h2 class="font-manrope font-bold lg:text-3xl text-2xl text-gray-900">Content and Services</h2>
                    <p class="mt-5 font-normal text-lg leading-8 text-gray-500"> Everything we offer on and through the Site is referred to in these Terms collectively as the "Services". <br>
                      <br> Some of what is on the Site is viewable without registering with us, but to actively participate or store your information, you must register as a member and authorize the use and disclosure of your personal and legal information pursuant to the terms of our Privacy Policy for purposes of allowing us to provide the Services and as otherwise disclosed in our Privacy Policy available at <span class="cursor-pointer underline underline-offset-4"> <www class="biovida"></www>.io/disclaimers-privacy. </span> BioVida is an online platform that connects legal professionals ("Attorney Users") with potential Client Users seeking legal services. Pagedone itself does not provide legal advice and does not provide legal services of any nature whatsoever. And Pagedone does not guarantee that Client Users will find legal representation through its system. Pagedone offers no opinion nor does it take a position on when or if an attorney-client relationship has been formed between its Client Users and Attorney Users. BioVida is not a party to the agreements between Client Users and Attorney Users governing the attorney-client relationship nor is BioVida involved in the actual representation of clients. As a result, BioVida cannot ensure the completion of agreements between the Client User and Attorney User, the accuracy or completeness of the work-product of the Attorney User, or the integrity of either party. The Client User is responsible for evaluating the integrity and abilities of all Attorney Users with whom the Client User communicates using the Site. You acknowledge that although some of the content, text, data, graphics, images, information, suggestions, guidance, and other material (collectively, "Information") that is provided to you on the Site (including Information provided in direct response to your questions or postings) may be provided by individuals in the legal profession, the provision of such Information does not create an attorney-client relationship and does not constitute an opinion or legal advice, but is provided to assist you with locating an appropriate legal professional. Any form of use of the Site by potential clients or subscribing Attorney Users is not intended to and will not create an attorney-client relationship between or among any person, entity, and Pagedone. Any electronic communication sent to anyone at BioVida other than an Attorney User will not create an attorney-client relationship between the Client User and BioVida.
                    </p>
                  </li>
                  <li id="03" class="list-decimal">
                    <h2 class="font-manrope font-bold lg:text-3xl text-2xl text-gray-900">BioVida Does Not Offer and Does Not Provide Legal Advice</h2>
                    <p class="mt-5 font-normal text-lg leading-8 text-gray-500"> The information that you receive from Biovida, and its affiliates is for informational and scheduling purposes only. BioVida is not a design firm nor does it offer you design advice, recommendations, consultations or any kind of counseling.   BioVida makes its Designers available to you and any information provided to you by BioVida (other than through a Designer that you hire to work with you) is (i) provided by independent design professionals and organizations representing the interests of BioVida, (ii) is for informational purposes only, and (iii) does not establish any designer-client relationship between you and BioVida. </p>
                  </li>
                </ul>
                
              </div>
            </div>
          </div>
        </section>
       
      </div>
    </section>
                                     
@endsection