<?php
$ch = "Bonjour ";
$sexe="M";
$ch .= ($sexe=="F")?"Madame":"Monsieur";
echo "<h2>$ch</h2>";
$nb = 3;
$pmu ="Il faut trouver ".$nb;
$mot = ($nb==1)?" cheval":" chevaux";
echo "<h3> $pmu $mot </h3>";
?>




switch(expression)
{
	case valeur1:
	bloc d'instructions 1;
	break;
	case valeur2:
	bloc d'instructions 2;
	break;
	.......................
	case valeurN:
	bloc d'instructions N;
	break;
	
	default:
	bloc d'instructions 1;
	break;
}


