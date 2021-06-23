
<!doctype html>
<html>
	<head>
			<title>Mon Portfolio</title>
            <meta charset="utf-8">
            <link href="css/style.css"rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
            <meta content="width=device-width, initial-scale=1" name="viewport" />

            
            
	</head>
    <body class="corps"id='body'>
    <span id="revenir"></span>

    <?php
      include("html/html php/header.php");
      
    ?>




		<div class="head">
			<h1 class="titre1"id="bienvenue">Bienvenue sur mon portfolio</h1>
		</div>
        <?php
            include("html/html php/menu.php");
        ?>
	   <?php
            include("html/html php/loisirs.php");
            include("html/html php/competences.php");
            include("html/html php/formations.php");
            
            include("html/html php/footerContact.php");
            include("html/html php/contactPerso.php");
            
            

        ?>
		<?php
            $nomPage = 'index.php';
            if(isset($_GET["page"])){
                if(file_exists(addslashes('php/'.$_GET['page']))){
                    $nomPage=addslashes('php/'.$_GET['page']);
                }
            }

        ?>







            <?php
            include("html/html php/piedPage.php");
            
            $identifiant =$_SESSION['identifiant'];
            echo "<div id='error'>";
            set_error_handler(function($niveau,$message,$fichier,$ligne){
                echo "<p id='error1'>erreur:".$message."</p><br/>";
                echo "<p id='error2'>niveau de lerreur:".$niveau."</p><br/>";
            });
            echo "</div>";
            $langs = array('FR','EN');

        ?>
        <button type="button"id="connexion"value="connexion">Connexion</button>
        <button type="button"id="inscription"value="inscription">Inscription</button>
        <button type='button'id='deconnexion'value ='deconnexion'>Deconnexion</button>
        
						
		<div id="sidenav"class="sidenav">
            <a href="javascript:void(0)"id="closebtn">&times;</a>
            <button type ='button'id='wallpapers'>change wallpapers</button>
            <button id="window">open window</button>
            <div id="internationalisation">
                <input type="button" id="fr"class="translate1"onclick="$.MultiLanguage('../multilingue/lang.json','fr')"value="francais"/>
                <input type="button" id="en"class="translate"onclick="$.MultiLanguage('../multilingue/lang.json','en')"value="anglais"/>
            </div>
              
            
        </div>
        <span id="span">&#9776;</span>
       
       
        
        </div>
        	
         
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
         <script src ="./jquery/jquery.MultiLanguage.min.js"></script>
         <script>
             //code Jquery//
          
            $(document).ready(function(){
                $.MultiLanguage("../multilingue/lang.json");
            })
         </script> 
         <script>

         </script>   
         
        <script>
                //code Javascript//
                var langue =document.getElementById("a");
                console.log(langue);
                
                var element=document.getElementById("connexion");
                   element.onclick=function(){
                       window.location.href="../html php/AdminInscrit.php";
					}

                   var inscription =document.getElementById("inscription");
                   inscription.onclick=function(){
                        window.location.href="../html php/formulaireInscription.php";
                    }
                    
                

                
                
                  var element = document.getElementById('deconnexion');
                   element.onclick=function(){
                     alert('test');
                        
                } 
                var change = document.getElementById("wallpapers");
                var i = 0;
                var images =[];
                images[0]="url(../../images/background.jpg)";
                images[1]="url(../../images/background2.jpg)";
                images[2]="url(../../images/aurore.jpg)";
                images[3]="url(../../images/background3.jpg)";
                
                /*change.addEventListener('click',function(){
                    
                    var body =document.getElementById("body");
                    body.style.backgroundImage=images[i];
                    
                    
                     if(i < images.length -1){
                        i++;
                    }
                    else{
                        i =0;
                    }
                    
                 if(images[i]==images[1]){
                        var header = document.getElementById('section');
                        console.log(header);
                        header.style.backgroundColor="#00BFFF";
                        header.style.opacity ="0.75";
                        header.style.backgroundImage="none";
                        
                        var nav =document.getElementById("nav");
                        nav.style.backgroundImage="none";
                        nav.style.backgroundColor ="#00BFFF";
                        nav.style.opacity ="0.5";
                      

                       var child =document.getElementById("navigation").childNodes.length;
                       var child1= document.getElementById("navigation").childNodes;
                        var menu = document.querySelector("#navigation");
                       var nodes= menu.childNodes;
                       console.log(nodes);
                       
                       var button1 = document.getElementById("connexion");
                       var button2 =document.getElementById("inscription");
                       var button3 =document.getElementById("deconnexion");

                       button1.style.backgroundColor="white";
                       button1.style.color="#00D6F3";

                       button2.style.backgroundColor="white";
                       button2.style.color="#00D6F3";

                       button3.style.backgroundColor="white";
                       button3.style.color="#00D6F3";


                }
                    
                       
                   
                    
                        
                
                   
                
                });*/
               
               
                var nav =document.getElementById("span");
                console.log(nav);
                nav.onclick=function(){
                    document.getElementById("sidenav").style.width ="250px";
                }
                var a =document.getElementById("closebtn");
                a.onclick=function(){
                    document.getElementById("sidenav").style.width="0";
                }
                
                var button = document.getElementById("window");
                var content;
               
                
                button.addEventListener('click',function(){
                   var windows= window.open("","modal","toolbar=no,scrollbars=yes,resizable=no,width=200,height=150");
                   windows.document.open();
                   windows.document.write("test");
                   console.log(windows);
                   content = document.getElementById("error1").innerHTML;
                content2 =document.getElementById("error2").innerHTML;
                   windows.document.write(content);
                   windows.document.write(content2);
                   windows.document.close()

                })
                //document.getElementById("error1").style.visibility="hidden";
                //document.getElementById("error2").style.visibility="hidden";
                
             //definine langue//
             
               
              
              
        
    </script>
    </body>
</html>
