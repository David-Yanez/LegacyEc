
@extends('layout')

@section('content')
    <div class=" flex flex-col md:flex-row  bg-primary">
        <div class=" flex flex-col gap-4 items-center">
            <h1 class=" md:mt-14 mt-8 md:text-6xl text-3xl font-bold text-center">Productos Naturales Legacy</h1>
    
            <p class=" md:w-4/6 w-5/6  md:text-xl  ml-8 md:mt-20 mt-4">Legacy te ofrece una variedad de bebidas naturales para cuidar tu cuerpo desde adentro. Nuestras bebidas naturales con colágeno, energía y fórmulas digestivas te ayudarán a alcanzar tus objetivos.</p>
            <button
              class="cursor-pointer w-40  md:mt-20 mt-8 bg-secondary rounded-md text-black font-semibold transition duration-300 ease-in-out hover:bg-violet-700 hover:ring-2 hover:ring-violet-800 hover:shadow-xl hover:shadow-violet-500 focus:ring-violet-300 focus:shadow-violet-400 px-5 py-2"
            >
              Button
            </button>

        </div>
        <figure class="flex justify-center">
            <img class="md:w-[1600px] w-64 p-2 mt-4" src="/img/productosLegacy1.webp" alt="banerLegacy">
        </figure>
    </div>
    <section>
        <h3 class=" text-3xl md:text-6xl text-center font-bold mt-8">Todos nuestros productos</h2>
        <div>
            @include('infiniteScroll')
        </div>
    </section>

    <article class="flex flex-row mt-10 bg-secondary">
      <div class="flex flex-col items-center justify-center">
        <p class="md:text-6xl text-xl text-center font-medium">¡Sé un líder en la industria! </p>
       <p class="md:text-6xl text-xl md:mt-6 mt-4 text-center font-medium">Únete a nuestro equipo Legacy.</p>
        <button
        class="cursor-pointer w-40  text-sm md:text-base md:mt-20 mt-8 bg-violet-500 rounded-md text-white font-semibold transition duration-300 ease-in-out hover:bg-violet-700 hover:ring-2 hover:ring-violet-800 hover:shadow-xl hover:shadow-violet-500 focus:ring-violet-300 focus:shadow-violet-400 md:px-5 px-2 py-2"
      >
        Información
      </button>
      </div>
       
        <figure>
            <img class="md:w-[600px] rounded-3xl ml-3 md:ml-0 " src="/img/centroDistribucion.webp" alt="Imagen distribucion">
        </figure>
    </article>

   
        <section class="flex flex-col items-center">
          <h3 class="text-3xl md:text-6xl text-center my-10 font-semibold">Productos de fácil preparación</p>
            <figure class=" flex justify-center mt-6">
                <img class="w-48 md:w-72" src="/img/usoProduct.webp" alt="Uso del producto">
            </figure>
        </section>

    <section class="text-gray-600 body-font">
          <h3 class="text-3xl md:text-6xl font-semibold text-center text-black my-4">Testimonios</h3>
        <div class="container px-5 py-10 mx-auto">
          <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
              <div class="h-full text-center">
                <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/302x302">
                <p class="leading-relaxed">“Antes me sentía agotada todo el día. Ahora, con los productos de Legacy, tengo la energía que necesito para hacer frente a mi rutina. ¡Me siento más joven y activa que nunca!”</p>
                <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Carlos Pérez</h2>
              </div>
            </div>
            <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
              <div class="h-full text-center">
                <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/300x300">
                <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">ALPER KAMU</h2>
                <p class="text-gray-500">UI Develeoper</p>
              </div>
            </div>
            <div class="lg:w-1/3 lg:mb-0 p-4">
              <div class="h-full text-center">
                <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/305x305">
                <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HENRY LETHAM</h2>
                <p class="text-gray-500">CTO</p>
              </div>
            </div>
          </div>
        </div>
      </section>

   
@endsection