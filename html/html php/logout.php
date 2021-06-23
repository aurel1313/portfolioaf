<?php
  session_start();
  echo $_SESSION["identifiant"];
  session_destroy();
  if(session_destroy==true){
  echo "vous vous etes deconnectés de la session";
  $lien="<a href=../index/index.php>Retour vers l'accueil</a>";
  echo $lien;
  }else{
    echo "echec de la deconnexion";
  }
  
   
?>
