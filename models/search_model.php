<?php

require('../_config/db.php');
$searchValue = $_POST['search'];

$reqSearch = $bdd->prepare("SELECT idfilms, films.titre, films.description, group_concat(Genres.genres) as genres, Annees.annee, Realisateurs.realisateurs, films.affiche
FROM films
INNER JOIN films_has_Genres
ON films_has_Genres.films_idfilms =films.idfilms
INNER JOIN Genres
ON films_has_Genres.Genres_idGenres = Genres.idGenres
JOIN Annees
ON films.Annees_idAnnee = Annees.idAnnee
JOIN Realisateurs
ON films.Realisateurs_idRealisateurs = Realisateurs.idRealisateurs
WHERE titre LIKE '%$searchValue%'
OR Realisateurs.realisateurs LIKE '%$searchValue%'
GROUP BY films.idfilms, films.titre,films.description");

$reqSearch->execute();

$searchInfo = $reqSearch->fetchAll(PDO::FETCH_NUM);

?>
