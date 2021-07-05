<?php 
    require ('../modele/all_infos_modele.php');
?>
    
<p>
    <?php foreach($films as $film): ?>
    <h1><?php echo $film["annee"]?></h1><?php endforeach; ?>
</p>