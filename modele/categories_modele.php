<?php

    require('../connexion.php');

    $catValue = $_POST['search'];
    $req_cat = $bdd->prepare("SELECT films.titre, Genres.genres
                                FROM films_has_Genres
                                JOIN Genres
	                                ON films_has_Genres.Genres_idGenres = Genres.idGenres
                                JOIN films
	                                ON films_has_Genres.films_idfilms = films.idfilms
                                WHERE Genres.genres='$catValue'");

    $req_Cat->execute();
    $catFilms = $req_Cat->fetchAll(PDO::FETCH_NUM);

?>
