<?php $title = 'Admin - ' . $serie['name']; ?>

<?php ob_start(); ?>
<div class="serie">
  <a href="index.php?action=admin-listSeries">Retourner à la liste des séries</a>
  <h3 class="mt-3"><?= $serie['name'] ?></h3>
</div>
<?php
$content = ob_get_clean();
require('views/backend/VATemplate.php');
?>
