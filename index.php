<?php

include __DIR__ . "/classi/cibo.php";
include __DIR__ . "/classi/gioco.php";
include __DIR__ . "/classi/cuccia.php";
include __DIR__ . "/classi/stagionale.php";
include __DIR__ . "/classi/abbonato.php";
include __DIR__ . "/classi/nonregistrato.php";
include_once __DIR__ . "/classi/utente.php";


$tonnoScatola = new Cibo("Riomare", 5, "Felini", "In scatola");

$pallina = new Gioco("Toys", 12, "Cani", "Giochi da Lancio");

$gabbietta = new Cuccia("Titty's home", 40, "Volatili", "Gabbia", "Media");

$antiParassitario = new Stagionale("XXX", 10, "Cani e Gatti", "Protettivo", "Estate");

$utenteUno = new Abbonato("Mario Rossi", "mariorossi@gmail.com", true, "2020-12-31");

$utenteCinque = new NonRegistrato("Francesco Totti", "totti@gmail.com", false, "2025-12-31");

var_dump($tonnoScatola);
var_dump($pallina);
var_dump($gabbietta);
var_dump($antiParassitario);
var_dump($utenteUno);
$utenteUno->controlloScadenza($utenteUno->scadenzaCartaCredito);
echo ("<h3>{$utenteUno->nomeCompleto} il tuo sconto sugli acquisti è del {$utenteUno->sconto}%</h3>");
var_dump($utenteCinque);
$utenteCinque->controlloScadenza($utenteCinque->scadenzaCartaCredito);
echo ("<h3>{$utenteCinque->nomeCompleto} il tuo sconto sugli acquisti è del {$utenteCinque->sconto}%</h3>");
