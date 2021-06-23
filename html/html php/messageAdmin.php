<?php
echo "<head>";
  echo "<link href='javascript/jquery/jquery.js'rel='jquery'/>";
 echo "<link href='../../css/style.css'rel='stylesheet'/>";
 echo "<link href='javascript/javascript/script.js'rel ='js'/>";
echo "</head>";
  echo"<body style='overflow:scroll';>";
  include "../connexion.php";
  
$db = new PDO(DNS, LOGIN, PASSWORD, $options);
session_start();

 
$_SESSION['id']= 'fabrea';
//message a trier,prioriser et importance//
try{
    
   
    $pseudo =$_SESSION['id'];

    $nbRequete=$db->prepare("select count(message)as nb from pfaf_utilisateurs");
    $nbRequete->execute();
    $data=$nbRequete->fetch();
    echo "il y a".$data['nb']."messages";
    

   
  
    
  
  
  
    
   
   
  
  
   echo "<a href='../index/index.php'>retour a l'accueil</a>";
   $date=date("y-m-d H:i");
   echo $date;
   
  
  echo "<form method='post' name='form'action=''>";
  echo "<input type='submit'name='listes'value='tri'id='button'>";
  
  
  
  
  echo "<select name='tri'>";
  echo "<optgroup label='affichage des derniers messages'>";
  echo "<option value='5derniers'name='tri1'>les 5 derniers messages.</option>";
  
  
  echo"<option value='10derniers'name='tri2'>les 10 derniers messages
  
  </option>";

 
 
 
 echo"<option value ='30derniers'name='tri3'>les 30 derniers messages</option>";
  
  
  echo"<option value ='50derniers'name='tri4'>les 50 derniers messages</option>";
  
  
  echo"<option value='tous'name='tri5'>Tous les messages</option>";
  
  
  echo "<optgroup label='trier par'>";
  echo "<option value='croissant'>De A à Z</option>";
  echo "<option value ='decroissant'>De Z à A</option>";
  echo "<option value = 'date'>trier par date</option>";
  echo "<option value='nonLus'>trier par non lus</option>";
  echo "<option value='priorite'>trier par priorite</option>";

  echo"</select>";
  echo "</form>";
  
  



  
  $choix =$_POST['tri'];
  
  if(isset($_POST['listes'])&&isset($choix)){
    if($choix=='5derniers'){
        echo $_POST['tri'];
        $requete = $db->prepare("select id_utilisateurs,date,message,objet,securite from pfaf_utilisateurs  ORDER BY date DESC LIMIT 5");
        $requete->execute();
        echo "<table border='1'id='table'>";
        echo "<th id='th'>ID</th>";
        echo "<th id='th'>date</th>";
        echo "<th id='th'>statusLecture</th>";
        echo "<th id='th'>objet</th>";
        echo "<th id='th'>contenu</th>";
        echo "<th id='th'>priorite</th>";
        
       

        while($last=$requete->fetch()){
      
          echo "<tr id='tr'><td id='td'>".$last['id_utilisateurs']."</td>";
          echo "<td id='td'>".$last['date']."</td>";
          echo "<td id='td'>statusLecture</td>";
          echo "<td id='td'>".$last['objet']."</td>";
          echo "<td id='td'>".$last['message']."</td>";
          echo "<td id='td'>priorite</td></tr>";
         
          
          
            }
            
          }   
       if($choix=="10derniers"){
       
         $requete2=$db->prepare('select id_utilisateurs,date,message,objet,securite from pfaf_utilisateurs ORDER BY date DESC LIMIT 10');
         $requete2->execute();
         echo "<table border='1'id='table'>";
        echo "<th id='th'>ID</th>";
        echo "<th id='th'>date</th>";
        echo "<th id='th'>statusLecture</th>";
        echo "<th id='th'>objet</th>";
        echo "<th id='th'>contenu</th>";
        echo "<th id='th'>priorite</th>";

        while($tri=$requete2->fetch()){
        echo "<tr id='tr'><td id='td'>".$tri['id_utilisateurs']."</td>";
        echo "<td id='td'>".$tri['date']."</td>";
        echo "<td id='td'>statusLecture</td>";
        echo "<td id='td'>".$tri['objet']."</td>";
        echo "<td id='td'>".$tri['message']."</td>";
        echo "<td id='td'>priorite</td></tr>";
       

       }     


        
      }if($choix=='tous'){
        $insert = $db->prepare("select id_utilisateurs,date,message,objet,securite from pfaf_utilisateurs");
        $insert->execute();
        echo "<table border='1'id='table'>";
        echo "<th id='th'>ID</th>";
        echo "<th id='th'>date</th>";
        echo "<th id='th'>statusLecture</th>";
        echo "<th id='th'>objet</th>";
        echo "<th id='th'>contenu</th>";
        echo "<th id='th'>priorite</th>";
        while($contenu2=$insert->fetch()){
      
          echo "<tr id='tr'><td id='td'>".$contenu2['id_utilisateurs']."</td>";
          echo "<td id='td'>".$contenu2['date']."</td>";
          echo "<td id='td'>statusLecture</td>";
          echo "<td id='td'>".$contenu2['objet']."</td>";
          echo "<td id='td'>".$contenu2['message']."</td>";
          echo "<td id='td'>priorite</td></tr>";
          
          
            }

      
      }
      if($choix=='30derniers'){
        $insert2 = $db->prepare("select id_utilisateurs,date,message,objet,securite from pfaf_utilisateurs ORDER BY date LIMIT 30");
        $insert2->execute();
        echo "<table border='1'id='table'>";
        echo "<th id='th'>ID</th>";
        echo "<th id='th'>date</th>";
        echo "<th id='th'>statusLecture</th>";
        echo "<th id='th'>objet</th>";
        echo "<th id='th'>contenu</th>";
        echo "<th id='th'>priorite</th>";
        while($retry=$insert2->fetch()){
      
          echo "<tr id='tr'><td id='td'>".$retry['id_utilisateurs']."</td>";
          echo "<td id='td'>".$retry['date']."</td>";
          echo "<td id='td'>statusLecture</td>";
          echo "<td id='td'>".$retry['objet']."</td>";
          echo "<td id='td'>".$retry['message']."</td>";
          echo "<td id='td'>priorite</td></tr>";

      }
    }
    if($choix=='50derniers'){
      $insert3 = $db->prepare("select id_utilisateurs,date,message,objet,securite from pfaf_utilisateurs ORDER BY date LIMIT 50");
      $insert3->execute();
      echo "<table border='1'id='table'>";
      echo "<th id='th'>ID</th>";
      echo "<th id='th'>date</th>";
      echo "<th id='th'>statusLecture</th>";
      echo "<th id='th'>objet</th>";
      echo "<th id='th'>contenu</th>";
      echo "<th id='th'>priorite</th>";
      while($cinquante=$insert3->fetch()){
    
        echo "<tr id='tr'><td id='td'>".$cinquante['id_utilisateurs']."</td>";
        echo "<td id='td'>".$cinquante['date']."</td>";
        echo "<td id='td'>statusLecture</td>";
        echo "<td id='td'>".$cinquante['objet']."</td>";
        echo "<td id='td'style='overflow:hidden;'>".$cinquante['message']."</td>";
        echo "<td id='td'>priorite</td></tr>";
    } 
  } 
    if($choix=='nonLus'){
      
      $nonlus=$db->prepare("SELECT message,alerte FROM pfaf_utilisateurs WHERE alerte = 1 ORDER BY date ASC LIMIT 5");
      $nonlus->execute();

      $compteur = $db->prepare("SELECT COUNT(*)as count FROM pfaf_utilisateurs WHERE alerte='1'");
      $compteur->execute();

      $affichage = $compteur->fetch();
      $affichage2 =$affichage['count'];
      echo "il y a".$affichage2."messages non lus";
      
      
      echo "<table border='1'id='table'style='position:absolute;top:10vh;width:50vw;'>";
      echo "<th id='th'>contenu</th>";
      echo "<th id='th'>alerte</th>";
      echo "<th id='th'>date</th>";
      echo "<th id='th'>mail</th>";
      
      while($unread =$nonlus->fetch()){
        
        echo "<tr id='tr'><td id='tdmsg'style='font-weight:bold;position:absolute;width:25vw;'>".$unread['message']."</td><button id='modal'>afficher le contenu detaillé</button>";
        echo "<td id='td'style='position:relative;width:20vw;'>".$unread['alerte']."</td></tr>";
        echo "<td>".$unread["date"]."</td>";
        echo "<td>".$unread["email"]."</td></tr>";
        echo "</div>";
        //case a cocher considerer comme lu//
        
        
       
      }
      
      echo "<div id='popup'>";
        

      echo "</div>";

      echo"</table>";
      echo "<p style='position:absolute;top:8vh;font-weight:bold;right:47vw;'>lu</p>";
    }
    if($choix=='nonLus'){
      
      for($i = 0;$i<=$data['nb'];$i++){
       
        echo "<input type='checkbox'id='lu'name='check'value='lu'>";
        echo"<button type='submit'id='confirmer'value='confirmer'name='confirmer'>UPDATE</button>";
        

       
        $check =isset($_POST['check']);
       
          
            $update =$db->prepare("UPDATE pfaf_utilisateurs SET alerte = 0 WHERE alerte = 1");
            $update->execute();
          
          
        
       
       
        
        
      }
      
      echo "<div id='res'></div>";
      
      
      
      
      
     
      
     
     }
     
 }
 
 
 
 
 
  
 //echo $_SESSION['id'];

 

  
   
   
  
   
}catch(Exception $e){
  die('echec :'.$e->getMessage());
}
echo"<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";
echo "<script src='javascript/jquery/jquery.js'></script>";
echo "<script src ='javascript/javascript/script.js'></script>";
echo "</body>";
echo "</html>";

?>



  
   



