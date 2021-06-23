<html>
    <head>
        <title>Competences</title>
        <link href="../../css/style.css"rel="stylesheet"/>
        <meta charset ="utf-8"/>
    <head>    
<body>    
    <div class="competences">
			<h1 class="competences2" id="projet">projets</h1><br/>
            <div id="lien1">
                <a href="projets/vba.zip"><img src="images/excel.png" alt="logo" class="img"></a><br/>
                <p class="projet1">Projet excel/VBA</p>

            </div>
            <div id="lien2">
                <a href="projets/web.zip"><img src="images/web.jpeg" alt="logo2" title="web developpement" class="img2"></a><br/>
                <p class="projet2">Projet web</p>

            </div>
            <div id='upload'>
                <h2>Plus de projets</h2>
                <form method='post'action =""enctype='multipart/form-data'accept="application/zip">
                    <input type='file'name='upload'>
                    <input type="hidden" name="MAX_FILE_SIZE" value="200000">
                    <input type='submit'name='submit'>
                </form>
                <?php
                
                    $message ="";
                   if(isset($_POST['submit'])){
                       $errors = array();
                        $message ="nom du fichier".$_FILES['upload']['name']."<br>";
                        $message.="nom temporaire du fichier".$_FILES['upload']['tmp_name']."<br>";
                        $message.="nom du fichier".$_FILES['upload']['type']."<br>";
                        $message.="taille du fichier".$_FILES['upload']['size'];
                        $extension=array("application/zip");
                        //$file_ext=strtolower(end(explode('.',$_FILES['upload']['name'])));
                        move_uploaded_file($_FILES['upload']['tmp_name'],"projets/".$_FILES['upload']['name']);
                   }
                   
                   

                ?>
                <div class ='projetsUpload'>
                    <form method ='post' action ='html/html php/projets.php'>
                        <input type='submit'value ='projets'name='projets'>
                    </form>
                    
                </div>
            </div>
    </div>        



        
        
			<div class="qualite"  id="#competences">
					<h1 id="competences">Competences</h1>
					<a href="./../cv/CV.pdf" class="cv">telecharger mon CV</a>
			</div>
			<div class="stat">
				<h1 id="progression">Language de Programmation</h1>
				<ul>
                    <li style="color:#33FF3C;"><progress id="progression1" value="80" max="100">80%</progress>80%<span class="graph1">HTML/CSS</span></li>
						<li style="color:#33FF3C;"><progress id="progression2" value="60" max="100">60%</progress>60%<span class="graph2">PHP</span></li>
						<li style="color:#33FF3C;"><progress id="progression3" value="70" max="100">70%</progress>70%<span class="graph3">SQL</span></li>
                        <li style="color:#33FF3C;"><progress id="progression4"value="20"max="100"></progress>20%<span class="graph4">JAVASCRIPT/JQUERY</span></li>
                </ul>
            </div>
            <div id="logiciels">
            <h1 id="log">Logiciels</h1>
                <ul>
                    <li style="color:#33FF3C;"><progress class="logiciel1" value="70"  max="100"></progress>70%<span class="texte"id="texte1">traitements de textes</span></li>
                    <li style="color:#33FF3C;"><progress class="logiciel2" value="80" max="100"></progress>80%<span class="texte"id="texte2">editeurs de textes</span></li>
                    <li style="color:#33FF3C;"><progress class="logiciel3" value="90" max="100"></progress>90%<span class="texte"id="texte3">serveurs web</span></li>
                </ul>
            </div>    
    </body>
   </html>                 
             
