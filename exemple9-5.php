<?php
class action
{
 // Définition d’une constante
 const PARIS="Palais Brognard";
 const NEWYORK="Wall Street";
 // Variables propres de la classe
 public $nom ;
 public $cours;
 public $bourse=array("Paris ","9h00","18h00");
 // Fonctions propres de la classe
 function info()
 {
  global $client;
  // Utilisation de variables globales et d’un tableau superglobal 
  echo "<h2> Bonjour $client, vous êtes sur le serveur:
   ",$_SERVER["HTTP_HOST"],"</h2>";
  echo "<h3>Informations en date du ",date("d/m/Y H:i:s"),"</h3>";
  echo "<h3>Bourse de {$this->bourse[0]} Cotations de {$this->bourse[1]}
  à {$this->bourse[2]} </h3>";
  
  // Informations sur les horaires d’ouverture
  $now=getdate();
  $heure= $now["hours"];
  $jour= $now["wday"];
  echo "<hr />";
  echo "<h3>Heures des cotations</h3>";
  if(($heure>=9 && $heure <=17)&& ($jour!=0 && $jour!=6))
  { echo "La Bourse de Paris ( ", self:: PARIS," ) est ouverte <br>";}
  else
  { 
  echo "La Bourse de Paris ( ", self:: PARIS," ) est fermée <br>"; 
  if(($heure>=16 && $heure <=23)&& ($jour!=0 && $jour!=6) ) 
  {
	  echo"LaBoursedeNewYork(",self::NEWYORK,")estouverte<hr>"; 
   } else{
			echo "La Bourse de New York ( ", self:: NEWYORK," ) est fermée <hr>"; }
			// Affichage du cours
	if(isset($this->nom) && isset($this->cours))
	{
	echo "<b>L'action $this->nom cotée à la bourse de {$this->bourse[0]}
	vaut $this->cours &euro;</b><br />";
  }
  }
 }
} 
?>