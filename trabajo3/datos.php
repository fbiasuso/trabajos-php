<?php
function datos_productos(){

    return [
        [
            'id'=>'1',
            'nombre'=> 'PHP',
            'descripción' =>'Es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML y además permite la manipulación de base de datos con facilidad.', 
            'imagen'=>'php.webp',
            'precio'=> 150

        ],
        [
            'id'=>'2',
            'nombre'=> 'Java',
            'descripción' =>'Es uno de los lenguajes de programación más populares para desarrollar sistemas empresariales y aplicaciones web. Su principal virtud radica en la potencia y robustez del lenguaje y la amplia comunidad que lo apoya, la portabilidad y la escalabilidad.', 
            'imagen'=>'java.webp',
            'precio'=> 200

        ],
        [
            'id'=>'3',
            'nombre'=> 'Laravel',
            'descripción' =>'Laravel es un framework de PHP que facilita el desarrollo de aplicaciones web. Su diseño de software se basa en el patrón MVC (Modelo Vista Controlador), por lo que proporcionará a tu código una base estructurada con la que comenzar a desarrollar.', 
            'imagen'=>'laravel.png',
            'precio'=> 150

        ],
        [
            'id'=>'4',
            'nombre'=> 'Cobol',
            'descripción' =>'Lenguaje de programación basado en el idioma inglés que lleva más de medio siglo sustentando todo tipo de operaciones, sobre todo en Estados Unidos. Es utilizado por sistemas financieros, compañías de seguros y un gran número de instituciones.', 
            'imagen'=>'cobol.jpg',
            'precio'=> 150

        ],
    ];

   
}

?>