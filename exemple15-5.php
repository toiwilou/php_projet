<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Lecture de la table article</title>
<style type="text/css" >
table {border-style:double;border-width: 3px;border-color: red;background-color: yellow;} 
</style>
</head>
<body>
<?php
include("exemple15-2.php");
$idcom=connexobjet("magasin","myparam");
//****************************************
$requete="SELECT id_article AS 'Code article',designation AS 'Désignation',prix AS 'Prix Unitaire',categorie AS 'Catégorie' FROM article WHERE designation LIKE '%Sony%' ORDER BY categorie";
//*****************************************
$result=$idcom->query($requete);
//***************************************** 
if(!$result)
{
 echo "Lecture impossible"; 
}
else 
{
 $nbart=$result->num_rows;
 $titres=$result->fetch_fields();
 echo "<h3>Tous nos articles de la marque Sony</h3>"; 
 echo "<h4>Il y a $nbart articles en magasin</h4>"; 
 echo "<table border=\"1\"> <tr>";
 // Affichage des titres
 foreach($titres as $colonne)
 {
  echo "<th>", htmlentities($colonne->name) ,"</th>";
 }
 echo "</tr>";
 // Lecture de TOUTES les lignes du résultat
 $tabresult=$result->fetch_all();
 foreach($tabresult as $ligne)
 {
  echo "<tr>";
  foreach($ligne as $valeur)
  {
   echo "<td> $valeur </td>"; 
  }
 echo "</tr>";
 }
 echo "</table>"; 
}
$result->free(); 
$idcom->close(); 
?>
</body>
</html>