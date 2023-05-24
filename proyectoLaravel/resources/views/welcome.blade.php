


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link rel="stylesheet" href="resources/css/#app.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    
    
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    @vite('resources/css/app.css')

    

    <style>
      
      .gradient {
        background: linear-gradient(90deg, oklch(85% 0.15 112),oklch(85% 0.15 112));
      }
      .w-logo{
        width: 80%;
      }
      .contenedor {
        position: relative;
        width: 50%;
        height: 500px;
        background-color:#0E181B;
        border-radius: 15px;
      }
      
      .imagen {
        position: absolute;
        width: 100%;
        height: 100%;
        visibility: hidden;
        opacity: 0;
      }
      
      .imagen img {
        height: 100%;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
      }
      .texto {
        position: absolute;
        width: 100%;
        text-align: center;
        top: 85%;
        color: white;
        font-weight: bold;
      }
      
      .contenedor a{
        position: absolute;
        text-decoration: none;
        color: 0E181B;
        font-size: 36px;
        top : 50%;
        transform: translateY(-50%);
      }
      .siguiente {
        left: 97%;
      }
      
      .boton {
        position: absolute;
        top: 5%;
        left: 95%;
      }
      
      .puntos {
        position: absolute;
        top: 93%;
        width: 100%;
        text-align: center;
      }
      .punto {
        display: inline-block;
        width: 16px;
        height: 16px;
        background-color: #0E181B;
        border-radius: 50%;
        margin-right: 5px;
      }
      .punto:hover {
        cursor: pointer;
        background-color: #0E181B;
      }
      .contenedor a:hover {
        color: #0E181B;
      }
      
      .actual {
        visibility: visible;
        opacity: 1;
        transition: visibility 1s, opacity 1s;
      }
      .activo {
        background-color: #0E181B;
      }
      

    </style>
  </head>
  <body class="leading-normal tracking-normal text-dark-1 gradient  " style="font-family: 'recursive';">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-dark-2">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2  ">                                                                
        <div class="flex items-center">
          <img class="w-logo" src="{{ asset('images/logo1.png') }}" alt="imagen">
          <h1 class="text-3xl ml-3"></h1>
        </div>                                                                                                
        <div class="block lg:hidden pr-4">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
           
            <li class="mr-3">
              <a href="{{ route('login') }}"
      class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm  dark:text-gray-400 dark:hover:text-white">Iniciar sesión</a>
            </li>
            <li class="mr-3">
<button class="bg-dark-1 px-4 py-2 rounded-full">
<a href="{{ route('register') }}" class="font-semibold text-white hover:text-yellow-200 focus:rounded-sm  dark:text-gray-400 dark:hover:text-white">Formar parte de FreeSites</a>
</button>

</li>

          </ul>
        </div>
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    <!--Hero-->
    <div class="pt-24 h-104">
      <div class="container  px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-3/5 justify-center items-start text-center md:text-left">
          
          <h1 class="my-4 text-5xl font-bold leading-tight">
            ¿Necesitas una mesa libre al instante?
          </h1>
          <p class="leading-normal text-2xl mb-8">
            Si quieres encontrar mesa libre en un restaurante cerca de ti y sin esperas, descárga nuestra aplicación
          </p>
         
        </div>
        <!--Right Col-->

      </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#0E181B" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
    </div>
    <section class="bg-dark-1 flex flex-wrap border-b py-8">
      <div class="container max-w-5xl  mx-auto m-8">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-light-2">
          <img class="mx-auto w-2/3 mt-4" src="{{ asset('images/logo.svg') }}"  alt="imagen1">
        </h2> 

        

        <div class="flex justify-end mt-16">
          <div class="w-5/6 sm:w-1/2 p-6 mt-24">
            <h2 class="text-4xl text-light-2 font-bold leading-none mb-3">
              ¿ Por qué Nosotros?
            </h2>
            <p class="text-light-2 mb-8">
              "Con nuestra aplicación de reserva de mesas en restaurantes, nunca ha sido tan fácil encontrar el lugar perfecto para comer. Olvídate de esperar en largas filas o llamar por teléfono para hacer una reserva. Con sólo unos clics, podrás reservar una mesa al instante y disfrutar de tu comida favorita sin tener que preocuparte por esperas innecesarias."
              <br />
              <br />
              <br>
              <br>
            </p>
          </div>
          <div class="contenedor">
            <div class="imagen actual">
              <img src="{{ asset('images/login.png') }}" />                  
            </div>
        
            <div class="imagen">
              <img src="{{ asset('images/bienvenida.png') }}" />                 
            </div>
        
            <div class="imagen">
              <img src="{{ asset('images/principal.png') }}" />                 
            </div>
        
            <div class="imagen">
              <img src="{{ asset('images/detalle.png') }}" />                
            </div>
            <div class="imagen">
              <img src="{{ asset('images/mapa.png') }}" />                 
            </div>
            <div class="imagen">
              <img src="{{ asset('images/filtroMapa.png') }}" />                 
            </div>
            <div class="imagen">
              <img src="{{ asset('images/reserva.png') }}" />                 
            </div>
            <div class="imagen">
              <img src="{{ asset('images/filtros.png') }}" />                  
            </div>
            <div class="imagen">
              <img src="{{ asset('images/reservaPendiente.png') }}" />             
            </div>
            <div class="imagen">
              <img src="{{ asset('images/opiniones.png') }}" />
            </div>
            <div class="imagen">
              <img src="{{ asset('images/perfil.png') }}" />
            </div>
        
            <div class="puntos mt-10" >
              <span class="punto activo" onclick="mostrar(0);"></span>
              <span class="punto" onclick="mostrar(1);"></span>
              <span class="punto" onclick="mostrar(2);"></span>
              <span class="punto" onclick="mostrar(3);"></span>
              <span class="punto" onclick="mostrar(4);"></span>
              <span class="punto" onclick="mostrar(5);"></span>
              <span class="punto" onclick="mostrar(6);"></span>
              <span class="punto" onclick="mostrar(7);"></span>
              <span class="punto" onclick="mostrar(8);"></span>
              <span class="punto" onclick="mostrar(9);"></span>
              <span class="punto" onclick="mostrar(10);"></span>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-dark-1 border-b py-8">
        <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 75vh;"
      >
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("https://animalgourmet.com/wp-content/uploads/2019/04/img_3504.jpg");'
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-50 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div class="pr-12">
                <h1 class="text-white font-semibold text-5xl">
                 TE SORPRENDERÁS
                </h1>
                <p class="mt-4 text-lg text-gray-300">
                 
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-dark-1 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
      </div>
      <section class="pb-20 bg-dark-1 -mt-24">
        <div class="container mx-auto px-4 ">
          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-dark-2 w-full mb-8 shadow-lg rounded-lg"
              >
              <div class="px-4 py-5 flex-auto flex flex-col items-center">
                <img class="w-45 h-24 object-cover p-2" src="{{ asset('images/reloj.png') }}">
                <h6 class="text-xl font-semibold text-light-1">En pocos minutos</h6>
                <p class="mt-2 mb-4 text-light-1">
                  Si tienes ganas de salir a comer o cenar
              y no sabes qué restaurantes tienen mesas
              disponibles en ese momento <br>
              ¡Nuestra aplicación te lo dice al instante!<br>
              En pocos minutos encontraremos el
              restaurante perfecto para ti.
                </p>
              </div>
              
              
              </div>
              
            </div>

            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-dark-2 w-full mb-8 shadow-lg rounded-lg"
              >
              <div class="px-4 py-5 flex-auto flex flex-col items-center">
                <img class="w-45 h-24 object-cover p-2" src="{{ asset('images/tenedor.png') }}">
                <h6 class="text-xl font-semibold text-light-1">Tipos de comida</h6>
                <p class="mt-2 mb-4 text-light-1">
                  ¿Quieres disfrutar de una maravillosa velada
                  y poder elegir el tipo de comida?<br>
                  ¡NO TE PREOCUPES MÁS!<br>
                  Buscamos tu 
                  restaurante por tipo de comida,  para 
                  que te sea sencillo elegir el lugar perfecto. 
                </p>
              </div>
              
              
              </div>
              
            </div>
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-dark-2 w-full mb-8 shadow-lg rounded-lg"
              >
              <div class="px-4 py-5 flex-auto flex flex-col items-center">
                <img class="w-45 h-24 object-cover p-2" src="{{ asset('images/location.svg') }}">
                <h6 class="text-xl font-semibold text-light-1">Cerca de tí</h6>
                <p class="mt-2 mb-4 text-light-1">
                  Podrás seleccionar los restaurantes disponibles más cercanos a tu posición <br>
                 ¿ A que es increible ?<br>
                 
                Ter ofrecemos disfrutar de una deliciosa
                  comida sin tener que preocuparte por
                  encontrar un lugar disponible y cerca de tí.
                </p>
              </div>
              
              
              </div>
              
            </div>
           
           
          </div>
         
                 
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
          <div class="w-full sm:w-1/2 p-6 mt-6">
          
          </div>
         
        </div>
      </div>
    </section>

  
           
    <section class="bg-dark-2 border-b py-8">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-light-2">
          ¿Como funciona?
        </h2>
    <div class="py-16 bg-dark-2">  
      <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
          <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
              <div class="bg-dark-1 rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8 padding:20px">
                  <div class="mb-12 space-y-4">
                      <h3 class="text-2xl font-bold text-highlight-regular">PASO 1</h3>
                      <p class="mb-6 text-action text-light-2"> Busca el restaurante que más te guste utilizando los filtros disponibles en la pantalla inicio: Distancia, Tipo de comida, por puntuación, con terraza o sin terraza y otros más.</p>
                      <a  class="block text-heading-2 text-light-2">Fitrar</a>
                  </div>
                  <img src="{{ asset('images/filtrar.png') }}" class="w-3/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
              </div>
              <div class="bg-dark-1 rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8 padding:20px">
                <div class="mb-12 space-y-4">
                    <h3 class="text-2xl font-bold text-highlight-regular">PASO 2</h3>
                    <p class="mb-6 text-action text-light-2"> Selecciona la distancia máxima que deseas que este el restaurante y el número de personas que van a completar la reserva y obtendrás todos los restaurantes con disponibilidad.</p>
                    <a  class="block text-heading-2 text-light-2">Distancia y Personas</a>
                </div>
                <img src="{{ asset('images/filtrarHora.png') }}" class="w-3/3 ml-auto -mb-12" alt="illustration1" loading="lazy" width="900" height="600">
            </div>
            <div class="bg-dark-1 rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8 padding:20px">
              <div class="mb-12 space-y-4">
                  <h3 class="text-2xl font-bold text-highlight-regular">PASO 3</h3>
                  <p class="mb-6 text-action text-light-2">   Por último, reservar el restaurante deseado y espera tan solo unos minutos a recibir la confirmación de reserva.</p><br><br>
                  <a  class="block text-heading-2 text-light-2">Reservar</a>
              </div>
              <img src="{{ asset('images/reservas.png') }}" class="w-3/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
          </div>
          </div>
      </div>
  </div>
</div>
</section>
   


<section class="bg-dark-3 py-8">
<div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
  <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-light-2">Aplicación Web</h2>
  <div class="flex flex-col items-center justify-center bg-dark-3 md:flex-row md:py-20">
    <div class="swiper-container overflow-x-scroll">
      <div class="swiper-wrapper flex">
        <div class="swiper-slide">
          <div class="max-w-xs bg-cover bg-center rounded-lg overflow-hidden shadow-lg m-2 md:w-80">
            <img src="{{ asset('images/wedadmin.png') }}" class="w-full" >
          </div>
        </div>
        <div class="swiper-slide">
          <div class="max-w-xs bg-cover bg-center rounded-lg overflow-hidden shadow-lg m-2 md:w-80">
            <img src="{{ asset('images/wedadmin.png') }}" class="w-full" >
          </div>
        </div>
        <div class="swiper-slide">
          <div class="max-w-xs bg-cover bg-center rounded-lg overflow-hidden shadow-lg m-2 md:w-80">
            <img src="{{ asset('images/wedadmin.png') }}" class="w-full" >
          </div>
        </div>
        <div class="swiper-slide">
          <div class="max-w-xs bg-cover bg-center rounded-lg overflow-hidden shadow-lg m-2 md:w-80">
            <img src="{{ asset('images/wedadmin.png') }}" class="w-full" >
          </div>
        </div>
        <div class="swiper-slide">
          <div class="max-w-xs bg-cover bg-center rounded-lg overflow-hidden shadow-lg m-2 md:w-80">
            <img src="{{ asset('images/wedadmin.png') }}" class="w-full" >
          </div>
        </div>
       
       
        
       
      </div>
      <div class="swiper-scrollbar"></div>
    </div>
    <div class="flex-1 mx-4 mt-8 md:mt-0">
      <p class="text-center text-light-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>
</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 'auto',
  scrollbar: {
    el: '.swiper-scrollbar',
    hide: true,
  },
});
</script>
    
    <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-light-2">Contacto</h2>
      <section class="relative block py-24 lg:pt-0 bg-dark-1 mt-96">
       
        <div class="container mx-auto max-full px-4 bg-transparent">
         
          <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48 ">
            <div class="w-full lg:w-6/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words max-full mb-6 shadow-lg rounded-lg bg-transparent border-2 border-yellow-200"
              >
                <div class="flex-auto p-5 lg:p-10">
                  <h4 class="text-2xl font-semibold text-light-1">¿Quieres más información?</h4>
                  <p class="leading-relaxed mt-1 mb-4 text-light-1">
                    Rellene este formulario y nos pondremos en contacto con usted en 24 horas.
                  </p>
                  <div class="relative w-full mb-3 mt-8">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2 text-light-1"
                      for="full-name"
                      >Nombre y apellidos</label
                    ><input
                      type="text"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-light-1 bg-dark-1 rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Escribe Nombre y Apellidos"
                      style="transition: all 0.15s ease 0s;"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2 text-light-1"
                      for="email"
                      >Email</label
                    ><input
                      type="email"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-light-1 bg-dark-1 rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Escribe tu Email"
                      style="transition: all 0.15s ease 0s;"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2 text-light-1"
                      for="message"
                      >Mensaje</label
                    ><textarea
                      rows="4"
                      cols="80"
                      class="border-1 px-3 py-3 placeholder-gray-400 text-light-1 bg-dark-1 rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Escribe que necesitas saber..."
                    ></textarea>
                  </div>
                  <div class="text-center mt-6">
                    <button class="bg-highlight-regular text-dark-3 active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:bg-gray-500 hover:text-white hover:border-yellow-200 outline-none focus:outline-none mr-1 mb-1 transition duration-150 ease-in-out" type="button">
                      Enviar
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
   
      </section>
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="#0E181B">
            <path
              d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
            ></path>
          </g>
          <g transform="translate(1.000000, 15.000000)" fill="#D0D757">               
          </g>
        </g>
      </g>
    </svg>
    <section class="container mx-auto text-center py-6 mb-12">
      <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
        ¡DESCÁRGATELA YA!
      </h2>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
    
      <div class="flex justify-center">
        <button class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-md mx-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 17l6-6m0 0l6 6m-6-6v12" />
          </svg>
          <span>Descargar en App Store</span>
        </button>
      
        <button class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-md mx-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 17l6-6m0 0l6 6m-6-6v12" />
          </svg>
          <span>Descargar en Play Store</span>
        </button>
      </div>  
    </section>
    <!--Footer-->
    <footer class="bg-white">
      <div class="container mx-auto px-8">
     
      </div>
      
    </footer>
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-highlight-regular");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-dark-3");
          navaction.classList.add("text-dark-3");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }

      var actual = 0;
  function puntos(n){
    var ptn = document.getElementsByClassName("punto");
    for(i = 0; i<ptn.length; i++){
      if(ptn[i].className.includes("activo")){
        ptn[i].className = ptn[i].className.replace("activo", "");
        break;
      }
    }
    ptn[n].className += " activo";
  }
  function mostrar(n){
    var imagenes = document.getElementsByClassName("imagen");
    for(i = 0; i< imagenes.length; i++){
      if(imagenes[i].className.includes("actual")){
        imagenes[i].className = imagenes[i].className.replace("actual", "");
        break;
      }
    }
    actual = n;
    imagenes[n].className += " actual";
    puntos(n);
  }
  
  function siguiente(){
    actual++;
    if(actual > 10){
      actual = 0;
    }
    mostrar(actual);
  }
  function anterior(){
    actual--;
    if(actual < 0){
      actual = 3;
    }
    mostrar(actual);
  }
  
  var velocidad = 5000;
  var play = setInterval("siguiente()", velocidad);
  
  function playpause(){
    var boton = document.getElementById("btn");
    if(play == null){
      boton.src = "http://www.reciclay.com.ve/gio/pause.png";
      play = setInterval("siguiente()", velocidad);
    } else {
      clearInterval(play);
      play = null;
      boton.src = "http://www.reciclay.com.ve/gio/play.png";
    }
  }
    </script>
  </body>
</html>