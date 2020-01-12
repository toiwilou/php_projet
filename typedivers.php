<?php 

$connect = mysql_connect("localhost","root","") 
	or die ("ERREUR de CONNEXION");
echo "L'identifiant de connexion vaut : $connect <br />";
echo "Le type de la variable \$connect est",gettype($connect);

?>


