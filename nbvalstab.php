<?php
$tab= array("Web","Internet","PHP","JavaScript","PHP","ASP","PHP","ASP"); 
$result=array_count_values($tab);
echo "Le tableau \$tab contient ",count($tab)," éléments <br>";
echo "Le tableau \$tab contient ",count($result)," valeurs différentes <br>"; 
print_r($result);
?>

