<?php
//Classe abstraite valeur
abstract class valeur
{
  protected $nom;
  protected $prix;
  abstract  protected function __construct($a,$b,$c,$d) ;
  abstract protected function getinfo();
}
//Classe action
class action extends valeur
{
  private $bourse;
  function __construct($nom,$prix,$bourse="Paris",$fin="0")
  {
    $this->nom=$nom;
    $this->prix=$prix;
    $this->bourse=$bourse;
  }
  public function getinfo()
  {
     $info="Action $this->nom cotée à la bourse de $this->bourse <br />";
     $info.="Le prix de $this->nom est de $this->prix";
     return $info;
  }
}
//Classe emprunt
class emprunt extends valeur
{
  private $taux;
  private $fin;
  function __construct($nom,$prix,$taux,$fin)
  {
    $this->nom=$nom;
    $this->prix=$prix;
    $this->taux=$taux;
    $this->fin=mktime(24,0,0,12,31,$fin);
  }
  public function getinfo()
  {
    $reste=round(($this->fin-time())/86400);
    $info="Emprunt $this->nom au taux de  de $this->taux % <br />";
    $info.="Le prix de $this->nom est de $this->prix <br />";
    $info.="Echéance : dans $reste jours";
    return $info;
  }
}
//Création d'objets
$action1 = new action("Alcotel",9.76);
echo "<h4>", $action1->getinfo()," </h4>";
$action2 = new action("BMI",23.75,"New York");
echo "<h4>", $action2->getinfo() ,"</h4>";
$emprunt = new emprunt("EdF",1000,5.5,2018);
echo "<h4>", $emprunt->getinfo(),"</h4>";
?>
