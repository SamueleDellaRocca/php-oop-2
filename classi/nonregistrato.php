<?php

include_once __DIR__ . "/utente.php";

class NonRegistrato extends Utente
{

    private $sconto = 0;

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
        $this->controlloScadenza($this->scadenzaCartaCredito);
    }

    public function getSconto()
    {
        return $this->sconto;
    }
}
