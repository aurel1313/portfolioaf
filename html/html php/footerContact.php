	
	<head>
		
	</head>
<html>		
<body>
	<div class="footer">
			<footer class="formulaireContact">
				<h1 id="contact1" class="contact">Contact</h1>
					<form class="formulaire" method="post" action="#">
                        <label class="pseudonyme">Pseudo:</label>
                        <input type="text"name="pseudo"id='pseudo'required placeholder="entrez votre pseudo">
						<label class="label">Entrez votre nom:</label>
				  	<input type="text"  placeholder="entrez votre nom" name="nom" class="nom"/><br>
					 	<label class="prenom">entrez votre prenom:</label>
					 	<input type="text" name="prenom" placeholder="entrez votre prenom" class="prenom"/><br/>
					 	<label class="label2">Entrez votre email:</label>
					 	<input type="email" name="email" class="email" placeholder="entrez votre email"/>
						 
						<p class="avis">Entrez votre message:</p><textarea id="message" rows="5" cols="30"name="message"autogrow>Entrez votre message</textarea>


                        <label class="objet">Objet:</label>

                        <select name ="ListeObjet" id="liste1">
                            <option value="professionnel"  class="pro">Professionnel</option>
                            <option value ="personnel"  class="perso">Personnel</option>
                            <option value="autres"  class="other">Autre</option>
                        </select>

                        <select name="Professionnel" id="liste2">
                            <option value ="questions" >Questions</option>
                            <option value="competences" >Competences</option>
                            <option value="reclamations">Reclamations</option>

                        </select>
							<select name="security"id='security'>
							<optgroup	label="securité">
                            <option value="quelle est le nom de ton animal?">Quelle est le nom de ton animal ?</option>
                            <option value ="quelle est ton annee de naissance">Quelle est ton année de naissance?</option>
                            <option value="lieu de naissance">quelle est ton lieu de naissance?</option>
                            <option value="film prefere">quelle est ton film préféré</option>
												</optgroup>

                        </select>
												<input type="text" name="reponse" value="reponse" id ="reponse"/>

						<input type="submit" name="valider" class="submit">
						<input type="reset" class="reset"/>
						<?php
									include '../connexion.php';
									$db = new PDO(DNS, LOGIN, PASSWORD, $options);
									
						try{
									if(isset($_POST['valider'])){
										
										$pseudo =$_POST["pseudo"];
										$prenom = $_POST["prenom"];
										$nom = $_POST["nom"];
										$email =$_POST["email"];
										$message=$_POST["message"];
										$objet =$_POST['ListeObjet'];
										$securite =$_POST['security'];
										$date=date("y-m-d H:i");
										echo $date;
										$requete=$db->prepare("insert into pfaf_utilisateurs(id_utilisateurs,pseudo,prenom,nom,email,message,date,objet,securite)VALUES('','".$pseudo."','".$prenom."','".$nom."','".$email."','".$message."','".$date."','".$objet."','".$securite."')");
										$requete->execute();
										$requete2=$db->prepare("select id_utilisateurs, prenom from pfaf_utilisateurs");
										$requete2->execute();
										$_SESSION['pseudo']=$pseudo;
										
										
										

										}
									if(isset($_POST['valider'])&&isset($_POST['message'])){
										$update =$db->prepare("UPDATE pfaf_utilisateurs SET alerte=1 WHERE message='".$_POST["message"]."' ");
										$update->execute();
									}	
										
										
								
							}catch(Exception $e){
								die('echec :'.$e->getMessage());
							}	
                        ?>


				</form>
        <div class="back">
						<div id="background"></div>
						<div id="foreground"><a href="#">Revenir plus haut</a></div>
				</div>
            </footer>
		</div>
</body>
</html>
