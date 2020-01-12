<?php
require("exemple9-2.php");
echo "Constante PARIS =",PARIS,"<br />";
echo "Nom = ",$nom,"<br />";
echo "Cours= ",$cours,"<br />";
echo "Bourse= ",$bourse,"<br />";
//info(); 
/*L'appel de info() provoque une 
	erreur si vous décommentez la ligne */
action::info();//fonctionne
echo "Constante PARIS =",action::PARIS,"<br />";
?>

 