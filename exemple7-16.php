<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" 
	content="text/html;charset=UTF-8" /> 
	<title>Passage par référence</title>
</head> <body> <div>
<?php
// Définition de la fonction
function prod(&$tab,$coeff)
{
 foreach($tab as $cle=>$val)
 {
  if(is_numeric($val)) {$tab[$cle]*=$coeff;} 
  else
  {
   echo "Erreur : Le tableau est non numérique <br />";
   return FALSE; 
  }
 }
 return $tab; 
}
echo "Tableau numérique <br />";
$tabnum = range(1,7);
echo "Tableau avant l'appel <br />",print_r( $tabnum),"<br />";
// Passage du tableau à la fonction
$result= prod($tabnum,3.5);
echo "Tableau résultat <br />",print_r( $result),"<br />";
echo "Tableau initial après l'appel <br />",print_r( $tabnum),"<br />"; 
echo "Tableau alphabétique <br />";
$tabalpha= range("A","F");
$resultal=prod($tabalpha,3); // Retourne FALSE
echo "Tableau après l'appel <br />",print_r( $tabalpha),"<br />";
?>
</div>
</body>
</html>

