<?php $title = 'Erreur'; ?>
<?php $scripts = ''; ?>

<?php ob_start(); ?>
<style>
  .error {
    color: red;
    text-align: center; 
  }
  .retour {
    cursor: pointer;
    text-decoration: underline; 
  }
</style>
<p class="retour">Retour</p>
<h3 class="error"><?= htmlspecialchars($errorMessage) ?></h3>
<script>
  document.querySelector('.retour').addEventListener('click', () => {
    window.history.back()
  })
</script>
<?php
$content = ob_get_clean();
require('VTemplate.php');
?>
