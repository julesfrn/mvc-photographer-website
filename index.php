<?php 

// DEVNOTE(Jules Fournier): TODO: uncomment next line when we start creating the frontend part
// require('controllers/frontend.controller.php');
require('controllers/backend.controller.php');

try {
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
  } else {
    showVSeriesList();
  }
} catch (Exception $e) {
  $errorMessage = 'Erreur :' . $e->getMessage();
  require('views/VError.php');
}
