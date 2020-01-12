<!DOCTYPE html> 
<html lang="fr"> 
 <head>
  <meta http-equiv="Content-Type" 
  content="text/html;charset=UTF-8" /> 
  <title>Fonctions dynamiques</title>
 </head>
 <body>
  <form method="post" action="exemple7-17.php" >
   <fieldset>
    <legend>Choisissez votre fonction et son paramètre</legend>
    <input type="text" name="fonction" 
	value="<?= isset($_POST["fonction"]) ? $_POST["fonction"] : "" ?>"/>
    <input type="text" name="param" 
	value="<?= isset($_POST["param"]) ? $_POST["param"] : "" ?>"/>
    <input type="submit" value="Calculer"/>
   </fieldset>
  </form>
<!-- Code PHP : gestion du formulaire-->
<?php
if((isset($_POST["fonction"])&& 
$_POST["fonction"]!="") && $_POST["param"]!="")
{
 $fonction = $_POST["fonction"]; 
 $param = $_POST["param"]; if(function_exists($fonction))
 {
  echo "Résultat : $fonction($param) = ",$fonction($param);
 }
else echo "ERREUR DE FONCTION!";
}
?> 
 </body> 
</html>
