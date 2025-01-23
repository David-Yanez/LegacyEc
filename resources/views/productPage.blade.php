@extends('layout')

@section('content')

        @php
            $ingredientsArray = explode(';', $product->ingredients);
            $firtsPart = array_slice($ingredientsArray, 0, ceil(count($ingredientsArray) / 2));
            $secondPart = array_slice($ingredientsArray,  ceil(count($ingredientsArray) / 2));
            
            $benefitsArray = explode(';', $product->benefits);
            $firtsPartBenefits = array_slice($benefitsArray, 0, ceil(count($benefitsArray) / 2));
            $secondPartBenefits = array_slice($benefitsArray,  ceil(count($benefitsArray) / 2));

            $color = [
                "led" => 'bg-gradient-to-r from-rose-200 from- via-rose-100 via- to-rose-200 to-',
                'avi' => 'bg-gradient-to-r from-pink-200 from- via-pink-100 via- to-pink-200 to-',
                'kle' => 'bg-gradient-to-r from-orange-200 from- via-orange-100 via- to-orange-200 to-',
                'wu' => 'bg-gradient-to-r from-green-200 from- via-green-100 via- to-green-200 to-',
                'alc' => 'bg-gradient-to-r from-yellow-100 from- via-yellow-50 via- to-yellow-100 to-',
                'wudtx' => 'bg-gradient-to-r from-yellow-200 from- via-yellow-100 via- to-yellow-200 to-',
                'wumix' => 'bg-gradient-to-r from-lime-200 from- via-lime-100 via- to-lime-200 to-',
                'led2' => 'bg-gradient-to-r from-yellow-200 from- via-yellow-100 via- to-yellow-200 to-',
                'red' => 'bg-gradient-to-r from-red-200 from- via-red-100 via- to-red-200 to-'
            ]
      @endphp

    <div class="flex flex-col items-center pb-14  {{ $color[$product->image] }}">

      

        <figure class="mt-10">
            <img class="" src="/img/products/{{$product->image}}/{{$product->image}}2.webp" alt="">
        </figure>

        <h2 class=" text-3xl font-semibold text-center mb-8 mt-4">{{ $product->title }}</h2>

        <div class=" md:w-2/5 w-4/5 md:my-10  my-5 text-base   text-center md:text-xl flex flex-col gap-6">


            {!! $product->description !!}
               
        </div>

        <h2 class="my-10 text-2xl md:text-3xl font-semibold">Beficios</h2>

        <div class="flex    md:flex-row  flex-col  items-center ">
            <ul class=" px-4 md:px-0">
                @foreach ($firtsPartBenefits as $listItem)
                     <li class=" md:p-2  p-0  md:my-3 my-1   hover:scale-110 flex md:gap-4 gap-2 "> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check"><path d="M20 6 9 17l-5-5"/></svg> <p class=" text-sm md:text-base">{{ $listItem }}</p></li>
                 @endforeach
            </ul>

            <figure class="mx-10">
                <img src="/img/products/{{$product->image}}/{{$product->image}}3.webp" alt="">
            </figure>

            <ul>
                 @foreach ($secondPartBenefits as $listItem1)
                     <li class="  md:p-2  p-0  md:my-3 my-1  hover:scale-110 flex md:gap-4 gap-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check"><path d="M20 6 9 17l-5-5"/></svg> <p class=" text-sm md:text-base">{{ $listItem1}}</p></li>
                 @endforeach
            </ul>
        </div>
        <h2 class="my-10 text-2xl md:text-3xl font-semibold">Ingredientes</h2>

        <div class="flex md:flex-row flex-col items-center">
            <ul>
                @foreach ($firtsPart as $listItem)
                  <li class="  md:p-2  p-0   md:my-3 my-1 hover:scale-110 flex md:gap-4 gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left"><path d="m15 18-6-6 6-6"/></svg> <p class=" text-sm md:text-base">{{ $listItem }}</p></li>
                 @endforeach
            </ul>
            <figure class=" mx-20">
                <img class="md:w-[350px] md:h-[650px] h-60 w-40 md:my-0 my-2" src="/img/products/{{$product->image}}/{{$product->image}}4.webp" alt="">
            </figure>
            <ul>
                @foreach ($secondPart as $listItem1)
                     <li class=" md:p-2  p-0   md:my-3 my-1 hover:scale-110 flex md:gap-4 gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left"><path d="m15 18-6-6 6-6"/></svg> <p class=" text-sm md:text-base">{{ $listItem1}}</p> </li>
                 @endforeach
            </ul>
        </div>

        <a href="https://wa.me/593962866166?text=Saludos necesito infomración del producto {{ $product->title }}" target="_blank">
        <button type="button"  
            class="bg-white text-center w-48 rounded-2xl h-14 relative text-black text-xl font-semibold border-4 border-white group md:mt-20 mt-10">
            <div
                class="bg-green-400 rounded-xl h-12 w-1/4 grid place-items-center absolute left-0 top-0 group-hover:w-full z-10 duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
                    <path fill="#fff"
                        d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                    </path>
                    <path fill="#fff"
                        d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                    </path>
                    <path fill="#cfd8dc"
                        d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                    </path>
                    <path fill="#40c351"
                        d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                    </path>
                    <path fill="#fff" fill-rule="evenodd"
                        d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <p class="translate-x-4">Watshapp</p>
        </button>
        </a>



    </div>
@endsection
