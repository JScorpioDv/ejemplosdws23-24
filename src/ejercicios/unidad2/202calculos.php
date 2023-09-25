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


?>