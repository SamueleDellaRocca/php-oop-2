<?php

include __DIR__ . "/classi/cibo.php";
include __DIR__ . "/classi/gioco.php";

$tonnoScatola = new Cibo("Riomare", 5, "Felini", "In scatola");

$pallina = new Gioco("Toys", 12, "Cani", "Giochi da Lancio");

var_dump($tonnoScatola);
var_dump($pallina);
