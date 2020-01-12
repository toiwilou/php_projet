<?php 
echo "<table border=\"1\" >"; 
echo "<caption><b>Confirmation de 
	vos coordonn&#233;es</b></caption>"; 
foreach($_POST as $cle=>$val) { 
echo "<tr> <td> $cle : &nbsp;</td> <td>"
	.stripslashes($val) ."</td></tr>"; 
} 
echo "</table>"; 
?>



