<?php

include __DIR__ . "/prodotto.php";

class Cibo extends Prodotto
{
    protected $tipoAnimale;
    protected $tipoCibo;

    public function __construct($marca, $prezzo, $tipoAnimale, $tipoCibo)
    {
        $this->marca = $marca;
        $this->prezzo = $prezzo;
        $this->tipoAnimale = $tipoAnimale;
        $this->tipoCibo = $tipoCibo;
    }

    public function getTipoAnimale()
    {
        return $this->tipoAnimale;
    }

    public function setTipoAnimale(string $tipoAnimale)
    {
        $this->tipoAnimale = $tipoAnimale;

        return $this;
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
