<?php

class Formation
{

    private $code;
    private $libelle;
    private $mesSessions;
    private $lesInscrits;

    function __construct($code, $libelle)
    {
        $this->code = $code;
        $this->libelle = $libelle;
    }

    function ajouterSession($uneSession)
    {
        $this->mesSessions[] = $uneSession;
    }
    function getMesSessions()
    {
        return $this->mesSessions;
    }

    function getChoixSession($numSession)
    {
        return $this->mesSessions[$numSession];
    }

    function ajouterInscrit($unInscrit)
    {
        $this->lesInscrits[] = $unInscrit;
    }

    function getLesInscrits()
    {
        //tri par anciennete decroissante
        return $this->lesInscrits;
    }

    function affecteParticipants()
    {
        //A COMPLETER
    }
}
