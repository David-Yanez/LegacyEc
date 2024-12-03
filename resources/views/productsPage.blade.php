@extends('layout')

@section('content')

    <div class="flex gap-4 mt-20">

    

<div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
  <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-blue-500 to-blue-600">
   <img class="w-full h-full object-cover object-center" src="/img/products/led2/led21.webp" alt="">
  </div>
  <div class="p-6">
    <div class="flex ">
      <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
        Led 2: Potencia Tu Creatividad
      </h5>
        <div class=" text-lg font-semibold">$50</div>
    </div>
    
    <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased h-40 overflow-y-auto">
      Led 2 es una bebida innovadora diseñada para estimular la creatividad y mejorar la concentración. Con su mezcla única de ingredientes naturales, esta bebida está enfocada en ayudar a quienes buscan un impulso mental y físico a lo largo del día. 
    </p>
  </div>
  <div class="p-6 pt-0 flex gap-14">
    <button data-ripple-light="true" type="button" class="select-none rounded-lg bg-blue-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
      Ver mas
    </button>
 
  </div>
</div>




<div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
  <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-blue-500 to-blue-600">
  </div>
  <div class="p-6">
    <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
     Tailwind card
    </h5>
    <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc felis ligula. 
    </p>
  </div>
  <div class="p-6 pt-0">
    <button data-ripple-light="true" type="button" class="select-none rounded-lg bg-blue-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
      Read More
    </button>
  </div>
</div>


</div>
@endsection