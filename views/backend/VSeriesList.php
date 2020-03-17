<?php $title = 'Admin - Series'; ?>

<?php ob_start(); ?>
<div class="series-list">
  <h1>Hello World!</h1>
</div>
<?php
$content = ob_get_clean();
require('views/VTemplate.php');
?>
