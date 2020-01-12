<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title>Saisissez vos coordonnées</title>
 </head>
 <body>
  <form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="application/x-www-form-urlencoded">
   <fieldset>
   <legend><b>Vos coordonnées</b></legend>
   <table>
    <tr><td>Nom : </td><td><input type="text" name="nom" size="40" maxlength="30"/></td></tr> <tr><td>Prénom : </td><td><input type="text" name="prenom" size="40" maxlength="30"/></td></tr> <tr><td>Âge : </td><td><input type="text" name="age" size="40" maxlength="2"/></td></tr> <tr><td>Adresse : </td><td><input type="text" name="adresse" size="40" maxlength="60"/></td></tr> <tr><td>Ville : </td><td><input type="text" name="ville" size="40" maxlength="40"/></td></tr> <tr><td>E-mail : </td><td><input type="text" name="mail" size="40" maxlength="50"/></td></tr> <tr>
    <td><input type="reset" value="Effacer"></td>
    <td><input type="submit" value="Envoyer"></td>
    </tr>
   </table>
  </fieldset>
 </form>
<?php
include("exemple15-2.php");
$idcom=connexobjet('magasin','myparam');
if(!empty($_POST['nom'])&& !empty($_POST['adresse'])&& !empty($_POST['ville']))
{
$id_client="\N";
$nom=$idcom->escape_string($_POST['nom']);
$prenom=$idcom->escape_string($_POST['prenom']);
$age=$idcom->escape_string($_POST['age']);
$adresse=$idcom->escape_string($_POST['adresse']);
$ville=$idcom->escape_string($_POST['ville']);
$mail=$idcom->escape_string($_POST['mail']);
// Requête SQL
$requete="INSERT INTO client VALUES('$id_client','$nom','$prenom','$age','$adresse','$ville','$mail')";
$result=$idcom->query($requete);
if(!$result) 
{
 echo $idcom->errno;
 echo $idcom->error;
 echo "<script type=\"text/javascript\">
 alert('Erreur : ".$idcom->error."')</script>"; 
}
else 
{
 echo "<script type=\"text/javascript\">
 alert('Vous êtes enregistré. Votre numéro de client est :". $idcom->insert_id."')</script>";
 $idcom->close(); 
}
}
else {echo "<h3>Formulaire à compléter !</h3>";} 
?>
</body>
</html>