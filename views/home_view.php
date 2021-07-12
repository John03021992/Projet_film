<?php
  require "controllers/home_controller.php";
  include "includes/header.php";
?>

<section class="allCards">

<?php foreach ($films as $film): ?>
  
    <div class="cards" id=<?php echo $film['idfilms']?>>
      <!--First Card Creation-->
      <img  class="img_cards" src="<?php echo $film['affiche']?>"  alt="Affiche film <?php echo $film['titre']?>" >
      <div class="container_cards">
        <h4><?php echo $film['titre']?></h4>
        <p class="p_cards"><?php echo $film['genres']?></p>
        <p class="year"><?php echo $film['annee']?></p>
        <!-- MODAL -->
      </div>
      <a href="#demo_modal<?php echo $film['idfilms']?>" class="btn_modal">
          En savoir plus
        </a>
    </div>

    <div id="demo_modal<?php echo $film['idfilms']?>" class="modal">
          <div class="modal_content">
            <img src="<?php echo $film['affiche']?>" alt="affiche film <?php echo $film['titre']?>" class="img_modal">
            <div class="modal_column">
              <h3><?php echo $film['titre']?></h3>
              <p class="modal_description"><?php echo $film['description']?></p>
              <p class="modal_annee"><?php echo $film['annee']?></p>
              <p class="modal_genre"><?php echo $film['genres']?></p>
              <a href="#" class="modal_close">&times;</a>
            </div>
          </div>
        </div>

<?php endforeach; ?>

  </section>

  <section class="catCards"></section>
  <section class="searchCards"></section>

<?php
  include "views/includes/footer.php"  
?>