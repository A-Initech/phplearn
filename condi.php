<?php 
$heure= readline('Entrez une heure :');

if ((9 <= $heure && $heure <=12 ) || (14 <= $heure && $heure <=17 )){
 echo 'Le magasin sera ouvert';

} else {
    echo 'Le magasin sera fermé';
}

/* VRAI && VRAI = VRAI
   VRAI && FAUX = FAUX
   FAUX && FAUX = FAUX 

   VRAI || VRAI = VRAI
   VRAI || FAUX = VRAI

   FAUX || FAUX = FAUX 
   
/*switch($action){
 case 1:
    echo 'J\'attaque !';
    break;
 case 2: 
    echo 'Je défends';
    break;
case 3: 
    echo'Je ne fait rien';
    break;
    default:
}
*/



