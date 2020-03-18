<?php $title = 'Admin - ' . $serie['name']; ?>

<?php ob_start(); ?>
<div class="serie">
  <a href="index.php?action=admin-listSeries">Retourner à la liste des séries</a>
  <h3 class="mt-3"><?= $serie['name'] ?></h3>
  <div class="container row">
    <?php while ($image = $images->fetch()) {?>
    <div class="card m-2" style="width: 18rem;">
      <img src="/public/images/<?= $image['image_name']?>" class="card-img-top" style="width:100%;height:200px;object-fit:cover;">
      <div class="card-body">
        <p class="card-text"><?= $image['image_description'] ?></p>
      </div>
    </div>
    <?php } ?>
  </div>
  <form action="index.php?action=admin-addImage&serie=<?= $_GET['serie'] ?>" method="post" enctype="multipart/form-data" class="mt-3">
    <div class="form-group">
      <label for="image">Ajouter une image</label>
      <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <div class="form-group">
    <label for="description">Description de l'image</label>
      <textarea class="form-control" id="description" rows="3" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter l'image</button>
  </form>
</div>
<?php
$content = ob_get_clean();
require('views/backend/VATemplate.php');
?>
