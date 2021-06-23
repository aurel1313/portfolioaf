<?php
  session_start();
  
  $_SESSION['identifiant']=$_POST['identifiant'];
  $_SESSION['mdp']=$_POST["mdp"];
  $_SESSION["date"]=$_POST["date"];
  if(isset($_SESSION['identifiant'])&&$_SESSION["mdp"]&&$_SESSION["date"]){
      echo '<hmtl>';
      echo'<head>';
      echo '<title>test des sessions</title>';
      echo'</head>';
      echo'<body>';
      echo "votre session est".$_SESSION['identifiant'];
      echo '<form method ="post"action="../index/index.php">';
      echo '<input type="checkbox"style="appearance:none"name="deco";>';
      echo 'deconnexion<br/>';
      echo '<input type="submit"name="valider">';
      if(isset($_POST["deco"])==true){

          session_unset();
          session_destroy();
      }

  }else{
      echo"erreur";
  }
  echo "<button type='button'id='accueil'>accueil</button>";
  echo $_SESSION["identifiant"];
?>
<script>

  var accueil = document.getElementById('accueil');
  accueil.onclick = function(){
    document.location.href="../index/index.php";
  }
</script>
