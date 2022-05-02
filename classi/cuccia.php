<?php

include __DIR__ . "/prodotto.php";

class Cuccia extends Prodotto
{
    protected $tipoCuccia;
    protected $dimensioni;

    public function __construct($marca, $prezzo, $tipoAnimale, $tipoCuccia, $dimensioni)
    {
        $this->marca = $marca;
        $this->prezzo = $prezzo;
        $this->tipoAnimale = $tipoAnimale;
        $this->tipoCuccia = $tipoCuccia;
        $this->dimensioni = $dimensioni;
    }

    public function getTipoCuccia()
    {
        return $this->tipoCuccia;
    }

    public function setTipoCuccia(string $tipoCuccia)
    {
        $this->tipoCuccia = $tipoCuccia;

        return $this;
    }

    public function getDimensioni()
    {
        return $this->dimensioni;
    }

    public function setDimensioni(string $dimensioni)
    {
        $this->dimensioni = $dimensioni;

        return $this;
    }
}
