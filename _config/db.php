
<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=projet_film;charset=utf8', 'bryan', 'Bbryan0@');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

?>
