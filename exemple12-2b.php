
<?php 
	setcookie("achat[premier]","livre",time()+3600);
	setcookie("achat[deuxieme]","CD",time()+3600);
	setcookie("achat[troisieme]","vidéo",time()+3600);
	
	foreach($_COOKIE["achat"] as $cle=>$valeur)
	{
		echo "Le cookie nommé: $cle contient la valeur : $valeur <br />";
	}
?>

