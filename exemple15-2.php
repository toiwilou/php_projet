<?php
function connexobjet($base,$param) 
{
 include_once($param.".inc.php");
 //echo HOST, USER, PASS, "<hr>";
 $idcom = new mysqli(HOST,USER,PASS,$base);
 if (!$idcom)
 {
  echo "<script type=text/javascript>";
  echo "alert('Connexion impossible à la base')</script>"; 
  exit();
 }
return $idcom;
}
?>

 
 
 
 
 
 