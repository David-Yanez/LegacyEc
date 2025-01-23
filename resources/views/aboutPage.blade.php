@extends('layout')

@section('content')

<div>
    <figure class="mt-4 md:mt-0 ">
        <img class=" md:h-[550px] h-60 w-full rounded-lg" src="/img/productosEC.webp" alt="Slider legacy">
    </figure>

    <div class="flex flex-col md:flex-row md:mt-20 mt-10  items-center">
            <p class=" md:w-2/5 w-5/5 md:text-5xl text-xl md:text-center font-medium">
                ¡Únete a nuestro equipo Legacy Global Ecuador y transforma tu futuro con grandes oportunidades de ingresos! 
            </p>
            
            <div class=" md:w-3/5 w-4/5 mt-10  md:mt-0 h-48 md:h-96   ">

                <div class="relative w-full h-full max-w-4xl mx-auto overflow-hidden">
                    <!-- Carrusel -->
                    <div class="relative w-full h-full rounded-2xl">
                      <div class="carousel-slide absolute inset-0 transition-opacity duration-700 ease-in-out rounded-2xl">
                        <img src="/img/equipo1.webp" alt="Slide 1" class="w-full h-full object-cover rounded-2xl">
                      </div>
                      <div class="carousel-slide absolute inset-0 transition-opacity duration-700 ease-in-out hidden">
                        <img src="/img/equipo2.webp" alt="Slide 2" class="w-full h-full object-cover rounded-2xl">
                      </div>
                      <div class="carousel-slide absolute inset-0 transition-opacity duration-700 ease-in-out hidden">
                        <img src="/img/equipo3.webp" alt="Slide 3" class="w-full h-full object-cover rounded-2xl">
                      </div>
                      <div class="carousel-slide absolute inset-0 transition-opacity duration-700 ease-in-out hidden">
                        <img src="/img/equipo4.webp" alt="Slide 3" class="w-full h-full object-cover rounded-2xl">
                      </div>
                    </div>
                
                    <!-- Indicadores -->
                    <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2">
                      <button class="carousel-dot w-3 h-3 rounded-full "></button>
                      <button class="carousel-dot w-3 h-3 rounded-full "></button>
                      <button class="carousel-dot w-3 h-3 rounded-full "></button>
                      <button class="carousel-dot w-3 h-3 rounded-full "></button>
                    </div>
                  </div>
                
            </div>   
    </div>
        

    <div class="flex   mt-20 items-center justify-center">
      <figure class=" w-3/6   ">
        <img class=" w-96 h-96" src="/img/liderazgo1.webp"  alt="">
    </figure>
        <p class=" w-3/6 md:text-5xl text-xl   font-medium">
            ¡No dejes pasar esta oportunidad de mejorar tu calidad de vida y la de los demás, mientras generas ganancias desde casa!
        </p>
  
    </div>



    <div class="flex md:mt-20 mt-10  md:flex-row  flex-col items-center">
        <p class=" md:w-3/6 w-6/6  text-xl text-center  md:text-4xl font-medium text-wrap">
          Contamos con 9 productos de nutrición con resultados
          espectaculares consumidos a nivel nacional e internacional con ventas
          mayores a 20 millones de dólares por año. La proyección al
          2025 es de 12 productos y más de 40 millones en ventas anuales.
        </p>
        <figure class=" md:w-3/6 w-3/6 flex justify-center  md:mt-0 mt-4   ml-4 mb-4  h-auto">
            <img class=" w-52  h-52  md:w-96 md:h-96   " src="/img/8produ.webp"  alt="">
        </figure>
    </div>
    <div class="flex justify-center">
      <figure class=" w-[850px] md:my-20 my-10   ">
        <img class="w-full rounded-3xl" src="/img/bonos1.webp" alt="">
      </figure>
    </div>
 

</div>








<script>
    // Script para cambio automático de diapositivas
    document.addEventListener('DOMContentLoaded', () => {
      const slides = document.querySelectorAll('.carousel-slide');
      const dots = document.querySelectorAll('.carousel-dot');
      let currentSlide = 0;

      const changeSlide = (index) => {
        slides.forEach((slide, i) => {
          slide.classList.toggle('hidden', i !== index);
          dots[i].classList.toggle('bg-white', i === index);
        });
      };

      setInterval(() => {
        currentSlide = (currentSlide + 1) % slides.length;
        changeSlide(currentSlide);
      }, 5000); // Cambiar cada 5 segundos
    });
  </script>

@endsection