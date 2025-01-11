
@extends('layout')

@section('content')
    <div class=" flex flex-col md:flex-row  items-center  bg-primary ">
        <div class=" flex flex-col gap-4 items-center">
            <h1 class=" md:mt-14 mt-8 md:text-6xl text-3xl font-bold text-center">Productos Naturales Legacy</h1>
    
            <p class=" md:w-4/6 w-5/6  md:text-xl  ml-8 md:mt-20 mt-4">Legacy te ofrece una variedad de bebidas naturales para cuidar tu cuerpo desde adentro. Nuestras bebidas naturales con colágeno, energía y fórmulas digestivas te ayudarán a alcanzar tus objetivos.</p>
           <a href="{{route('productsPage')}}">
                <button
                class="cursor-pointer w-40  md:mt-20 mt-8 bg-secondary rounded-md text-black font-semibold transition duration-300 ease-in-out hover:bg-yellow-400 hover:ring-2 hover:ring-yellow-500 hover:shadow-xl hover:shadow-yellow-500 focus:ring-yellow-400 focus:shadow-yellow-500 px-5 py-2"
              >
                Ver productos
              </button>
           </a>
            

        </div>
        <figure class="flex justify-center">
            <img class="md:w-[1600px] w-64 p-2 mt-4" src="/img/productosLegacy2.webp" alt="banerLegacy">
        </figure>

    </div>
      <div class="h-20 bg-primary rounded-bl-[50%_100%] rounded-br-[50%_100%]">
      </div>
    
   
    <section class="bg-white mt-6">
        <h3 class=" text-3xl md:text-6xl text-center font-bold ">Todos nuestros productos</h2>
        <div>
            @include('infiniteScroll')
        </div>
    </section>

    <article class="flex mt-10 bg-primary justify-between ">
      <div class="flex flex-col items-center justify-center">
        <p class="md:text-6xl text-xl text-center font-medium">¡Sé un líder en la industria! </p>
       <p class="md:text-6xl text-xl md:mt-6 mt-4 text-center font-medium">Únete a nuestro equipo Legacy.</p>
       <a  href="{{route('aboutPage')}}">
          <button
          class="cursor-pointer w-40  md:mt-20 mt-8 bg-secondary rounded-md text-black font-semibold transition duration-300 ease-in-out hover:bg-yellow-400 hover:ring-2 hover:ring-yellow-500 hover:shadow-xl hover:shadow-yellow-500 focus:ring-yellow-400 focus:shadow-yellow-500 px-5 py-2"
        >
          Información 
        </button>
       </a>
      
      </div>
       
        <figure>
            <img class="md:w-[600px] rounded-3xl ml-3 md:ml-0 " src="/img/centroDistribucion.webp" alt="Imagen distribucion">
        </figure>
    </article>

   
        <section class="flex items-center justify-center ">
            <figure class=" flex justify-center mt-6 mr-10">
                <img class="w-48 md:w-72" src="/img/usoProduct.webp" alt="Uso del producto">
            </figure>
            <div>
              <p class="text-2xl md:text-6xl text-center my-10 font-semibold">Productos de fácil </p>
              <p class="text-2xl md:text-6xl text-center my-10 font-semibold"> preparación</p>
            </div>
           
        </section>

    <section class="text-gray-600 body-font">
               <div class="flex items-center justify-center">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote h-10 w-10 text-secondary mb-4"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/></svg>
                 <h3 class="text-3xl md:text-6xl font-semibold text-center text-black my-4 ml-10">Testimonios</h3>
               </div>
            
            <div class="container px-5 py-10 mx-auto ">
                <div class="flex gap-5">
                  <div class="lg:w-1/3 lg:mb-0 mb-6  glass-effect p-8 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
                    <div class="h-full text-center flex flex-col items-center">
                      <p class="w-16 h-16 text-2xl bg-amber-400 rounded-full flex items-center justify-center text-white font-bold">
                        M
                      </p>
                      <p class="leading-relaxed mt-10">“Antes me sentía agotada todo el día. Ahora, con el producto Led de Legacy, tengo la energía que necesito para hacer frente a mi rutina. ¡Me siento más joven y activa que nunca!”</p>
                      <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                      <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Marta Pérez</h2>
                    </div>
                  </div>


                  <div class="lg:w-1/3 lg:mb-0 mb-6  glass-effect p-8 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
                    <div class="h-full text-center flex flex-col items-center">
                      <p class="w-16 h-16 text-2xl bg-amber-400 rounded-full flex items-center justify-center text-white font-bold">
                        P
                      </p>
                       <p class="leading-relaxed mt-10">"Desde que empecé a tomar el colageno Avi de Legacy, he notado un cambio increíble en mi piel. Se siente más firme y luminosa. ¡Y mi cabello ha dejado de caerse! Definitivamente, es mi nuevo aliado para lucir radiante."</p>
                      <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                      <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Pablo Ramírez</h2>
                
                    </div>
                  </div>
                  
                  <div class="lg:w-1/3 lg:mb-0 mb-6  glass-effect p-8 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
                    <div class="h-full text-center flex flex-col items-center">
                      <p class="w-16 text-2xl h-16 bg-amber-400 rounded-full flex items-center justify-center text-white font-bold">
                        L
                      </p>
                      <p class="leading-relaxed mt-10">"Sufro de problemas digestivos desde hace años. Desde que tomo Wu DTX de Legacy, mi digestión ha mejorado notablemente y mi mente está más clara. ¡Recomiendo Legacy a todos mis conocidos!"</p>
                      <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                      <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Lucía Reveló</h2>
                      
                    </div>
                  </div>
          </div>
        </div>
      </section>

   
@endsection