<?php 
class acces
{
 // Variables propres de la classe
 public $varpub ="Propriété publique";
 protected $varpro="Propriété protégée";
 private $varpriv="Propriété privée";
 function lireprop()
 {
  echo "Lecture publique : $this->varpub","<br />"; 
  echo "Lecture protégée : $this->varpro","<br />"; 
  echo "Lecture privée: $this->varpriv","<hr />";
  
 
 }
  
}
$objet=new acces();
$objet->lireprop(); 
echo $objet->varpub; 
// echo $objet->varpriv; Erreur fatale si décommenté 
// echo $objet->varpro; Erreur fatale si décommenté 
?>



