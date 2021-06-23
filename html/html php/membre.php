<?php
    session_start();
    if(isset($_SESSION['pseudo'])&&$_SESSION['nom']){
        echo '<hmtl>';
        echo'<head>';
        echo '<title>test des sessions</title>';
        echo'</head>';
        echo'<body>';
        echo "votre session est".$_SESSION['pseudo']."et".$_SESSION['nom'];
        echo '<form method ="post"action="membre.php">';
        echo '<input type="checkbox"style="appearance:none"name="deco";>';
        echo 'deconnexion<br/>';
        echo '<input type="submit"name="valider">';
        if(isset($_POST["deco"])==true){
            header("location:logout.php");
            session_unset();
            session_destroy();
        }
        
    }else{
        echo"erreur";
    }
    

?>