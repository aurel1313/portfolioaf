<?php
session_start();
?>
<html>
    <head>
        <title>Contact</title>
        <meta charset="utf-8">
    </head>
<body>
<table border="1">
<th>id</th>
<th>prenom</th>
<th>nom</th>
<th>email</th>
<th>message</th>
<?php
    include '../connexion.php';


    try{
			$db = new PDO(DNS, LOGIN, PASSWORD, $options);
            


        while($row=$requete2->fetch()){
          echo "<tr><td>".$row["id_utilisateurs"]."</td>";
           echo "<td>".$row["prenom"]."</td>";
        }
		   }catch(PDOException $e){
			die('echec :'.$e->getMessage());
		}

?>
    <form method ="post"action ="contact.php">
        <input type ="submit" name="effacer"value="vider">

    </form>
    <?php
      if(isset($_POST["effacer"])){
        $effacer=$db->prepare("delete from pfaf_utilisateurs");
        $effacer->execute();
      }
    ?>

</table>
<a href="../index/index.php">accueil</a>

 <script>

     function accueil(){
         var lien = ""
     }
</script>
    <?php
        if(isset($pseudo)&&isset($prenom)&&isset($nom)&&isset($email)&&isset($message)){

            $_SESSION['pseudo']=$pseudo;
            $_SESSION['nom']=$nom;
            header('location:membre.php');
        }
    ?>
</body>

</html>
