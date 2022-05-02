<?php

class Prodotto
{
    private $marca;
    private $prezzo;
    private $tipoAnimale;

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca(string $marca)
    {
        $this->marca = $marca;

        return $this;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function setPrezzo(int $prezzo)
    {
        return $this->prezzo = $prezzo;

        return $this;
    }

    public function getTipoAnimale()
    {
        return $this->tipoAnimale;
    }

    public function setTipoAnimale($tipoAnimale)
    {
        $this->tipoAnimale = $tipoAnimale;

        return $this;
    }
};
