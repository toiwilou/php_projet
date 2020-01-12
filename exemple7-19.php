<?php
//enfant();//ERREUR FATALE
function parent()
{
 echo "Bonjour les enfants ! <br />";
 function enfant()
 {
  echo "Bonsoir papa !<br />"; 
 }
}
parent();
enfant();
enfant();
 
?>