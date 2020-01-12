<?php
class action
{
  public  $propnom;
  public  $propcours;
  public $propbourse;
  function __construct($nom,$cours,$bourse) 
  {
	  $this->propnom=$nom;
	  $this->propcours=$cours;
    $this->propbourse=$bourse;
  }
}
$bim = new action("BIM",9.45,"New York");
var_dump($bim);
$bim->date="2017";
echo "<hr />";
var_dump($bim);
echo "<hr />";
echo "Propriété date : ",$bim->date;
?>

