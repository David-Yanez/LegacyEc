<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicioPage');
})->name('inicioPage');

Route::get('/products', function () {

    // Consulta 
    $productsDescription = [
        [
            "title" => "Led: Energuiza tu vida",
            "image" => "led",
            "description" => "El Led es un suplemento natural que se puede preparar en una bebida antioxidante y energética que contribuye a la eliminación de cálculos y quistes, a fin de evitar situaciones que puedan ocasionar molestias.",
            "cost" => "50"
        ],
        [
            "title" => "Avi: El colágeno que necesitas",
            "image" => "avi",
            "description" => "Avi es un suplemento natural que aporta colágeno, un componente esencial para la salud de tus huesos y músculos. Este colágeno se integra perfectamente en tu rutina diaria, ayudando no solo a fortalecer tu sistema óseo, sino también a mejorar la elasticidad de la piel.",
            "cost" => "50"
        ],
        [
            "title" => "Wu: Quemador y regulador de grasa natural",
            "image" => "wu",
            "description" => "El suplemento Wu se destaca por su capacidad para eliminar el colesterol y acelerar el metabolismo. También ayuda a eliminar la retención de líquidos y toxinas del cuerpo. Estos efectos están respaldados por los antioxidantes presentes en sus ingredientes.",
            "cost" => "50"
        ],
        [
            "title" => "Wu RTX: Los nutrientes que tu cuerpo necesita",
            "image" => "wurtx",
            "description" => "Wu RTX es un suplemento natural diseñado para aportar nutrientes y minerales esenciales al cuerpo. Su formulación única se enfoca en mejorar la salud en la circulación sanguínea, la protección del corazón, y el control de los niveles de glucosa en sangre.",
            "cost" => "50"
        ],
        [
            "title" => "Led 2: Potencia Tu Creatividad",
            "image" => "led2",
            "description" => "Led 2 es una bebida innovadora diseñada para estimular la creatividad y mejorar la concentración. Con su mezcla única de ingredientes naturales, esta bebida está enfocada en ayudar a quienes buscan un impulso mental y físico a lo largo del día.",
            "cost" => "50"
        ],
        [
            "title" => "Red: Despierta la ",
            "image" => "red",
            "description" => "Red es un suplemento natural formulado para ayudar a combatir la impotencia y mejorar el rendimiento físico y sexual. Su composición única está diseñada para potenciar la energía y la vitalidad, lo que lo convierte en una opción ideal para quienes buscan una mejora en su desempeño diario.",
            "cost" => "50"
        ],
        [
            "title" => "KLE: Eleva tu sistema inmunológico",
            "image" => "kle",
            "description" => "El café Kled no solo proporciona energía, sino que también actúa como un aliado en la reducción de ansiedad, eleva tu sistema inmunológico. Sus ingredientes naturales ayudan a combatir refriados, gripe y la hipertensión.",
            "cost" => "50"
        ],
        [
            "title" => "Wu! DTX: Mejora tu sistema digestivo",
            "image" => "wudtx",
            "description" => "Wu DTX es un suplemento diseñado específicamente para mejorar el sistema digestivo. Este producto es conocido por sus propiedades antiinflamatorias y antioxidantes que ayudan a mantener la salud del tracto digestivo previniendo cálculos, combate la gastritis, y favorece la limpieza del colon.",
            "cost" => "50"
        ],
        [
            "title" => "ALC: El mejor batido nutricional",
            "image" => "alc",
            "description" => "El Alc es un suplemento que se presenta como una bebida proteínica rica en nutrientes, diseñada para combatir la desnutrición y la anemia. Su fórmula única también ayuda a controlar el colesterol y a mejorar el sistema digestivo.",
            "cost" => "50"
        ] 
        ];



    return view('productsPage', ['productsDescription' => $productsDescription]);
})->name('productsPage');

Route::get('/product/{slug}', function ($slug) {
    $product = $slug;
    return view('productPage', ['product' => $product]);
})->name('productPage');