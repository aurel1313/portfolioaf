<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des projets</title>
</head>
<body>
    <?php
        session_start();
        $dossier ='../../projets/';
                            $dossier1=opendir($dossier);
                            while($fichier =readdir($dossier1)){
                                if($fichier != '.' && $fichier != '..'){
                                    echo "<a href='../../projets/'".$fichier." download =".$fichier.">".$fichier."</a>";
                                }
                            }
                        
        
    ?>
    
</body>
</html>