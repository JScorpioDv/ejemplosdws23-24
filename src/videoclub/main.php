<?php

include_once "./Soporte.php";
include_once "./CintaVideo.php";
include_once "./Dvd.php";
include_once "./Juego.php";

use videoclub\Soporte;
use videoclub\CintaVideo;
use videoclub\Dvd;
use videoclub\Juego;

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