<?php
    //PROFESOR CODIGO
    /*if(isset($_GET['cantidad'])){
        $totalParametro = $_GET['cantidad'];
    }
    else{
        $totalParametro = 500.50;
    }

    $arrayProductos = [
        'cafe' => 1,
        'tostada' => 1.50,
        'coca-cola' => 2,
        'cerveza' => 2,
        'bravas' => 5,
        'ensaladilla' => 7.5,
        'pan' => 1,
        'bocadillo' => 7.5
    ];

    function generarTickets(array $productos, float $total, int $tipoTicket = 1):array{

        return [];
    }

    function permute($n, $str){
        if($n == 1){
            var_dump($str);
        }
    }
    //foto function permute

    //foto function pc_permute

permute (count(array_values($arrayProductos)), $arrayProductos);*/

/*
 * Nombre: Juan Pablo Sierra Amariles
 * Curso:  2ºDAW
 * Tema: UD2. Programación web básica
 *
 * Enunciado:
 * Vamos a crear un generador de tickets, tenemos que tener las siguientes consideraciones.
    - Desde parámetro (podéis utilizar GET) se nos introducirá una cantidad en euros por la que se nos tendrán que generar los tickets de manera aleatoria.
    - Crearemos una función generarTickets que reciba por una parte un array con el catálogo de productos que se utilizará para generar los tickets. Será un array asociativo donde la clave del array será el nombre y el  valor del array el precio del producto.
    - Adicionalmente, esta función recibirá otro parámetro que indicará cual será el límite de cada tíquet el valor 1 creará tickets entre 1-5 euros (valor por defecto), el valor 2 creará tickets entre 5-10 y el valor 3 creará tickets entre 20-70 euros.
    - Los tíquets generados se almacenarán en una array bidimensional indexado donde el primer elemento de la segunda dimensión sea el total del tíquet y el segundo elemento sea el string que representaría los conceptos del tíquet por pantalla.
    - Se puede utilizar una representación similar para representar el tíquet.
 */

//VARIABLES

//Verificar tipo de ticket
if (isset($_GET['tipoTicket'])) {
    $tipoTicket = $_GET['tipoTicket'];
} else {
    $tipoTicket = "El parámetro 'tipoTicket' no se pudo obtener.";
}

//Verificar limite
if (isset($_GET['limite'])) {
    $limite = $_GET['limite'];
} else {
    $limite = "El parámetro 'limite' no se pudo obtener.";
}

$mercancia = [
    'PanXOPE' => 3,
    'Cola-Loca' => 1,
    '1/3 Cerveza' => 1.5
];

$totalConsumido = 0;

//FUNCIONES
function generarNumeroSegunTicket(int $tipoTicket, array $mercancia): float{
    switch ($tipoTicket) {
        case 1:
            $precio = random_int(1, 5);
            /*foreach ($mercancia)*/
    }

    return 0;
}
function generarTickets(array $mercancia, float $tipoTicket, int $limite ): array {
    return 0;
}


//RESULTADO HTML
$salida= "<html>
            <head><title>Ejercicio 248tickets</title></head>
            <body>
                <p>Tipo de Ticket = ".$tipoTicket."</p>   
                <p>Limite = ".$limite."</p>           
            </body>
            </html>";

echo $salida;

