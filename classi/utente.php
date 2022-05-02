<?php

class Utente
{
    private $nomeCompleto;
    private $email;
    private $abbonato;
    private $scadenzaCartaCredito;

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

    public function controlloScadenza($scadenzaCartaCredito)
    {
        if (strtotime($scadenzaCartaCredito) < strtotime('now')) {
            echo ("<h2>La tua carta di credito è scaduta il {$scadenzaCartaCredito}</h2>");
        } else {
            echo ("<h2>La tua carta di credito è valida</h2>");
        }
    }
}
