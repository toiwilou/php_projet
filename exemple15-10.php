<!DOCTYPE html> 
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
<title>Rechercher un article dans le magasin</title>
</head> <body>
<form action= <?php echo $_SERVER['PHP_SELF']?> method="post" enctype= "application/x-www-form-urlencoded">
<fieldset>
<legend><b>Rechercher un article en magasin</b></legend>
<table>
<tbody>
<tr> <td>Mot-clé </td>
<td>
<input type="text" name="motcle" size="40" maxlength="40" />
</td> 
</tr>
<tr>
<td>Dans la catégorie : </td>
<td>
<select name="categorie">
<option value="tous">Tous</option>
<option value="vidéo">Vidéo</option>
<option value="informatique">Informatique</option>
<option value="photo">Photo</option>
<option value="divers">Divers</option>
</select>
</td>
</tr>
<tr>
<td>Trier par : </td>
<td>
<select name="tri">
<option value="prix">Prix</option>
<option value="categorie">Catégorie</option>
<option value="id_article">Code</option>
</select>
</td>
</tr>
<tr><td>En ordre : </td>
<td>
Croissant<input type="radio" name="ordre" value="ASC" checked="checked"/> 
Décroissant <input type="radio" name="ordre" value="DESC" />
</td> </tr>
<tr><td>Envoyer</td><td>
<input type="submit" name="" value="OK"/>
</td> 
</tr> 
</tbody>
</table>
</fieldset>
</form>
<?php 
 if(!empty($_POST['motcle']))
 {
 include('exemple15-2.php'); 
 $motcle=strtolower(($_POST['motcle']));
 $categorie=($_POST['categorie']);
 $ordre=($_POST['ordre']);
 $tri=($_POST['tri']);
 // Requête SQL
 $reqcategorie=($_POST['categorie']=="tous")?"":"AND categorie='$categorie'";
 $requete="SELECT id_article AS 'Code article',designation AS 'Description', prix,categorie AS 'Categorie' FROM article WHERE lower(designation) LIKE lower('%$motcle%')";
 //$reqcategorie.="ORDER BY $tri $ordre";
 $idcom=connexobjet('magasin','myparam');
 $result=$idcom->query($requete);
 if(!$result)
 {
  echo "Lecture impossible"; 
 }
 else
 {
  $nbcol=$result->field_count;
  $nbart=$result->num_rows;
  $titres=$result->fetch_fields();
  echo "<h3>Il y a $nbart articles correspondant au mot-clé : $motcle</h3>";
  // Affichage des titres du tableau
  echo "<table border=\"1\"> <tr>"; 
  foreach($titres as $nomcol=>$val)
  {
   echo "<th>", $titres[$nomcol]->name ,"</th>";
  }
  echo "</tr>";
  // Affichage des valeurs du tableau
  for($i=0;$i<$nbart;$i++)
  {
   $ligne=$result->fetch_row(); echo "<tr>";
  } 
}
?>
for($j=0;$j<$nbcol;$j++)
{
 echo "<td>",$ligne[$j],"</td>"; 
}
 echo "</tr>"; 
}
 echo "</table>";
 $result->free();
 $idcom->close();
} 
}
?>
</body> 
</html>