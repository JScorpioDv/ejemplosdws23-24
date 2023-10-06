<?php

function gastosCompartidos(array $gastos):array{

    $pareja=sacarEtiquetas($gastos);
    foreach ($gastos as $valor){
        foreach ($valor as $key => $value){
            $pareja[$key]+=$value;
        }
    }

    $totalUnitario = array_sum($pareja)/2;

    foreach ($pareja as $clave=> $valor){
        $pareja[$clave]-=$totalUnitario;
    }


    return $pareja;
}

function sacarEtiquetas(array $coleccion):array{
    $etiquetas=[];
    foreach ($coleccion as $pagos){
        foreach ($pagos as $clave=>$valor){
            if(!in_array($clave,$etiquetas)){
                $etiquetas[$clave]=0;
            }
        }
    }
    return $etiquetas;
}