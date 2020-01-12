<?php
echo"Exemple 1<br />";
$tab= array("UN"=>range(1,5),
	"DEUX"=>range("a","c"),
	range("A","E"),range(11,15)
	); 
echo "Structure du tableau initial :<br />";
print_r($tab);
echo "<hr />";
$soustab = array_slice($tab,1,2);
echo"array_slice(\$tab,1,2) donne : ";
print_r($soustab);
echo "<hr />";
echo"Exemple 2<br>";
$heros= array("Spock","Batman","Dark Vador",
"Hal","Frodo","Sky Walker","Amidala","Alien");
echo "Structure du tableau initial :<br>";
print_r($heros);
echo "<hr />";
//Extrait des 5 premiers
echo "array_slice(\$heros,0,5)"; 
$prem=array_slice($heros,0,5); 
print_r($prem);
echo "<hr />";
/*Extrait des 5 derniers (le dernier est 
considéré comme ayant l'indice –1 et non pas 0)*/
$der=array_slice($heros,-5,5);
echo"array_slice(\$heros,–5,5) ";
print_r($der);
echo "<hr />";
//Extrait de 3 noms en commençant à la position –5
$der=array_slice($heros,-5,3); echo"array_slice(\$heros,–5,3) "; 
print_r($der);
echo "<hr />";
/*Extrait des éléments de l'indice 1 
jusqu'à la fin hormis les deux derniers */
$der=array_slice($heros,1,-2); echo"arra y_slice(\$heros,1,–2) "; 
print_r($der);
echo "<hr />";
/*Extrait des éléments de l'indice –5 
jusqu'à la fin hormis les deux derniers */
$der=array_slice($heros,-5,-2);
echo"array_slice(\$heros,–5,–2) "; 
print_r($der);
echo "<hr />";
?>