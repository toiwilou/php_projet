
<?php
 
	$tabcook = array("prenom"=>"Paul","nom"=>"Char", "ville"=>"Marseille");
	foreach($tabcook as $cle=>$valeur)
	{
	 setcookie("client2[$cle]",$valeur,time()+7200);
	 
	}
?>

