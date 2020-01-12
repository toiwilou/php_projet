<?php
class info
{
  //Propriété statique
  public static $bourse="Bourse de Paris";
  //Méthodes statiques
  public  static function getheure()
  {
    $heure=date("h : m : s");
    return $heure; 
  }
  public static function afficheinfo()
  {
    $texte=info::$bourse.", il est ".self::getheure();
	return $texte;
  }

  //public  function setbourse($val)
  //{
  //  info::$bourse=$val;
  //}
}
echo info::$bourse,"<br />";
echo info::getheure(),"<br />";
echo info::afficheinfo(),"<hr />";
//Création d'un objet info
$objet=new info();
$objet->bourse="New York";//8
//$objet->setbourse("New York");
echo "\$objet->bourse : ",$objet->bourse,"<hr />";
echo "\$objet->getheure():",$objet->getheure(),"<br />";
echo "\$objet->afficheinfo() : ",$objet->afficheinfo(),"<br />";
?>
