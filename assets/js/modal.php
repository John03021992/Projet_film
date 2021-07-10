<?php
require('../../_config/db.php');
$idcard = $_GET['id'];
echo $idcard;

$req_film = $bdd->prepare('SELECT idfilms, films.titre, films.description, group_concat(Genres.genres) as genres, Annees.annee, Realisateurs.realisateurs, films.affiche
FROM films
INNER JOIN films_has_Genres
ON films_has_Genres.films_idfilms =films.idfilms
INNER JOIN Genres
ON films_has_Genres.Genres_idGenres = Genres.idGenres
JOIN Annees
ON films.Annees_idAnnee = Annees.idAnnee
JOIN Realisateurs
ON films.Realisateurs_idRealisateurs = Realisateurs.idRealisateurs
WHERE idfilms=:id
GROUP BY films.idfilms, films.titre,films.description');

$req_film->execute(['id' => $idcard]);

$films = $req_film->fetch(PDO::FETCH_OBJ);
echo $films -> idfilms;
?>

