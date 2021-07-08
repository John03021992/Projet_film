<?php

<<<<<<< HEAD
    require('../_config/db.php');

    $req_film = $bdd->prepare('SELECT films.titre, films.description, group_concat(Genres.genres) as genres, Annees.annee, Realisateurs.realisateurs, films.affiche
                                FROM films
                                INNER JOIN films_has_Genres
                                    ON films_has_Genres.films_idfilms =films.idfilms
                                INNER JOIN Genres
                                    ON films_has_Genres.Genres_idGenres = Genres.idGenres
                                JOIN Annees
                                    ON films.Annees_idAnnee = Annees.idAnnee
                                JOIN Realisateurs
                                    ON films.Realisateurs_idRealisateurs = Realisateurs.idRealisateurs
                                GROUP BY films.idfilms, films.titre,films.description');

    $req_film->execute();

    $films = $req_film->fetchAll(PDO::FETCH_ASSOC);

?>
=======
require('../_config/db.php');

$req_film = $bdd->prepare('SELECT films.titre, films.description, group_concat(Genres.genres) as genres, Annees.annee, Realisateurs.realisateurs, films.affiche
FROM films
INNER JOIN films_has_Genres
ON films_has_Genres.films_idfilms =films.idfilms
INNER JOIN Genres
ON films_has_Genres.Genres_idGenres = Genres.idGenres
JOIN Annees
ON films.Annees_idAnnee = Annees.idAnnee
JOIN Realisateurs
ON films.Realisateurs_idRealisateurs = Realisateurs.idRealisateurs
GROUP BY films.idfilms, films.titre,films.description');

$req_film->execute();

$films = $req_film->fetchAll(PDO::FETCH_ASSOC);

?>
>>>>>>> 9e788d670125ed6bab01dbf65114e590cb4b5237
