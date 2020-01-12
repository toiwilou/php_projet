<?php
//Création d'un tableau de noms
$tab[1]="Basile";
$tab[2]="Conan";
$tab[3]="Albert"; 
$tab[4]="Vincent";
//Boucle de lecture du tableau
for($i=1;$i<count($tab);$i++)
{
 if ($tab[$i][0]=="A")
 {
  echo "Le premier nom commençant par A est le n° $i: ",$tab[$i];
  break;
 }
} 
?>



