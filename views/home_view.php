<?php
  require "../controllers/home_controller.php";
  include "includes/header.php";
?>

  <div class="cible_modal"></div>
  <section data-aos="zoom-in" data-aos-duration="3000" class="allCards">

<?php foreach ($films as $film): ?>
  
    <div data-aos="zoom-in" class="cards" id=<?php echo $film['idfilms']?>>
      <!--First Card Creation-->
      <img  class="img_cards" src="<?php echo $film['affiche']?>"  alt="Avatar" >
      <div class="container_cards">
        <h4><?php echo $film['titre']?></h4>
        <p class="p_cards"><?php echo $film['genres']?></p>
        <p class="year"><?php echo $film['annee']?></p>
      </div>
    </div>

<?php endforeach; ?>

  </section>

  <section class="catCards"></section>

  <section class="searchCards"></section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script src="../assets/js/app.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
once: true
})
</script>

<?php
  include "../views/includes/footer.php"  
?>