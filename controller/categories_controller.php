<?php
require('../modele/categories_modele.php');


if(isset($_POST['search']) AND !empty($_POST['search'])){
   
    echo JSON_encode($searchInfo);
    
}
else{
    echo 'Erreur';
}

?>