<?php

class Session {

    private $numero;
    private $date;
    private $nbMax;
    private $lesParticipants=[]; 

    function __construct($numero, $date, $nbMax) {
        $this->numero = $numero;
        $this->date = $date;
        $this->nbMax = $nbMax;
    }

    function ajouterParticipant($unParticipant){
        $this->lesParticipants[]=$unParticipant;
    }
    
    function estPleine(){
        //A COMPLETER
    }
    function getNumero() {
        return $this->numero;
    }
    function getLesParticipants() {
        return $this->lesParticipants;
    }
}
