<?php

    include "connexion.php";

    $req_genre = $bdd->prepare('SELECT films.titre, Genres.genres 
                            FROM films_has_Genres
                            JOIN Genres
	                            ON films_has_Genres.Genres_idGenres = Genres.idGenres
                            JOIN films
	                            ON films_has_Genres.films_idfilms = films.idfilms');

    $req_genre->execute();
    $genre = $req_genre->fetchAll();

    // RECUPERE LA LIGNE DE LA TABLE "FILM"
    // $numfilm = $films[0];
 
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
    for($g = 0; $g <= 41; $g++){
        print_r($genre[$g]);
    }
    ?>
    </p>
</body>
</html>