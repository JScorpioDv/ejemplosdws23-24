<?php
/*Escribe un programa que utilice las variables$x y $y.
Recibe los valores con GET mediante URL. A continuación, muestra por pantalla el
valor de cada variable, la suma, la resta, la división y la multiplicación.*/

    $variable1 = $_GET['numero1'];
    $variable2 = $_GET['numero2'];

    echo "La suma de los valores es ".$variable1+$variable2;
    echo "</br>";
    echo "La resta de los valores es ".$variable1-$variable2;
    echo "</br>";
    echo "La multiplicación de los valores es ".$variable1*$variable2;
    echo "</br>";

    if($variable1 == 0 || $variable2 == 0){
        echo "De verdad intentas dividir entre 0";
    }
    else{
        echo "La división de los valores es ".$variable1/$variable2;
    }

    if($variable1 < $variable2){
        echo "La variable 1 es menor que la 2";
    } else if($variable1 > $variable2){
        echo  "La variable 2 es mayor que la 1";
    } else {
        echo "las variables son iguales";
    }

    switch ($variable1){
        case 10:
            echo "La variable tiene el valor de 10";
            break;
        default:
            echo "No es 10";
    }

    for($i = 0; $i <  100; $i++){
        echo "El valor de la variable es $i";
    }

    do{
        echo "esto es en bucle do-while";
    }while($variable1 < 100);

    while (true){
        echo "Miguel es el puto amo";
    }
    
?>