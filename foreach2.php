<?php
//Création du tableau
for($i=0;$i<=8;$i++) 
{
 $tab[$i] = pow(2,$i);
}
//Lecture des indices et des valeurs
foreach($tab as $ind=>$val)
{echo " 2 puissance $ind vaut $val <br />";}
echo "Dernier indice ",$ind, " ,dernière valeur ",$val;
?>

