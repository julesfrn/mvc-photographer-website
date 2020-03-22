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
      <img src="/public/images/<?= $image['image_name'] ?>">
    <?php } ?>
      <div class="v-home__new-box-wrapper">
        <p class="v-home__new-box">nouvelle&nbsp;&nbsp;boite</p>
      </div>
    </div>
  </div>
</div>
<?php
$content = ob_get_clean();
require('views/VTemplate.php');
?>
