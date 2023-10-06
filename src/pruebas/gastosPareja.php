<?php

$titulo = "Cálculo de gastos";
include ("./plantilla/encabezado.php");

include_once("funciones.php");

$gastosCitas[0]=['Inma'=> 200.45];
$gastosCitas[1]=['Juan'=> 10.15];
$gastosCitas[2]=['Inma'=> 100.45];


$resultado=gastosCompartidos($gastosCitas);

$mensaje = "";

foreach ($resultado as $clave=>$valor){
    if($valor>0){
        $mensajes = "El integrante de la pareja llamado $clave debe ingresar $valor <br>";
    } else{
        $mensajes = ["El integrante de la pareja llamado $clave debe apoquinar ".abs($valor)];
        $mensajes[] = "El integrante $clave es un cabrón";
    }
}

$encabezado = "El resultado de la repartición de gastos a pachas es";

include ("plantilla/mensaje.php");

include ("./plantilla/pie.php");