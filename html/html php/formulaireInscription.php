<?php
session_start();
?>
<form method="post"action="formulaireInscription.php">
    nom d'utilisateur:<input type="text"pattern="[a-zA-Z0-9]+"min="2"name="identifiant"><br/>
    date de naissance:<input type="date"name="date">
    mot de passe:<input type="password"name="mdp">

    <input type="submit"name="valider">

<?php
    include "../connexion.php";
  $db = new PDO(DNS, LOGIN, PASSWORD, $options);
       $nom =$_POST["identifiant"];
        $date=$_POST["date"];
        $mdp=isset($_POST["mdp"]);
        $mdp= md5($mdp);
    if(isset($_POST["valider"])){

        $requete =$db->prepare("insert into pfaf_ADMIN(id,identifiant,date,motDepasse)VALUES('','".$nom."','".$date."','".$mdp."')");;
        $requete->execute();
        $requete2 =$db->prepare("select id,identifiant,date,motDepasse from pfaf_ADMIN order by id DESC");
        $requete2->execute();
        echo "<script>alert('vous etes inscrit');</script>";
      }
  ?>

</form>
<script>
    console.log(images);
  </script>
