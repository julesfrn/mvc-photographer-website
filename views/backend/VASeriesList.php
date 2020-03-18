<?php $title = 'Admin - Series'; ?>

<?php ob_start(); ?>
<div class="series-list">
  <div class="card" style="width: 100%;">
    <div class="card-header">
      Les séries
    </div>
    <ul class="list-group list-group-flush">
      <?php while ($serie = $series->fetch()) {?>
      <li class="list-group-item">
        <a href="index.php?action=admin-showSerie&serie=<?= htmlspecialchars($serie['seo_name']) ?>"><?= htmlspecialchars($serie['name']) ?></a>
      </li>
      <?php } ?>
    </ul>
  </div>
  <form class="form-inline mt-3" action="index.php?action=admin-addSerie" method="post">
    <div class="form-group mr-2">
      <label for="input" class="sr-only">Ajouter une série</label>
      <input type="text" class="form-control" id="input" placeholder="Ajouter une série" name="serieName">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
</div>
<?php
$content = ob_get_clean();
require('views/backend/VATemplate.php');
?>
