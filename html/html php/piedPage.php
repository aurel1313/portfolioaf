<div id="map">

    <h1 style="left:500px;text-decoration:underline;position:relative;color:green;">Localisation</h1>
    <a href="https://www.google.fr/maps/@46.2944857,-0.4502261,15z?hl=fr"><img src="../../images/map.PNG" alt="localisation" title ="localisation" id="localisation"/></a>
</div>
    <div id='index'>
    <p id="copyright">© 2019.Aurélien Fabre - 06 59 92 51 96 - aurelienfabre439@gmail.com</p>
    <a><img src="../../images/anglais.png" alt="vAnglais"title="anglais"style="position:relative;width:100px;left:0;"class="anglais"id="drapeaux"/></a>
</div>
   
   <?php

            $valider =$_POST['valider'];
            if(isset($valider)){
                             echo 'contact.php';
                            }

    ?>
    <script>
        var image =document.getElementById("drapeaux");
        image.onclick=function(){
            window.scrollTo(0,-500);
            document.getElementById("sidenav").style.width="250px";
            
           var interval= setInterval(() => {
               
               animate();
               
            }, 3000);
          
           function animate(){
                document.getElementById("fr").style.backgroundColor="red";
                document.getElementById("en").style.backgroundColor="red";
                setInterval(() => {
                    document.getElementById("fr").style.backgroundColor="#33FF3C";
                    document.getElementById("en").style.backgroundColor="#33FF3C";
                },5000);
               
           }
           setTimeout(() => {
               clearInterval(interval)
           }, 8000);
           
        }  
            
            
      
    </script>  
