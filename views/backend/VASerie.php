<?php $title = 'Admin - ' . $serie['name']; ?>

<?php ob_start(); ?>
<div class="serie">
  <a href="index.php?action=admin-listSeries">Retourner à la liste des séries</a>
  <h3 class="mt-3"><?= $serie['name'] ?></h3>
  <?php while ($image = $images->fetch()) {?>
  <?php print_r($image)  ?>
  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
  <?php } ?>
</div>
<?php
$content = ob_get_clean();
require('views/backend/VATemplate.php');
?>
