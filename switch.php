<?php

$dept=75;
switch($dept)
{
//Premier cas
case 75:
case "Capitale":
echo "Paris";
break;
//Deuxième cas
case 78:
echo "Hauts de Seine";
break;
//Troisième cas
case 93:
case "Stade de France":
echo "Seine Saint Denis"; break;
//la suite des départements...      
//Cas par défaut
default:
echo "Département inconnu en Ile de France"; break;
}

?>

