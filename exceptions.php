<?php

$a = 100;
$b = 0;
try 
{
    if ($b === 0) {
        throw new Exception("Division par 0", 7);
    }
    else {
        echo "R&#233;sultat de : $a / $b = ", $a / $b;
    }
} catch (Exception $except) {
    echo "<script type=\"text/javascript\">alert('Erreur n ", $except->getCode(), $except->getMessage(), " ' ) </script>";
} finally {
    echo "Tout est sous controle<br />";
}
echo "Fin";
?>
	
