<?php
session_start();
if(isset($_POST['login'])=="Machin" && $_POST['pass']=="4567")
{
  $_SESSION['acces']="oui";
  $_SESSION['nom']=$_POST['login'];
}
?>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>LES SESSIONS</title>
</head>
<body>
<div>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<fieldset>
<legend>Accès réservé aux personnes autorisées: Identifiez vous !</legend>
<label>Login : </label><input type="text" name="login" />
<label>Pass :  &nbsp;</label><input type="password" name="pass" />
<input type="submit" name="envoi" value="Entrer"/>
</fieldset>
</form>
Visiter les pages du site <br />
<ul>
<li><a href="pagehtml.php">Page HTML </a>
<? if(isset($_SESSION['html'])) echo " vue ". $_SESSION['html']. " fois"; ?>  
</li>
<li><a href="pagephp.php">Page PHP 7</a>
<? if(isset($_SESSION['php'])) echo " vue ". $_SESSION['php']. " fois"; ?>  
</li>
</ul>
</div>
</body>
</html>
