<?php
$nom = "ENgelS" ;
$prenom = "jEan " ;
$adresse = "21, rue compoinT";
$ville = "75018 pAris" ; 
$mail = "ENGELS@funPHP.Com" ; 
$prenom = ucfirst (strtolower ($prenom));
$nom = strtoupper ($nom) ; 
$adresse = ucwords(strtolower ($adresse));
$ville = strtoupper ($ville); 
$mail = strtolower ($mail); 
echo "Mes coordonnées <br />"; 
echo $prenom, $nom, "<br />"; 
echo $adresse, "<br />" ; 
echo $ville, "<br />" ;
?>
