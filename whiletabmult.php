<!DOCTYPE html>
<html lang="fr">
 <head>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
 <title>Lecture d un tableau indicé avec une boucle while
 </title>
 </head>
 <body>
  <div>
<?php
// Création du tableau
$clients = array(array ("Leparc", "Paris", "35"), 
	array("Duroc","Vincennes","22"),
	array("Denoël","Saint Cloud","47"));
/* Ajout d’un élément */
$clients[7] = array("Duval","Marseille","76");
// Création du tableau HTML
echo "<table border=\"1\" width=\"30%\" >
	<thead><tr> <th> Client </th><th> Nom </th>
	<th> Ville </th><th> Age </th></tr></thead>
	<tfoot> <tr><th> Client </th> 
	<th> Nom </th><th> Ville </th>
	<th> Age </th></tr></tfoot><tbody>";
// Lecture des éléments
$i=0; 
while(isset($clients[$i])) 
{
 echo "<tr><td align=\"center\"><b>$i </b></td>"; $j=0;
 while(isset($clients[$i][$j]))
 {
  echo "<td><b>",$clients[$i][$j]," </b></td>";
  $j++; 
 }
 echo "</tr>";
 $i++; 
}
?>
</tbody> </table>
</div> </body>
</html>
