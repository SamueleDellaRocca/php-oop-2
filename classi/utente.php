<?php

class Utente
{
    protected $nomeCompleto;
    protected $email;
    protected $abbonato;
    protected $scadenzaCartaCredito;

    public function getNomeCompleto()
    {
        return $this->nomeCompleto;
    }

    public function setNomeCompleto(string $nomeCompleto)
    {
        $this->nomeCompleto = $nomeCompleto;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    public function getAbbonato()
    {
        return $this->abbonato;
    }

    public function setAbbonato(bool $abbonato)
    {
        $this->abbonato = $abbonato;

        return $this;
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
}
