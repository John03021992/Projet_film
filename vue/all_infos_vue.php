<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    include ('../controller/all_infos_controller.php');
?>

<p>
    <?php foreach($films as $film): ?>
    <h1><?php echo $film["titre"]?></h1><?php endforeach ?>
</p>

<?php 
        $req_film->closeCursor();
?>

</body>
</html>
