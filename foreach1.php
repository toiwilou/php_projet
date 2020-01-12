<?php
//Création du tableau de 9 éléments
for($i=0;$i<=8;$i++)
{
 $tab[$i] = pow(2,$i);
}
$val ="Une valeur";
echo $val,"<br />";
//Lecture des valeurs du tableau 
echo"Les puissances de 2 sont :";
foreach($tab as $val)
{echo $val." : ";}
?>


