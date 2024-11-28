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
    
    @include('header')
    <!-- bg-gradient-to-br from-cyan-300 to-yellow-300-->
      <div class=" bg-primary  flex justify-center">
        <div class="w-11/12">
            @yield('content')
        </div>
        
      </div>

     
      @include('footer')

</body>
</html>