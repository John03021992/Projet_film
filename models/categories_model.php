<?php

require('../_config/db.php');

function getFilmByCat($catValue, $bdd){

$req_Cat = $bdd->prepare("SELECT idfilms, films.titre, Genres.genres, films.description, Annees.annee, Realisateurs.realisateurs, films.affiche
FROM films_has_Genres
JOIN Genres
ON films_has_Genres.Genres_idGenres = Genres.idGenres
JOIN films
ON films_has_Genres.films_idfilms = films.idfilms
JOIN Annees
ON films.Annees_idAnnee = Annees.idAnnee
JOIN Realisateurs
ON films.Realisateurs_idRealisateurs = Realisateurs.idRealisateurs
WHERE Genres.genres='".$catValue."'");

$req_Cat->execute();
$catFilms = $req_Cat->fetchAll(PDO::FETCH_NUM);

return $catFilms;
}

?>