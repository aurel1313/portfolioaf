<?php
  echo "<html>";
    echo "<head>";
        echo "<link href='../../css/style.css'rel ='stylesheet'>";
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">';
        echo "<link rel='shortcut icon'href='../../images/favicon.ico'type='image/png'>";
        echo"<meta charset ='utf-8'>";
        echo "<title>Admin</title>";
     echo "</head>";
  echo "<body id='corpsAdm'>";  
  echo "<h1 id='h1'>Connexion de l'Administrateur</h1>";    
  session_start();
  $_SESSION['identifiant']=$_POST['identifiant'];
    echo "<div id='form'>";
      echo "<form method='post'action='AdminInscrit.php'id='submit'>";
      echo"<label for='identifiant'id='label1'>entrez votre identifiant</label>";
      echo"<input type='text'required placeholder='entrez votre identifiant'name='identifiant'id='id'><br/>";
      echo "<label for='mot de passe'id='lb'>Entrez votre mot de passe</label>";
      echo "<input type='password'required placeholder ='entrez votre mot de passe'name='motDePasse'id='mdp'></br>";
      echo "<input type='submit'name='valider'value='ok' id='input'>";
      echo "</form>";
    echo "</div>";  
    $id = $_POST["identifiant"];
    $motPasse = $_POST["motDePasse"];
    include "../connexion.php";
  $db = new PDO(DNS, LOGIN, PASSWORD, $options);
  try{

echo"<p style='color:red;'>";

  $identification=$db->query("select count(*)as nb from pfaf_ADMIN");
  $req = ($identification) or die('Erreur SQL <br> Vérifier votre table');
  $data =$identification->fetch();
  echo $data['nb']."<br/>";
  $identification2 = $db->prepare("select * FROM pfaf_ADMIN WHERE identifiant ='$id'");
  $identification2->execute();
  $reponse = $identification2->fetch();

  if(isset($_POST['valider'])){
    if($reponse["motDepasse"]==md5($motPasse)&&$reponse["identifiant"]==$id){
      echo "<h1 id='msg'>Acceder aux messages</h1>";
      echo "Bienvenue à l'administrateur du site<br/>";
    echo "<div id='formulaireAdmin'>"; 
        echo "<form method='post' action='#'id='formAdmin'>";
        echo "<label for='choix'>afficher la table?</label>";
        echo "<select name='choix'id='choix'>";
        echo "<optgroup label='choix'>";
        echo "<option value='1'name='oui'>oui</option>";
        echo "<option value='2'name='non'>non</option>";
        echo "</optgroup>";
        echo "<input type='button'name='confirmer'id='confirmer'value='confirmer'>";
        echo "</form>";
    echo "</div>";    

      echo '<script>var form = document.getElementById("form");form.style.display="none";</script>';



    }else{
      echo "vous n'etes pas admin";

    }
      
      if(isset($_POST['table'])&&$_POST['choix2']=='oui'){
        header("location:messageAdmin.php");
      }else if(isset($_POST['table'])&&$_POST['choix2']=='non'){
        header("location:AdminInscrit.php");// probleme a regler//
      }


    }
    
    


}catch(Exception $e){
      die('echec :'.$e->getMessage());
  }

  echo '<a href="../index/index.php">
   <svg width="3em" height="5em" viewBox="0 0 16 16" class="bi bi-house" fill="red" xmlns="http://www.w3.org/2000/svg"id="icon">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></a>';
 

?>
<script type='text/javascript'>
    var afficher = document.getElementById("form");
    var ok = document.getElementById('input');
    var submit = document.getElementById("submit")
    
    
    
      
    
      
  
    var confirmer = document.getElementById("confirmer");
    var select = document.getElementById("choix");
    var value= select.options[select.selectedIndex].text;
    confirmer.onclick =function(){
      var index =document.getElementById("choix").selectedIndex;
        
       if(index==0){
         window.location.href ="messageAdmin.php";
       } 
       else if(index==1){
         if(confirm("vous ne serez pas rediriger vers la page"));
       }

      }
      
    
    
    
    
</script>

