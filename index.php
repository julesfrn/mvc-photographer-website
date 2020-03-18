<?php 

// DEVNOTE(Jules Fournier): TODO: uncomment next line when we start creating the frontend part
// require('controllers/frontend.controller.php');
require('controllers/backend.controller.php');

try {
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'admin-listSeries') {
      showVASeriesList();  
    } elseif ($action == 'admin-addSerie') {
      if (!empty($_POST['serieName'])) {
        addComment($_POST['serieName']);
      } else {
        throw new Exception('Tous les champs ne sont pas remplis...');
      }
    } elseif ($action == 'admin-showSerie') {
      if (isset($_GET['serie'])) {
        showVASerie($_GET['serie']);
      } else {
        throw new Exception('Il manque le nom de la série...');
      }
    }
  } else {
    showVASeriesList();
  }
} catch (Exception $e) {
  $errorMessage = 'Erreur : ' . $e->getMessage();
  require('views/VError.php');
}
