<?php

namespace Database\Seeders;




use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                "title" => "Led: Energuiza tu vida", 
                "slug" => "legacy-led", 
                "shortdescription" => "El Led es un suplemento natural que se puede preparar en una bebida antioxidante y energética que contribuye a la eliminación de cálculos y quistes, a fin de evitar situaciones que puedan ocasionar molestias.", 
                "description" => "<p>Tu cuerpo produce naturalmente la proteína de colágeno engrandes cantidades. Está presente en casi todo tu organismo,pues se encuentra en tendones, uñas, cabello, piel, etc.Con el pasar de los años, tu cuerpo reduce paulatinamentesu producción natural de colágeno, incluso hasta en un 50%.Por ello, podemos concluir que el consumo de colágeno esindispensable para combatir la degeneraciónnatural de tu cuerpo.</p>", 
                "image" => "led", 
                "ingredients" => "Maiz Morado; Camu Camu; Maca; Arandanos; Vitamina C; Guarana", 
                "benefits" => "Te da energía.; Elimina el estrés.; Mejora la actividad sexual.; Quita la migraña y el cansancio.; Aumenta la concentración y memoria.; Mejora la circulación sanguínea.; Acelera el metabolismo.; Eleva el sistema inmunológico.; Cólicos menstruales.; Elimina quistes, miomas.; Infección urinaria.; Es anticancerígeno.; Protege el corazón.; Limpia los riñones. Retención de líquido.; Desinflama la próstata.; Protege el sistema nervioso central.; Fortalece los pulmones.; Asma (problemas respiratorios).", 
                "cost" => 50.00, 
                
             ], 
          [
                   "title" => "Avi: El colágeno que necesitas", 
                   "slug" => "legacy-avi", 
                   "shortdescription" => "Avi es un suplemento natural que aporta colágeno, un componente esencial para la salud de tus huesos y músculos. Este colágeno se integra perfectamente en tu rutina diaria, ayudando no solo a fortalecer tu sistema óseo, sino también a mejorar la elasticidad de la piel.", 
                   "description" => "<p>Tu cuerpo produce naturalmente la proteína de colágeno en grandes cantidades. Está presente en casi todo tu organismo, pues se encuentra en tendones, uñas, cabello, piel, etc. Con el pasar de los años, tu cuerpo reduce paulatinamente su producción natural de colágeno, incluso hasta en un 50%. Por ello, podemos concluir que el consumo de colágeno es indispensable para combatir la degeneración natural de tu cuerpo.</p> ", 
                   "image" => "avi", 
                   "ingredients" => "Colageno Hidrolizado; Camu Camu; Vitamina C Y E", 
                   "benefits" => "Te da energía.; Elimina el estrés.; Mejora la actividad sexual. Quita la migraña y el cansancio.; Aumenta la concentración y memoria.; Mejora la circulación sanguínea.;  Acelera el metabolismo.; Eleva el sistema inmunológico.; Cólicos menstruales.; Elimina quistes, miomas.; Infección urinaria.; Es anticancerígeno.; Protege el corazón.; Limpia los riñones.; Retención de líquido.; Desinflama la próstata.; Protege el sistema nervioso central.; Fortalece los pulmones.; Asma (problemas respiratorios).", 
                   "cost" => 50.00, 
                  
                ], 
          [
                      "title" => "KLE: Eleva tu sistema inmunológico", 
                      "slug" => "legacy-kle", 
                      "shortdescription" => "El café Kled no solo proporciona energía, sino que también actúa como un aliado en la reducción de ansiedad, eleva tu sistema inmunológico. Sus ingredientes naturales ayudan a combatir refriados, gripe y la hipertensión.", 
                      "description" => "<p>K-LÉ es una marca que fue desarrollada en medio de una de las mayores crisis sanitarias globales. Se creó con la noble visión de ayudar a fortalecer el sistema inmunológico de quienes lo consuman. K-LÉ es más que café, es un producto 9 en 1, que aporta un poco de salud cada mañana al consumirlo.</p>", 
                      "image" => "kle", 
                      "ingredients" => "Tocosh Liofilizado; Bicarbonato; Cafe Liofilizado; Ganoderma; Espirulina; Curcuma; Moringa; Maca; Jengibre", 
                      "benefits" => "Combate resfriados y gripe.; Evita crisis de asma.; Estimula el sistema inmunológico.; Disminuye triglicéridos.; Previene la hipertensión.; Disminuye niveles de acidés de la sangre.; Aumenta la aptitud respiratoria.; Regula la presión arterial.; Es un alimento probiótico.", 
                      "cost" => 50.00, 
                     
                   ], 
          [
                         "title" => "Wu-F-Burner: Quemador y regulador de grasa natural", 
                         "slug" => "legacy-f-burner", 
                         "shortdescription" => "El suplemento Wu se destaca por su capacidad para eliminar el colesterol y acelerar el metabolismo. También ayuda a eliminar la retención de líquidos y toxinas del cuerpo. Estos efectos están respaldados por los antioxidantes presentes en sus ingredientes.", 
                         "description" => "<p>Luego de más de 5 años en el mercado, Legacy Global decide transformar uno de sus productos emblemáticos para convertirlo en extraordinario.</p> <p>Repotenciado con más insumos, el nuevo WU! Fuego, llega con mejores propiedades que ayudarán a regular tu organismo y apoyarte en tu proceso de pérdida de peso saludable gracias a su capacidad termogénica.</p> <p>Siguiendo su filosofía de no forzar ni desnaturalizar los procesos, este poderoso nutraceútico concentra, en un solo sobre, los mejores insumos orgánicos para favorecer la reducción de medidas de manera natural.</p> <p>¡Antes era bueno, ahora es extraordinario! Prueba el renovado Wu! Fuego</p>", 
                         "image" => "wu", 
                         "ingredients" => "Moringa; Phaseolus; Vulgaris; Té Verde; Bicarbonato; Vitamina C; Alcachofa; Café Verde; Espirulina; Canela; Romero; Garcinia Cambogia", 
                         "benefits" => "Elimina colesterol, triglicéridos.; Hígado graso y problemas hepáticos.; Especial para diabéticos tipo 2.; Ayuda a bajar de peso, reduce tallas.; Contiene propiedades anticancerígenas.; Convierte las grasas en energía. Acelera el metabolismo.; Mejora la circulación sanguínea.; Poderoso antioxidante.; Elimina várices.; Combate halitosis y gastritis.; Mejora el tránsito intestinal.; Combate estreñimiento y hemorroides.; Ayuda a disminuir la grasa abdominal.; Elimina la retención de líquidos y toxinas.; Rica en fibra.", 
                         "cost" => 50.00, 
                       
                      ], 
          [
                            "title" => "ALC: El mejor batido nutricional", 
                            "slug" => "legacy-alc", 
                            "shortdescription" => "El Alc es un suplemento que se presenta como una bebida proteínica rica en nutrientes, diseñada para combatir la desnutrición y la anemia. Su fórmula única también ayuda a controlar el colesterol y a mejorar el sistema digestivo.", 
                            "description" => "<p>Tras 2 años de investigación y desarrollo junto a nuestros aliados estratégicos Fitovit y NuevaMente, lanzamos al mercado AL-C, una de las marcas con mayor propósito de servicio y mejores insumos en la más práctica e innovadora presentación.</p> <p>Nuestra línea de alimentos AL-C, lleva las primeras letras del nombre de Doña Alcira, fundadora de Fitovit, quien soñaba con nutrir al Perú y al mundo.</p> <p>Disfruta de un poderoso batido preparando los 25 g de cada stick y conviértelo en tu mejor aliado para combatir la anemia y malnutrición de quienes amas.</p>", 
                            "image" => "alc", 
                            "ingredients" => "Tarwi; Plátano; Avena;Aceite De Girasol; Arándanos; Maca; Granada; Cúrcuma; Aceite De Palma; Suero De Leche; Mix De Vitaminas(B1, B2, B3, B5, B6, B12, C, D Y E)", 
                            "benefits" => "Combate anemia e hipertensión; Alta concentración de proteínas; Ayuda en la formación de glóbulos rojos; Antiinflamatorio y antioxidante; Ayuda al cerebro y al corazón; Fortalece las articulaciones.; Combate el colesterol; Ayuda a bajar de peso; Regula el sistema digestivo; Ayuda a la concentración; Previene el cáncer", 
                            "cost" => 50.00, 
                            
                         ], 
          [
                               "title" => "Wu! DTX: Mejora tu sistema digestivo", 
                               "slug" => "legacy-wu-dtx", 
                               "shortdescription" => "Wu DTX es un suplemento diseñado específicamente para mejorar el sistema digestivo. Este producto es conocido por sus propiedades antiinflamatorias y antioxidantes que ayudan a mantener la salud del tracto digestivo previniendo cálculos, combate la gastritis, y favorece la limpieza del colon.", 
                               "description" => "<p>WU! es nuestra marca de control de peso inspirada en la filosofía china Wuwei, la cual explica que existen procesos que no deben forzarse, como el crecimiento de una planta o la formación de la vida.</p> <p>Cada producto WU! conserva esta filosofía al no forzar ni desnaturalizar el proceso de pérdida de peso.</p> <p>WU! Detox es la puerta de entrada a este propósito, ya que con su poderoso efecto detoxificante favorecerá tu limpieza interna para ayudarte a combatir afecciones del sistema digestivo sin dañar tu flora intestinal.</p> <p>En un cuerpo limpio, nuestros demás productos harán un mayor efecto. Por eso te recomendamos consumir WU! DTX como primer paso a tu nueva</p>", 
                               "image" => "wudtx", 
                               "ingredients" => "Pitahaya; Muña; Toronjil; Noni; Fibra; Estevia", 
                               "benefits" => "Refuerza el sistema inmunológico.; Desintoxica el colon.; Ayuda a regular el tránsito intestinal.; Regula los niveles de azúcar en la sangre.; Reduce el ácido úrico.; Reduce Insomnio y Migraña.; Retención de líquidos.;  Ayuda a baja de peso.; Colesterol triglicéridos.; Alivia flatulencia gases y las afecciones diarreicas.; Controla niveles de glucosa.; Previene cáncer al colon.; Cólicos intestinales.; Alivia vómitos,; náuseas y mareos.; Cólicos menstruales.; Endurecimiento de los huesos.; Efecto antiflamatorio.", 
                               "cost" => 50.00, 
                               
                            ], 
          [
                                  "title" => "Wu Green Mix: Los nutrientes que tu cuerpo necesita", 
                                  "slug" => "legacy-wu-green-mix", 
                                  "shortdescription" => "Wu Green Mix es un suplemento natural diseñado para aportar nutrientes y minerales esenciales al cuerpo. Su formulación única se enfoca en mejorar la salud en la circulación sanguínea, la protección del corazón, y el control de los niveles de glucosa en sangre.", 
                                  "description" => "<p>El WU! Green Mix nace para satisfacer una necesidad real que afecta a miles de personas en Latinoamérica: la falta de micronutrientes en su día a día, con una práctica solución en la que no tendrás que preparar los tediosos jugos verdes tradicionales o ensaladas en todas tus comidas.</p> <p>Creando una nueva tendencia en el mercado, hacemos el lanzamiento del primer jugo verde instantáneo, que aportará todas las vitaminas y minerales que tu organismo necesita, en una práctica presentación de bolsillo y con un delicioso sabor a manzana.</p> <p>WU! Green Mix, el jugo verde que desearás tomar todos los días.</p>", 
                                  "image" => "wumix", 
                                  "ingredients" => "Espinaca; Vitamina C; Vitamina E; Manzana verde; Apio; Bicarbonato; Pepino; Aloe vera; Canela; Espirulina", 
                                  "benefits" => "Elimina colesterol, triglicéridos.; Hígado graso y problemas hepáticos.; Especial para diabéticos tipo 2.; Ayuda a bajar de peso, reduce tallas.; Contiene propiedades anticancerígenas.; Convierte las grasas en energía.; Acelera el metabolismo.; Mejora la circulación sanguínea.; Poderoso antioxidante.; Elimina várices.; Combate halitosis y gastritis.; Mejora el tránsito intestinal.; Combate estreñimiento y hemorroides.; Ayuda a disminuir la grasa abdominal.; Elimina la retención de líquidos y toxinas.; Rica en fibra.", 
                                  "cost" => 50.00, 
                                  
                               ], 
          [
                                     "title" => "Led 2: Potencia Tu Creatividad", 
                                     "slug" => "legacy-led2", 
                                     "shortdescription" => "Led 2 es una bebida innovadora diseñada para estimular la creatividad y mejorar la concentración. Con su mezcla única de ingredientes naturales, esta bebida está enfocada en ayudar a quienes buscan un impulso mental y físico a lo largo del día.", 
                                     "description" => "<p>El segundo producto de la marca LED viene en forma de diamante y de la mano de la riqueza del Ecuador.</p> <p>Como acostumbramos en Legacy Global, creamos un producto lleno de innovación y calidad. El nuevo LED 2, será la energía de bolsillo que encenderá tus ideas gracias a sus insumos que estimulan tu capacidad cognitiva, mejoran la concentración y relajan tu sistema nervioso.</p> <p>Estimula tu creatividad con el delicioso sabor a maracuyá y los beneficios ancestrales de la Guayusa ecuatoriana. Prueba nuestro LED 2, ¡un energizante sin cafeína!</p>", 
                                     "image" => "led2", 
                                     "ingredients" => "Maca; Guaraná atomizada; Maracuyá; Bicarbonato; Guayusa; Vitamina B12 y c", 
                                     "benefits" => "Poderoso ANTIOXIDANTE; Previene la ANEMIA; Disminuye el ESTRÉS y la ANSIEDAD; Reduce la preción CARDIACA; Ayuda al METABOLISMO; Mejora la CONCENTRACIÓN y el ESTADO DE ÁNIMO; Previene el envejecimiento prematuro de las NEURONAS; Ayuda al mantenimiento del sistema NERVIOSO; Estabiliza la GLUCOSA", 
                                     "cost" => 50.00, 
                                      
                                  ], 
          [
                                        "title" => "Red: Despierta la pasion", 
                                        "slug" => "legacy-red", 
                                        "shortdescription" => "Red es un suplemento natural formulado para ayudar a combatir la impotencia y mejorar el rendimiento físico y sexual. Su composición única está diseñada para potenciar la energía y la vitalidad, lo que lo convierte en una opción ideal para quienes buscan una mejora en su desempeño diario.", 
                                        "description" => "<p>Nos apasiona presentarte a RED, el producto orientado a la plenitud sexual de Legacy Global que viene a encender la pasión en tu vida.</p> <p>Con súper frutos e insumos ancestralmente reconocidos por sus beneficios en la limpieza de toxinas y vías urinarias, mejora en la presión sanguínea y efectos afrodisiacos, podrás repotenciar tu bienestar sexual de manera integral.</p> <p>¡Con RED, vive tu sexualidad con plenitud y salud!</p>", 
                                        "image" => "red", 
                                        "ingredients" => "Maca; Huanarpo Macho; Saw Palmetto; Arginina; Ginko Biloba; Flor De Jamaica; Lucraco; Granada; Ginseng Siberiano; Vitamina B6, B12; Vitamina C; Bicarbonato", 
                                        "benefits" => "Ayuda a combatir la IMPOTENCIA; Alivia los síntomas de hiperplasia benigna de la próstata; Combate la caída del CABELLO; Aumenta el rendimiento FÍSICO, SEXUAL y MENTAL; Combate la DISFUNCIÓN ERECTIL; Mejora la FERTILIDAD OVARICA; Combate las infecciones URINARIAS", 
                                        "cost" => 50.00, 
                                       
                                     ] 
          ]);
    }
}
