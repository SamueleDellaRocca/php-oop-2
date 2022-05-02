<?php

include __DIR__ . "/classi/cibo.php";
include __DIR__ . "/classi/gioco.php";
include __DIR__ . "/classi/cuccia.php";
include __DIR__ . "/classi/stagionale.php";


$tonnoScatola = new Cibo("Riomare", 5, "Felini", "In scatola");

$pallina = new Gioco("Toys", 12, "Cani", "Giochi da Lancio");

$gabbietta = new Cuccia("Titty's home", 40, "Volatili", "Gabbia", "Media");

$antiParassitario = new Stagionale("XXX", 10, "Cani e Gatti", "Protettivo", "Estate");

var_dump($tonnoScatola);
var_dump($pallina);
var_dump($gabbietta);
var_dump($antiParassitario);
