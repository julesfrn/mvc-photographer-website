<?php $title = 'MARTIN BRUNO'; ?>
<?php $scripts = '<script src="/public/js/wave.js"></script>'; ?>

<?php ob_start(); ?>
<div class="v-home">
  <?php $shouldShowSocials = true ?>
  <?php require('components/CMenu.php') ?>
  
</div>
<?php
$content = ob_get_clean();
require('views/VTemplate.php');
?>
