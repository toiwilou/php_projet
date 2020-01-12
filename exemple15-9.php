<?php
 if(empty($_POST['code'])){header("Location:exemple15-8.php");}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
<title>Modifiez vos coordonnées</title>
</head>
<body>
<?php
include('exemple15-2.php');
$idcom=connexobjet('magasin','myparam');
if(!isset($_POST['modif']))
{
 $code=$idcom->escape_string($_POST['code']);
 // Requête SQL
 $requete="SELECT * FROM client WHERE id_client='$code' ";
 $result=$idcom->query($requete);
 $coord=$result->fetch_row();
 // Création du formulaire complété avec les données existantes
 echo "<form action= \"". $_SERVER['PHP_SELF']."\" method=\"post\"enctype=\"application/x-www-form-urlencoded\">";
 echo "<fieldset>";
 echo "<legend><b>Modifiez vos coordonnées</b></legend>";
 echo "<table>";
 echo "<tr><td>Nom : </td><td><input type=\"text\" name=\"nom\" size=\"40\" maxlength=\"30\" value=\"$coord[1]\"/> </td></tr>";
 echo "<tr><td>Prénom : </td><td><input type=\"text\" name=\"prenom\" size=\"40\"maxlength=\"30\" value=\"$coord[2]\"/></td></tr>";
 echo "<tr><td>Âge : </td><td><input type=\"text\" name=\"age\" size=\"40\" maxlength=\"2\" value=\"$coord[3]\"/></td></tr>";
 echo "<tr><td>Adresse : </td><td><input type=\"text\" name=\"adresse\" size=\"40\"maxlength=\"60\" value=\"$coord[4]\"/></td></tr>";
 echo "<tr><td>Ville : </td><td><input type=\"text\" name=\"ville\" size=\"40\"maxlength=\"40\" value=\"$coord[5]\"/></td></tr>";
 echo "<tr><td>E-mail : </td><td><input type=\"text\" name=\"mail\" size=\"40\" maxlength=\"50\" value=\"$coord[6]\"/></td></tr>";
 echo "<tr><td><input type=\"reset\" value=\"Effacer\"></td> <td><input type=\"submit\" name=\"modif\" value=\"Enregistrer\"></td></tr></table>";
 echo "</fieldset>";
 echo "<input type=\"hidden\" name=\"code\" value=\"$code\"/>";
 echo "</form>";
 $result->free();
 $idcom->close();
}
elseif(isset($_POST['nom'])&& isset($_POST['adresse'])&& isset($_POST['ville']))
{
 // ENREGISTREMENT
 $nom=$idcom->real_escape_string($_POST['nom']); $adresse=$idcom->real_escape_string($_POST['adresse']); $ville=$idcom->real_escape_string($_POST['ville']); $mail=$idcom->real_escape_string($_POST['mail']); $age=(integer)$_POST['age']; $code=$idcom->real_escape_string($_POST['code']);
 // Requête SQL
 $requete="UPDATE client SET nom='$nom', adresse= '$adresse',ville='$ville',mail='$mail',age=$age WHERE id_client='$code'";
 $result=$idcom->query($requete);
 if(!$result)
 {
  echo "<script type=\"text/javascript\"> alert('Erreur : ".$result->error."')</script>";
}
else 
{
 echo "<script type=\"text/javascript\"> alert('Vos modifications sont enregistrées');window.location='exemple15-8.php';</script>";
}
$result->free();
$idcom->close(); }
else {
echo "Modifiez vos coordonnées !"; 
}
?> 
</body>
</html>