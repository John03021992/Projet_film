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
