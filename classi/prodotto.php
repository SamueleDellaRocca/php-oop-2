<?php

class Prodotto
{
    protected $marca;
    protected $prezzo;

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
        $this->prezzo = $prezzo;

        return $this;
    }
};
