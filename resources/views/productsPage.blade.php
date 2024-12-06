@extends('layout')

@section('content')

    <div class=" flex flex-wrap gap-20 h-auto mt-20 justify-center">

   
     

      @foreach ($productsDescription as $product)
        <div  >

       
          <div class="relative flex w-80 h-[500px] justify-between  flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-blue-500 to-blue-600">
            <img class="w-full h-full object-cover object-center" src="/img/products/{{$product['image']}}/{{$product['image']}}1.webp" alt="">
            </div>
            <div class="p-6">
              <div class="flex ">
                <h5 class="mb-2 w-3/4 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                 {{$product['title']}}
                </h5>
                  <div class=" w-1/4 text-lg font-semibold text-gray-500">${{$product['cost']}}</div>
              </div>
              
              <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased h-40 overflow-y-auto">
                {{$product['description']}}
              </p>
            </div>
            <div class="p-6 pt-0 flex gap-14">
             
                <a href="{{route('productPage', $product['image'] )}}">
                  <button data-ripple-light="true" type="button" class="select-none rounded-lg bg-blue-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                       Ver mas
                  </button>
                </a> 
              
          
            </div>
          </div>
        </div>

      @endforeach


</div>
@endsection