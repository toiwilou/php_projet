<?php
session_start();
if($_SESSION['acces']!="oui")
{
header("Location:exemple12.4.php");
}
else
{
  echo "<h4>Bonjour ". $_SESSION['nom']."</h4>";
  if(isset($_SESSION['php'])){$_SESSION['php']++;} 
  else {$_SESSION['php']=0;}
}
?>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>La page de PHP 5</title>
</head>
<body>
<h4> Accès réservé aux personnes autorisées</h4>
<p> Visiter les autres pages du site :
<?php 
echo "Page PHP vue ". $_SESSION['php']. " fois"; 
?>
<ul>
<li><a href="exemple12-4.php">Page d accueil </a></li>
<li><a href="pagehtml.php">Page HTML </a>
<?php
 if(isset($_SESSION['html']))echo " vue ". $_SESSION['html']. " fois"; 
?>
 </li>
</ul>
</p>
<h3>Contenu de la page PHP 7</h3>
</body>
</html>

