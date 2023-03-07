<?php
require_once 'Formation.php';
require_once 'Session.php';
require_once 'Participant.php';

//la formation Java
$java1=new Formation('j1','le langage Java');
//les sessions 
$s11=new Session(11,'01-06-2023',3);
$s12=new Session(12,'08-06-2023',3);
$s16=new Session(16,'21-06-2023',3);
//ce sont les sessions de la formation Java
$java1->ajouterSession($s11);
$java1->ajouterSession($s12);
$java1->ajouterSession($s16);
//les participants avec leurs voeux de session, DEJA trie par anciennete decroissante
$joelle=new Participant('Orange', 'Joelle', 15,array(1=>$s11,2=>$s12));
//ici Joelle veut aller en voeu1 à la session s11 du 01-06-2023, en voeu2 à la session s12 du 08-06-2023
$franck=new Participant('Prune', 'Franck', 13, array(1=>$s12,2=>$s11));
$marc=new Participant('Ivoire', 'Marc', 8, array(1=>$s11,2=>$s12));
$eric=new Participant('Diamant','Eric',6, array(1=>$s12,2=>$s11,3=>$s16));
$anne=new Participant('Saphyr', 'Anne', 4, array(1=>$s11,2=>$s12));
$zoe=new Participant('Emeraude', 'Zoé', 2, array(1=>$s11,2=>$s12));
$pierre=new Participant('Onyx', 'Pierre', 1, array(1=>$s11,2=>$s12,3=>$s16));
//ce sont les participants inscrits à la formation Java
$java1->ajouterInscrit($joelle);
$java1->ajouterInscrit($franck);
$java1->ajouterInscrit($marc);
$java1->ajouterInscrit($eric);
$java1->ajouterInscrit($anne);
$java1->ajouterInscrit($zoe);
$java1->ajouterInscrit($pierre);

//a la cloture, on affecte les Participants à une Session de Formation
//c'est LA METHODE COEUR de ce processus
$java1->affecteParticipants();

//on teste si la méthode affecteParticipants() fait bien le boulot demandé

//tes1 : quelle est la session retenue pour chaque participant
foreach ($java1->getLesInscrits() as $unInscrit){
    echo $unInscrit->getPrenom(),' ',$unInscrit->getLaSession()->getNumero(),PHP_EOL;
}
/*résultat attendu
Joelle 11
Franck 12
Marc 11
Eric 12
Anne 11
Zoé 12
Pierre 16
*/

//test2 : quels sont les participants pour chaque session
foreach($java1->getMesSessions() as $uneSession){
    echo 'Session ',$uneSession->getNumero(),' : ';
    foreach($uneSession->getLesParticipants() as $unParticipant){
        echo $unParticipant->getPrenom(),' ';
    }
    echo 'session pleine? ',($uneSession->estPleine()==1)?'Vrai':'Faux', PHP_EOL;
}
/*résultat attendu
Session 11 : Joelle Marc Anne session pleine? Vrai
Session 12 : Franck Eric Zoé session pleine? Vrai
Session 16 : Pierre session pleine? Faux
*/
?>
        
        
        