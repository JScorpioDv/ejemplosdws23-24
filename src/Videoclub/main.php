<?php

include_once "./Clases/Soportes/Soporte.php";
include_once "./Clases/Soportes/CintaVideo.php";
include_once "./Clases/Soportes/Dvd.php";
include_once "./Clases/Soportes/Juego.php";

use Clases\Soportes\CintaVideo;
use Clases\Soportes\Dvd;
use Clases\Soportes\Juego;
use Clases\Soportes\Soporte;

$soporte1= new Soporte("Spider-man", 1);

$soporte1->muestraResumen();
echo "<br />";

$soporte2 = new CintaVideo("No way home", 2, 190, 8);
$soporte2->muestraResumen();

//DVD
$idiomas = [
    'Español',
    'English',
    'Latino',
    'Portugues'
];

$soporte3 = new Dvd("Deadpool", 1, $idiomas);
$soporte3->muestraResumen();

//JUEGO
echo "<br />";
$miJuego = new Juego("The Last of Us Part II", 26,"PS4", 49.99,
    1, 1);
$miJuego->muestraResumen();