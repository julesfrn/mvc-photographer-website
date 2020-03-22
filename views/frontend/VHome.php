<?php $title = 'MARTIN BRUNO'; ?>
<?php 
$scripts = '
  <script src="/public/js/wave.js"></script>
  <script src="/public/js/home.js"></script>
'; 
?>

<?php ob_start(); ?>
<div class="v-home">
  <?php $shouldShowSocials = true ?>
  <?php require('components/CMenu.php') ?>
  <div class="container">
    <div class="v-home__images-container">
    <?php while ($image = $images->fetch()) { ?>
      <div class="v-home__img-wrapper">
        <img src="/public/images/<?= $image['image_name'] ?>" alt="">
      </div>
    <?php } ?>
    </div>
  </div>
</div>
<?php
$content = ob_get_clean();
require('views/VTemplate.php');
?>
