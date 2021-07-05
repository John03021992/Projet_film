<?php
require('../modele/categories_modele.php');


if(isset($_POST['value']) AND !empty($_POST['value'])){
   
    echo JSON_encode(getFilmByCat($_POST['value'], $bdd));
    
}
else{
    echo 'Erreur';
}

?>
    