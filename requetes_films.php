<?php

    include "connexion.php";

    $req_film = $bdd->prepare('SELECT films.titre, films.description, Annees.annee, Realisateurs.realisateurs 
                            FROM films 
                            JOIN Annees 
	                            ON films.Annees_idAnnee = Annees.idAnnee 
                            JOIN Realisateurs 
	                            ON films.Realisateurs_idRealisateurs = Realisateurs.idRealisateurs');

    $req_film->execute();
    $films = $req_film->fetchAll();
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php

        // for($f = 0; $f <= 41; $f++){
        //     print_r($films[$f]);
        // }

        

        ?>
    </p>
</body>
</html>