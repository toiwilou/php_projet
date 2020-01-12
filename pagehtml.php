<?php
session_start();
if($_SESSION['acces']!="oui")
{
header("Location:exemple12-4.php");
}
else
{
  echo "<h4>Bonjour ". $_SESSION['nom']."</h4>";
  if(isset($_SESSION['html'])){$_SESSION['html']++;} 
  else {$_SESSION['html']=0;}
}
?>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>La page du HTML.</title>
</head>
<body>
<h4> Accès réservé aux personnes autorisées</h4>
<p> Visiter les autres pages du site :
<?php 
 echo "Page HTML vue ". $_SESSION['html']. " fois"; 
?>
<ul>
<li><a href="exemple12-4.php">Page d accueil </a>  </li>
<li><a href="pagephp.php">Page PHP 7</a>
<?php
if(isset($_SESSION['php']))echo " vue ". $_SESSION['php']. " fois"; 
?>
</li>
</ul>
<h3>Contenu de la page HTML</h3>
</body>
</html>
