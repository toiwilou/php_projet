<?php
include ("myparam.inc.php");
include_once("exemple15-2.php");
$idcom=connexobjet("magasin","myparam");
$requete="SELECT * FROM article ORDER BY categorie";
$result=$idcom->query($requete);
//print_r($result);
if(!$result)
{
 echo "Lecture impossible";
}
else
{
 // Lecture des résultats
 while ($row = $result->fetch_array(MYSQLI_NUM)) 
 {
  foreach($row as $donn) 
  {
   echo $donn,"&nbsp;"; 
  }
 echo "<hr />"; 
 }
 // Destruction de l'objet $result
 $result->free();
}
// Fermeture de la connexion
   $idcom->close();
?>

