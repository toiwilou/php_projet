<!DOCTYPE html> 
 <html lang="fr">
  <head>
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
   <title> Lecture d un tableau indicé avec une boucle for</title>
 </head> 
 <body>
  <div>
<?php
// Création du tableau
$clients = array(array ("Leparc", "Paris", "35"),
			array("Duroc", "Vincennes", "22"),
			array("Denoël","Saint Cloud","47"));
 
echo "<table border=\"1\" width=\"30%\" >";
// En-tête du tableau
echo "<thead><tr> <th> Client </th><th> Nom </th>
	<th> Ville </th><th> Age </th> </tr></thead>";
// Pied de tableau
echo "<tfoot> <tr><th> Client </th><th> Nom </th>
	<th> Ville </th><th> Age </th> </tr></tfoot><tbody>";
// Lecture des indices et des valeurs
for ($i=0;$i<count($clients);$i++)
{
 echo "<tr><td align=\"center\"><b>$i </b></td>"; 	
for($j=0;$j<count($clients[$i]);$j++)
{
echo "<td><b>",$clients[$i][$j]," </b></td>"; }
echo "</tr>"; }
?>
</tbody>
</table> </div>
</body> </html>

