<?php

include __DIR__ . "/prodotto.php";

class Stagionale extends Prodotto
{

    protected $tipoStagionale;
    protected $stagione;

    public function __construct($marca, $prezzo, $tipoAnimale, $tipoStagionale, $stagione)
    {
        $this->marca = $marca;
        $this->prezzo = $prezzo;
        $this->tipoAnimale = $tipoAnimale;
        $this->tipoCuccia = $tipoStagionale;
        $this->dimensioni = $stagione;
    }


    public function getTipoStagionale()
    {
        return $this->tipoStagionale;
    }

    public function setTipoStagionale(string $tipoStagionale)
    {
        $this->tipoStagionale = $tipoStagionale;

        return $this;
    }

    public function getStagione()
    {
        return $this->stagione;
    }

    public function setStagione(string $stagione)
    {
        $this->stagione = $stagione;

        return $this;
    }
}
