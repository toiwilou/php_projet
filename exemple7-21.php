<?php
//Création
$varadd=function($a,$b)
{ echo "Somme = ",$a+$b;};
 //Appel
 $varadd(22,7); //Somme = 29
 echo "<br/>";
 //Création
 $vardiv = function($a,$b){ return $a/$b;};
 //Appel
 echo "Quotient = ",$vardiv(22,7); //3.1428571428571
 ?>