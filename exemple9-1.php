<?php
//Constantes extérieures à la classe 
const VERSION=7;
const CODE="PHP";
class ma_classe
{
 //Définition d'une de constantes de classe 
 const PI=3.14;← 
 const LANGAGE=CODE.VERSION ;
 const PISUR2= self::PI / 2;
 //Définition des variables de la classe
 public $prop1;
 public $prop2 ="valeur";
 public $prop3 = array("valeur0","valeur1");
 //Initialisation interdite avec une fonction PHP
 //public $prop4= date(" d : m : Y"); Provoque une erreur fatale 
 //***********************************
 //Définition d'une fonction de la classe
 public function ma_fonction($param1,$paramN)
 {
 //Corps de la fonction 
 }
}
//fin de la classe 
?>



