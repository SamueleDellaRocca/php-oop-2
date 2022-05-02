<?php

include_once __DIR__ . "/prodotto.php";

class Gioco extends Prodotto
{

    protected $tipoGioco;

    public function __construct($marca, $prezzo, $tipoAnimale, $tipoGioco)
    {
        $this->marca = $marca;
        $this->prezzo = $prezzo;
        $this->tipoAnimale = $tipoAnimale;
        $this->tipoGioco = $tipoGioco;
    }

    public function getTipoGioco()
    {
        return $this->tipoGioco;
    }

    public function setTipoGioco(string $tipoGioco)
    {
        $this->tipoGioco = $tipoGioco;

        return $this;
    }
}
