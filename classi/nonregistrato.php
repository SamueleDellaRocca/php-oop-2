<?php

include_once __DIR__ . "/utente.php";

class NonRegistrato extends Utente
{

    protected $sconto = 0;

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

    public function getSconto()
    {
        return $this->sconto;
    }
}
