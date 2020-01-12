<?php
class accesmeth
{
  //Variables propres de la classe
  private $code="Mon code privé";
  //Méthode privée
  private function lirepriv()
  {
		echo "Lire privée ",$this->code,"<br />";
  }
  //Méthode protÈgÈe
  protected function lirepro()
  {
		echo "Lire protégée ",$this->code,"<br />";
  }
  //Méthode publique
  public function lirepub()
  {
		echo "Lire publique : ",$this->code,"<br />";
        $this->lirepro();
		$this->lirepriv();
  }
   
}

//**********************************
//Appels des méthodes
$objet=new accesmeth();
$objet->lirepub();
//$objet->lirepro();//Erreur
//$objet->lirepriv();//Erreur
?>


