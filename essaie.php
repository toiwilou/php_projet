<?php

$a = 100;
$b = 0;
try {
    if ($b === 0) {
        throw new Exception("Division par 0", 7);
    } else {
        echo "R&#233;sultat de : $a / $b = ", $a / $b;
    }
} catch (Exception $except) {
    echo "<hr>Message d'erreur :";
    echo $except->getMessage(), "<hr>";
    echo "Nom du fichier :", $except->getFile(), "<hr>";
    echo "Num&#233;ro de ligne :", $except->getLine(), "<hr>";
    echo "Code d'erreur :", $except->getCode(), "<hr>";
    echo "__toString :", $except->__toString(), "<hr>";
} finally {
    echo "L'exception a &#233;t&#233; g&#233;r&#233;e, 
				le script continue<hr>";
}
echo "Vraie Fin";
?>
	
