<?php $title = 'Admin - Series'; ?>

<?php ob_start(); ?>
<div class="series-list">
  <ul>
    <?php while ($serie = $series->fetch()) {?>
    <li><?= $serie['name'] ?></li>
    <?php } ?>
  </ul>
</div>
<?php
$content = ob_get_clean();
require('views/VTemplate.php');
?>
