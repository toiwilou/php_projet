<?php
class ville{
	public $nom;
	public $depart;
	function getinfo(){
		$text="La ville $this->nom est  departement $this->depart <br />";
		return $text;
	} 
}
$v1 = new ville();
$v2 = new ville();
$v1->nom="Nantes";
$v1->depart="Loire_Atlantique";
$v2->nom="Lyon";
$v2->depart="Rhone";
echo $v1->getinfo();
echo $v2->getinfo();
?>