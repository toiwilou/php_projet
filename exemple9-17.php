<?php
interface abscisse
{
  public function setx($x);
}
//
interface ordonnee
{
   public function sety($y);
}
//Classe
class pointaxe implements abscisse
{
  public $x;
  public function setx($x)
  {
    $this->x=$x;
  }
}
//
class pointplan implements abscisse,ordonnee
{
  public $x;
  public $y;
  public function setx($x)
  {
    $this->x=$x;
  }
  public function sety($y)
  {
    $this->y=$y;
  }
  public function module()
  {
    return sqrt($this->x*$this->x+$this->y*$this->y);
  }
}
//Création d'objets
$point1 = new pointaxe();
$point1->setx(21);
var_dump($point1);
echo "<hr />";
//
$point2 = new pointplan();
$point2->setx(7);
$point2->sety(-5);
var_dump($point2);
echo "<hr />";
echo "Coordonnées du point M ( $point2->x , $point2->y ) <br />";
echo "Distance OM = ", $point2->module();
?>
