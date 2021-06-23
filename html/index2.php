<!DOCTYPE html>
<html lang="fr">
	<head>
			<title>My Portfolio</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="./../css/style.css">
            <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

	</head>
    <body class="corps">
    <span id="revenir"></span>



	<header class="header">
		<div id="section"style="position:absolute;width:1650px;">
		<p id="titre">Aurélien Fabre <br/>student at BTS SIO in Bressuire</p>

		</div>
	</header>
		<div class="head">
			<h1 class="titre1">welcome to my portfolio</h1>
		</div>
		<div id="nav">
			<nav id="navigation">
				<a href="#">home</a>
				<a href="#">Presentation</a>
				<a href="#competences">skills</a>
				<a href="#formations">training</a>
				<a href="#projet">Projects</a>
				<a href="#loisir" id="loisirs">center of interest</a>
                <a href="#contact1" id="contact">Contact</a>
            </nav>
		</div>
		<div class="competences">
			<h1 class="competences2" id="projet">Projects</h1><br/>
            <div id="lien1" style="position:absolute;left:400px;">
                <a href="./../projets/vba.zip"><img src="./../images/excel.png" alt="logo" class="img"></a><br/>
                <p class="projet1">Project excel/VBA</p>

            </div>
            <div id="lien2" style="position:relative;left:600px;">
                <a href="./../projets/web.zip"><img src="./../images/web.jpeg" alt="logo2" title="web developpement" class="img2"></a><br/>
                <p class="projet2">Project web</p>

            </div>
        


		<hr class="delimitation"/>
			<div class="qualite" style="position:absolute;top:320px;left:450px;" id="#competences">
					<h1 id="competences">Skills</h1>
					<a href="./../cv/CV.pdf" class="cv">download my CV</a>
			</div>
			<div class="stat" style="margin-top:-70px;">
				<h1>programming language</h1>
				<ul>
                    <li style="color:red;"><progress id="progression1" value="80" max="100">80%</progress>80%<span class="graph1">HTML/CSS</span></li>
						<li style="color:red;"><progress id="progression2" value="60" max="100">60%</progress>60%<span class="graph2">PHP</span></li>
						<li style="color:red;"><progress id="progression3" value="70" max="100">70%</progress>70%<span class="graph3">SQL</span></li>

                </ul>
            </div>
            <div id="logiciels" style="margin-top:-70px;">
            <h1>software</h1>
                <ul>
                    <li style="color:red;"><progress class="logiciel1" value="70"  max="100"></progress><span class="texte">word processor</span></li>
                    <li style="color:red;"><progress class="logiciel2" value="80" max="100"></progress><span class="texte">text editor</span></li>
                    <li style="color:red;"><progress class="logiciel3" value="50" max="100"></progress><span class="texte">Web serveur</span></li>
                </ul>

							<div id="formations"style="position:relative;left:0px;">
								<h1>Training</h1>
								<ol>
										<li style="color:red;"><strong>since septembre 2019:</strong><a href="http://saintjo.org/campus/bts-sio/">BTS SIO à Bressuire</a></li>
										<li style ="color:red;"><strong>2018-2019:</strong><a href="https://iutp.univ-poitiers.fr/stid/DUT">statistiques et informatiques decisionelles a Niort</a></li>
										<li style="color:red;"><strong>2014-2018:</strong><a href="http://www.lycee-jeanmace.fr/">lycée Jean Macé à Niort</a></li>
								</ol>
							</div>
            </div>

	<div class="footer"style="width:1650px;">
			<footer class="formulaireContact">
				<h1 id="contact1" class="contact">Contact</h1>
					<form class="formulaire" method="post" action="index.html">
						<label class="label">enter your name:</label>
				  	<input type="text" required placeholder="entrez votre nom" name="nom" class="nom"/><br>
					 	<label class="prenom">enter your firstname:</label>
					 	<input type="text" name="prenom" required placeholder="entrez votre prenom" class="prenom"/><br/>
					 	<label class="label2">enter your email:</label>
					 	<input type="email" name="email" class="email" required placeholder="entrez votre email"/>
						<p class="avis">enter your posts:</p><textarea id="message" rows="5" cols="30">Entrez votre message</textarea>

                        <label class="objet">Object:</label>

                        <select name ="ListeObjet" id="liste1">
                            <option value="1"  class="pro">Professional</option>
                            <option value ="2"  class="perso">Personal</option>
                            <option value="3" class="other">Other</option>
                        </select>

                        <select name="Professionnel" id="liste2">
                            <option value ="1" >Questions</option>
                            <option value="2" >Skills</option>
                            <option value="3">Claim</option>

                        </select>
				        <select name="security" style="position:absolute;left:0;top:120px;">
				  <optgroup	label="securité">
                            <option value="1">what is the name of your animal</option>
                            <option value ="2">what is your birth year?</option>
                            <option value="3">what is your birthplace?</option>
                            <option value="4"></option>
				   </optgroup>

                        </select>
				        <input type="text" name="reponse" value="reponse" id ="reponse" style="position:absolute;left:260px;top:125px;"/>

						<input type="submit" class="submit"/>
						<input type="reset" class="reset"/>


				</form>
        <div class="back">
						<div id="background"></div>
						<div id="foreground"><a href="#">return higher</a></div>
				</div>
            </footer>
        </div>
            <div>
                <h1 class="none" style="color:#33FF3C;">center of interest</h1>
            </div>
            <div class="centreinteret" style ="position:absolute;bottom:-400px; border:1px solid #33FF3C;height:300px;" id="loisir">
                <h1 class="loisirs" style="color:#33FF3C;">center of interest</h1>
                    <ul style="position:relative;left:-10px;">
                        <li style="position:absolute;margin-top:50px;top:-50px;left:1070px;margin-left:30px;" class="li1"><p style="position:relative;;z-index:2;left:-70px;top:0px;color:white;" class="texte">video-games</p><img
                        src="./../images/jeuxvideo.jpeg" title="jeuxvideo"  class="image1" style="width:200px;"/></li>
                        <li style="position:relative;right:-550px;margin-left:30px;" class="li2"><img src="./../images/football.jpeg" title="football" style="width:200px;"  class="image2"/><p style ="position:relative;left:0px;top:-140px;z-index:2;">Football</p></li>
                        <li style="position:relative;margin-left:-10px;margin-right:30px;" class="li3"><p style="position:absolute;left:10px;top:-80px;z-index:2;" class="paragraphe3">badminton</p><img src="./../images/badminton.jpeg" alt="badminton" class="image3" style="width:200px;" /></li>
                    </ul>
            </div>
            <div style="position:relative;bottom:-1100px;border:solid 1px #33FF3C;width:500px;height:500px;" id="contactPerso">
							<h1 style="text-decoration:underline;text-align:center;">personal contact</h1>
								<output style="position:absolute;left:10px;border:1px solid #33FF3C;font-weight:bold;top:110px;background:white;">name</output><output style="position:absolute;left:70px;top:110px;border:1px solid #33FF3C;background:white;">Fabre</output>
								<output style="position:absolute;bottom:300px;left:10px;border:1px solid #33FF3C;font-weight:bold;background:white;">first-name</output><output style="position:absolute;left:70px;border: 1px solid #33FF3C;background:white;top:180px;margin-left:10px;">Aurélien</output>
								<output style="position:absolute;top:230px;left:0px;border:1px solid #33FF3C;font-weight:bold;background:white;margin-top:30px;">Email</output><output style="position:absolute;left:70px;top:260px;border:1px solid #33FF3C;background:white;"><a href ="mailto:aurelienfabre439@gmail.com"></a>aurelienfabre439@gmail.com</output>
								<output style="position:absolute;top:300px;border:1px solid #33FF3C;left:10px;font-weight:bold;background:white;margin-top:50px;">Phone</output><output style ="position:absolute;left:100px;top:350px;border:1px solid #33FF3C;background:white;">06 59 92 51 96</output>
						</div>
						<div id ="map" style="position:absolute;top:1840px;left:600px;border:1px solid #33FF3C;height:500px;width:600px">
							<h1 style="text-align:center;text-decoration:underline;">Location</h1>
							<a href="https://www.google.fr/maps/@46.2944857,-0.4502261,15z?hl=fr"><img src="./../images/map.png" alt="localisation" title ="localisation" style="position:absolute;left:50px;width:400px;"/></a>
						</div>
						<div style="position:absolute;top:2450px;border:1px solid #33FF3C;width:1650px;height:100px;">
								<p style="position:absolute;top:30px;color:black;left:230px;">© 2019.Aurélien Fabre - +33 6 59 92 51 96 - aurelienfabre439@gmail.com</p>
                                <a href="./index.html"><img src="./../images/france.png"alt="Vfrance"title="france"style="position:absolute;width:100px;right:0;"/></a>
                            
						</div>
				</body>
		</html>
