<?php

    include "connexion.php";

    $req_film = $bdd->prepare('SELECT films.titre, films.description, group_concat(Genres.genres) as genres, Annees.annee, Realisateurs.realisateurs
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
    $films = $req_film->fetchAll(PDO::FETCH_NUM);
    
    // for($f = 0; $f <= 41; $f++){
    //         echo JSON_encode($films[$f]);
    //     }

      print_r($films);

    // print_r($films[0][0]);
?>
