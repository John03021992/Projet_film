<?php
require "../controllers/home_controller.php";
include "../views/home_view.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" type="text/css" href="../assets/styles/css/style.css"> -->
    <title>Home</title>
</head>
<body>
<div class="container">
        <div id="cards">
  <?php foreach ($films as $film): ?>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $film['affiche']?>" class="card-img-top" alt="" height="300">
            <div class="card-body card-movie">
              <h4 class="card-title"><?php echo $film['titre']?> <h4>
              <h5 class="card-subtitle"><?php echo $film['genres']?></h5>
              <div class="container">
                <div class="row">
                  <div class="col"></div>
                  <div class="col"></div>
                  <div class="col-6">
                    <p class="card-movie-year"><?php echo $film['annee']?></p>
                   </div>
                </div>
              </div>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
  <?php endforeach; ?>
      </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../assets/js/app.js"></script>    
</body>
</html>