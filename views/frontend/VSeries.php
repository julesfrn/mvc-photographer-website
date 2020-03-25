<?php $title = 'Series'; ?>
<?php 
$scripts = '<script src="/public/js/series.js"></script>'; 
?>

<?php ob_start(); ?>
<div class="v-series">
  <?php $shouldShowSocials = false ?>
  <?php require('components/CMenu.php') ?>
  <div class="container">
    <div class="v-series__images-container">
      <?php while ($image = $images->fetch()) { ?>
        <img src="/public/images/<?= $image['image_name'] ?>">
      <?php } ?>
      <div class="v-series__button-wrapper">
        <p class="v-series__button">Series</p>
      </div>
    </div>
    <div class="v-series__menu">
      <img src="/public/pictos/cross.png">
      <ul>
        <?php while ($serie = $series->fetch()) { ?>
          <?php if ($serie['seo_name'] === $_GET['serie']) { ?>
            <li><a href="?action=showSeries&serie=<?= $serie['seo_name'] ?>" class="current"><?= $serie['name'] ?></a></li>
          <?php } else { ?>
            <li><a href="?action=showSeries&serie=<?= $serie['seo_name'] ?>"><?= $serie['name'] ?></a></li>
          <?php } ?>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>
<?php
$content = ob_get_clean();
require('views/VTemplate.php');
?>
