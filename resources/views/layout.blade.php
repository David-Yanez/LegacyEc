<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
    
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 ">
            <figure>
              <img class="w-36" src="/img/LogoLuis.webp" alt="Logo">
            </figure>
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center p-6 text-base justify-center">
            <a class="mr-5 hover:text-gray-900">Inicio</a>
            <a class="mr-5 hover:text-gray-900">Productos</a>
            <a class="mr-5 hover:text-gray-900">Nosotros</a>
            
          </nav>
          <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Tienda
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
      </header>

      <div class=" bg-gradient-to-br from-cyan-300 to-yellow-300 flex justify-center">
        <div class="w-11/12">
            @yield('content')
        </div>
        
      </div>

     
      @include('footer')

</body>
</html>