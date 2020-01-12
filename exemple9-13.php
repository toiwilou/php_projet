<?php
trait marcher
{
 public $pattes;
 function marche()
 {
  echo "Je marche sur ". $this->pattes." pattes<br />"; 
 }
}
// ***********
trait voler
{
 public $ailes;
 function vole()
 {
  echo "Je vole avec ". $this->ailes." ailes <br />"; 
 }
}
// ********** 
trait nager
{
 function nage()
 {
  echo "Moi je sais nager<br />"; 
 }
}
// ********** 
class cheval
{
use marcher,nager;
}
//
class oiseau 
{
 use marcher,voler;
}
// *********** 
class pegase
{
 use marcher,nager,voler;
}
// Un aigle
$aigle=new oiseau();
$aigle->pattes=2;
$aigle->ailes=2;
echo "<h3>L'aigle: </h3>";
$aigle->marche();
$aigle->vole(); 
// Un cheval
$dada=new cheval();
$dada->pattes=4;
echo "<h3>Le cheval : </h3>"; 
$dada->marche(); 
$dada->nage();
// Pégase, le cheval ailé (mythologie) 
$chevalaile=new pegase();
$chevalaile->ailes=2;
$chevalaile->pattes=4;
echo "<h3>Pégase : </h3>"; $chevalaile->marche();
$chevalaile->vole();
$chevalaile->nage();
?>