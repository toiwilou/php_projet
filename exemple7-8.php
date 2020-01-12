<!DOCTYPE html>
<html lang="fr">
 </head>
  <meta http-equiv="Content-Type" 
  content="text/html;charset=UTF-8" /> 
  <title>Produit d’un nombre indéterminé d\'arguments</title>
 </head>
 <body>
  <div>
<?php
// Utilisation de func_num_args() et func_get_arg() 
function prod1()
{
 $prod = 1;
 // Détermine le nombre d'arguments
 $n=func_num_args(); 
 for($i=0;$i<$n;$i++) 
 {
  echo func_get_arg($i); 
  ($i==$n-1)?print(" = "):print(" * "); 
  $prod *=func_get_arg($i);
 }
 return $prod; 
}
// Appels de la fonction prod1()
echo "Produit des nombres :", 
	prod1(5,6,7,8,11,15),"<br />"; 
$a=55;$b=22;$c=5;$d=9;
echo "Produit de ",prod1($a,$b,$c,$d),"<hr />";
//************************************ 
//Utilisation de func_get_args() seule 
//************************************ 
function prod2()
{
 $prod = 1;	
 // Récupération des paramètres dans un tableau
 $tabparam = func_get_args(); 
 foreach($tabparam as $cle=>$val)
 {
 // Présentation
 echo $val;
 ($cle==count($tabparam)-1)?print(" = "):print(" * ");
 // Calcul du produit
 $prod *=$val; 
 }
 return $prod; 
}
 echo "Produit des nombres :", prod2(5,6,7,8,11,15),"<br />"; 
 $a=55;$b=22;$c=5;$d=9;
 echo "Produit de ",prod2($a,$b,$c,$d),"<hr />";
?>
</div> 
</body> 
</html>