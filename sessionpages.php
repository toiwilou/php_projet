<?php 
session_start();
$nom = "Jean";
$_SESSION['nom'] = $nom;
echo "<a href=\"deux.php\">Vers la page DEUX</a>";
?>


<?php 
session_start();
echo "</br > Bonjour", $_SESSION['nom'];
?>

 


