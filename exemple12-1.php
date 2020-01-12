<?php
// Cookie valable uniquement pour la session
setcookie("prenom","Jan");
// Cookie valable 24 heures
setcookie("nom","Geelsen",time()+86400);
// Ce cookie utilise tous les paramètres
setcookie("CB","5612 1234 5678 1234",time()+86400,"/client/paiement/ ","www.funhtml.com",TRUE);
?>



