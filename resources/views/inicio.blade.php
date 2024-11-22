
@extends('layout')

@section('content')
    <div class=" flex flex-col md:flex-row  bg-[#D7FEFB]">
        <div class=" flex flex-col gap-4 items-center">
            <h1 class=" md:mt-14 mt-8 md:text-6xl text-2xl font-bold text-center">Productos Naturales Legacy</h1>
    
            <p class=" md:w-4/6 w-5/6  md:text-xl  ml-8 md:mt-20 mt-4">Legacy te ofrece una variedad de bebidas naturales para cuidar tu cuerpo desde adentro. Nuestras bebidas naturales con colágeno, energía y fórmulas digestivas te ayudarán a alcanzar tus objetivos.</p>
            <button
              class="cursor-pointer w-40  md:mt-20 mt-8 bg-violet-500 rounded-md text-white font-semibold transition duration-300 ease-in-out hover:bg-violet-700 hover:ring-2 hover:ring-violet-800 hover:shadow-xl hover:shadow-violet-500 focus:ring-violet-300 focus:shadow-violet-400 px-5 py-2"
            >
              Button
            </button>

        </div>
        <figure class="flex justify-center">
            <img class="md:w-[1600px] w-64 p-2 mt-4" src="/img/productosLegacy1.webp" alt="banerLegacy">
        </figure>
    </div>
    <section>
        <h2 class=" text-2xl text-center">Todos nuestros productos</h2>
        <div>

        </div>
    </section>

    <article>
        <p>¡Sé un líder en la industria! Únete a nuestro equipo Legacy.</p>
        <button>Informaciócn</button>
        <figure>
            <img src="/img/centroDistribucion.webp" alt="">
        </figure>
    </article>

   
        <section>
            <figure>
                <img src="/img/usoProduct.webp" alt="">
            </figure>
            <p>Productos de fácil preparación</p>
        </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
              <div class="h-full text-center">
                <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/302x302">
                <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
                <p class="text-gray-500">Senior Product Designer</p>
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