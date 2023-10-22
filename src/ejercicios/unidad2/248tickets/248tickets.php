<?php
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
    $tipoTicket = 1;
}

//Verificar limite
if (isset($_GET['limite'])) {
    $limite = $_GET['limite'];
} else {
    $limite = 100;
}

$mercancia = [
    'Cola Cao' => 1,
    'Churros x2' => 1.50,
    'Café' => 2,
    'Zumo de naranja' => 2.20,
    'Tostadas' => 2.5,
    'Bocadillo' => 3.4,
    'Batido' => 3.8,
    'Tortitas x4' => 4
];



//FUNCIONES

function generarLimitePorTicket(float $tipoTicket, int $limite): float {
    $limitePorTicket = 0;

    switch ($tipoTicket){
        case 1:
            $limitePorTicket = random_int(1, 5);
            break;

        case 2:
            $limitePorTicket = random_int(5, 10);
            break;

        case 3:
            do {
                $limitePorTicket = random_int(20, 70);
            }while($limitePorTicket >= $limite);
            break;
    }

    return $limitePorTicket;
}



function sacarTotalServido(array $ticket):float{
    $columna = 3; // Índice de la columna que deseas sumar
    $total = 0;
    foreach ($ticket as $fila) {
        if (isset($fila[$columna])) { // Verifica si la columna existe en la fila
            $total += $fila[$columna];
        }
    }

    return $total;
}

//Esta función nos dirá si estamos cerca para llegar al limite del ticket.
function quedaPoco($mercancia, $limite):bool{

    foreach($mercancia as $precio){
        if($precio <= $limite){
            return false;
        }
    }

    return true;
}

function generarTicket(array $mercancia, float $limitePorTicket):array{
    $totalServido = 0;
    $servido = [];

    while($totalServido < $limitePorTicket){
        $restante = $limitePorTicket - $totalServido;
        $producto = array_rand($mercancia);
        $precio = $mercancia[$producto];
        $cantidad = ($precio < $restante) ? random_int(1, 3) : 1;

        if(quedaPoco($mercancia, $restante)){
            break;
        }

        if(($precio * $cantidad) <= $restante){
            $totalServido += $precio * $cantidad;
            $servido = [...$servido, [$producto, $precio, $cantidad, $precio * $cantidad]];
        }
    }

    return $servido;
}

function generarTicketRestante($restante):array{
    return [['Sobrante', $restante, 1, $restante]];
}

function establecerSobrante(int $tipoTicket, float $limite):float{

    switch ($tipoTicket){
        case 3:
            return $limite * 0.10;
            break;
        default:
            return $limite * 0.9;
    }
}

function generarTickets(array $mercancia, int $tipoTicket, int $limite):array{
    $tickets = [];
    $totalTickets = 0;
    $limitePorTicket = generarLimitePorTicket($tipoTicket, $limite);

    while($totalTickets < $limite){
        $restante = number_format($limite - $totalTickets, 2);

        if(($limite - $totalTickets) < 1){
            $ticketRestante = generarTicketRestante($restante);
            $totalTickets += sacarTotalServido($ticketRestante);
            $tickets = [...$tickets, $ticketRestante];
        }
        else{
            $ticket = generarTicket($mercancia, $limitePorTicket);
            $totalTickets += sacarTotalServido($ticket);
            $tickets = [...$tickets, $ticket];
        }
    }

    return $tickets;
}

function imprimirTickets(array $ticket, $numeroTicket) {
    $salida = '<p><strong>TICKET #' . $numeroTicket . '</strong></p>';
    $salida .= '<table border="1" style="width: 50%; border-collapse: collapse;">';
    $salida.= '<tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Total</th></tr>';

    foreach ($ticket as $fila) {
        $salida .= '<tr>';
        foreach ($fila as $valor) {
            $salida .= '<td>' . $valor . '</td>';
        }
        $salida .= '</tr>';
    }

    $salida .= '</table>';
    return $salida;
}

$tickets = generarTickets($mercancia, $tipoTicket, $limite);

//RESULTADO HTML
$salida= "<html>
            <head><title>Ejercicio 248tickets</title></head>
            <body>".
                $numeroTicket = 1;
                foreach ($tickets as $ticket) {
                    $salida .= imprimirTickets($ticket, $numeroTicket);
                    $numeroTicket++;
                }

                $salida .= "
                <p>Precio Total: " . $limite . " euros</p>
                </body>
            </html>";

echo $salida;

