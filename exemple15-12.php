<?php
include('exemple15-2.php');
$idcom=connexobjet('magasin','myparam');
$idcom->autocommit(FALSE);
$requete1="INSERT INTO article VALUES ('BZERT', 'Lecteur MP4', 59.50,'divers');";
$requete2="INSERT INTO articles VALUES ('AQSDFG', 'Bridge Samsung 10 Mo', 358.90,'photo');";
//pour empêcher la validation écrire "articles" au lieu de "article" comme nom de table
//*************************************************************************************
$idcom->query($requete1);
$nb=$idcom->affected_rows;
echo "LIGNES INSEREES",$nb,"<hr />";
$idcom->query($requete2);
$nb+=$idcom->affected_rows;
if($nb==2)
{
  $idcom->commit();
  echo $nb," lignes insérées";
}
else
{
  $idcom->rollback();
  echo "transaction annulée";
}
?>
