<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta http-equiv="Content-Type" 
  content="text/html;charset=UTF-8" /> 
  <title>Nombre de paramètres variable</title>
 </head>
 <body>
  <div>
<?php
function prod($tab) 
{
 $n=count($tab);
 echo "Il y a $n paramètres :"; 
 $prod = 1;
 foreach($tab as $val)
 {
  echo "$val, " ; $prod *=$val;
 }
 echo " le produit vaut "; 
 return $prod;
}
$tab1= range(1,10);
echo "Produit des nombres de 1 à 10 : ", 
prod($tab1),"<br />"; 
$tab2 = array(7,12,15,3,21);
echo "Produit des éléments : ", 
prod($tab2),"<br />";
?>
</div>
</body>
</html>
