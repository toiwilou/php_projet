 <?php 
 // Création d'un trait
 trait nom_trait{
	 public $mapropriete;
	 function mamethode(){
		 
		 echo "ma méthode";
	 }
 }
 //Utilisation par une classe
 class ma_classe{
	 use nom_trait;
 }
 ?>
 
  



 
 
 