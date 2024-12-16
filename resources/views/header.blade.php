<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 " href="{{route('inicioPage')}}">
        <figure>
          <img class="w-36" src="/img/LogoLuis.webp" alt="Logo">
        </figure>
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center p-6 text-base justify-center">
        <a class="mr-5 hover:text-gray-900" href="{{route('inicioPage')}}">Inicio</a>
        <a class="mr-5 hover:text-gray-900" href="{{route('productsPage')}}">Productos</a>
        <a class="mr-5 hover:text-gray-900" href="{{route('aboutPage')}}"  >Nosotros</a>
        
      </nav>
      <button class="inline-flex items-center  bg-secondary border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Tienda
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>
  </header>