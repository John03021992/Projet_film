<?php 
    require ('../controller/categories_controller.php');
?>
    
<p>
    <?php foreach($catFilms as $catFilm): ?>
    <h1><?php echo $catFilm["titre"]?></h1><?php endforeach; ?>
</p>