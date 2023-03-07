<?php
class Participant
{

    private $nom;
    private $prenom;
    private $anciennete;
    private $lesChoix; //a parcourir par anciennete decroissante
    private $laSession = NULL; //valorise lors de la cloture

    function __construct($nom, $prenom, $anciennete, $lesChoix)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->anciennete = $anciennete;
        $this->lesChoix = $lesChoix; //tri par ordre de voeu décroissnt
    }
    function getLaSession()
    {
        return $this->laSession;
    }

    function setLaSession($laSession)
    {
        $this->laSession = $laSession;
    }
    function getAnciennete()
    {
        return $this->anciennete;
    }
    function getPrenom()
    {
        return $this->prenom;
    }

    function getLesChoix()
    {
        return $this->lesChoix;
    }

    function getChoixSession($numSession)
    {
        return $this->lesChoix[$numSession];
    }
}
