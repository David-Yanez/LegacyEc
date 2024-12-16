@extends('layout')

@section('content')

    <h2>Detalles del producto</h2>

    {{$product}}

<div class="flex flex-col items-center">

  
    <figure>
        <img src="/img/products/avi/avi2.webp" alt="">
    </figure>
    
    <p>
        El segundo producto de la marca LED viene en forma de diamante
y de la mano de la riqueza del Ecuador.
Como acostumbramos en Legacy Global, creamos un producto lleno
de innovación y calidad. El nuevo LED 2, será la energía de bolsillo que
encenderá tus ideas gracias a sus insumos que estimulan tu capacidad
cognitiva, mejoran la concentración y relajan tu sistema nervioso.
Estimula tu creatividad con el delicioso sabor a maracuyá y
los beneficios ancestrales de la Guayusa ecuatoriana.
Prueba nuestro LED 2, ¡un energizante sin cafeína!
    </p>
    
    <h2>Beficios</h2>
     
    <div class="flex items-center">
        <ul><li>
            Poderoso Antioxidante 
            </li>
            <li>
                Previene la anemia
            </li>
            <li>
                Reduce la precion cardiaca
            </li>
        </ul>
        <figure>
            <img src="/img/products/red/red3.webp" alt="">
        </figure>
        <ul><li>
            Poderoso Antioxidante 
            </li>
            <li>
                Previene la anemia
            </li>
            <li>
                Reduce la precion cardiaca
            </li>
        </ul>
    </div>
    <h2>Ingredientes</h2>
    <div class="flex items-center">
        <ul><li>
            Poderoso Antioxidante 
            </li>
            <li>
                Previene la anemia
            </li>
            <li>
                Reduce la precion cardiaca
            </li>
        </ul>
        <figure>
            <img src="/img/products/avi/avi3.png" alt="">
        </figure>
        <ul><li>
            Poderoso Antioxidante 
            </li>
            <li>
                Previene la anemia
            </li>
            <li>
                Reduce la precion cardiaca
            </li>
        </ul>
    </div>
</div>
@endsection