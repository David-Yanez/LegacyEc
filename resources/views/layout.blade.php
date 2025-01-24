<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Legacy Ecuador</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('/favicon/favicon.ico') }}">
      <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=aclonica:400" rel="stylesheet" />
    
    @vite('resources/css/app.css')
</head>

<body class="bg-primary" >
    <div class="flex justify-center">
      @include('header')
    </div>
    
    <!-- bg-gradient-to-br from-cyan-300 to-yellow-300-->
      <div class="   flex justify-center md:mt-20 ">
        <div class="w-11/12 ">
            @yield('content')
        </div>
        
      </div>

     
      @include('footer')

</body>
</html>