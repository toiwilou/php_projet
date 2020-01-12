<?php 
	$tabext = get_loaded_extensions();
	natcasesort($tabext);
	foreach($tabext as $cle=>$valeur)
	{
		echo "$valeur\n";
	}
?>

