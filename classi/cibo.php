<?php

include_once __DIR__ . "/prodotto.php";

class Cibo extends Prodotto
{
    protected $tipoCibo;

    public function __construct($marca, $prezzo, $tipoAnimale, $tipoCibo)
    {
        $this->marca = $marca;
        $this->prezzo = $prezzo;
        $this->tipoAnimale = $tipoAnimale;
        $this->tipoCibo = $tipoCibo;
    }

    public function getTipoCibo()
    {
        return $this->tipoCibo;
    }

    public function setTipoCibo(string $tipoCibo)
    {
        $this->tipoCibo = $tipoCibo;

        return $this;
    }
}
