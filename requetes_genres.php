<?php

    include "connexion.php";

    $NomGenre = 'Drame';
    $req_genre = $bdd->prepare("SELECT films.titre, Genres.genres
                                FROM films_has_Genres
                                JOIN Genres
	                                ON films_has_Genres.Genres_idGenres = Genres.idGenres
                                JOIN films
	                                ON films_has_Genres.films_idfilms = films.idfilms
                                WHERE Genres.genres='$NomGenre'");

    $req_genre->execute();
    $genre = $req_genre->fetchAll(PDO::FETCH_NUM);

    print_r($genre);

?>
