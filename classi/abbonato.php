<?php

include_once __DIR__ . "/utente.php";

class Abbonato extends Utente
{
    protected $scadenzaCartaCredito;
    protected $sconto = 20;

    public function __construct(
        $nomeCompleto,
        $email,
        $abbonato,
        $scadenzaCartaCredito
    ) {
        $this->nomeCompleto = $nomeCompleto;
        $this->email = $email;
        $this->abbonato = $abbonato;
        $this->scadenzaCartaCredito = $scadenzaCartaCredito;
    }


    public function getScadenzaCartaCredito()
    {
        return $this->scadenzaCartaCredito;
    }

    public function setScadenzaCartaCredito(string $scadenzaCartaCredito)
    {
        $this->scadenzaCartaCredito = $scadenzaCartaCredito;

        return $this;
    }

    public function getSconto()
    {
        return $this->sconto;
    }
}
