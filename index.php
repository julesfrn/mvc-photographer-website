<?php 

require('controllers/frontend.controller.php');
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
    } elseif ($action == 'admin-addImage') {
      if (!empty($_FILES['image']) && !empty($_POST['description']) && isset($_GET['serie'])) {
        addImage($_FILES['image'], $_POST['description'], $_GET['serie']);
      } else {
        throw new Exception('Tous les champs ne sont pas remplis...');
      }
    } elseif ($action == 'showHome') {
      showVHome();
    } elseif ($action == 'showAbout') {
      showVAbout();
    }
  } else {
    showVHome();
  }
} catch (Exception $e) {
  $errorMessage = 'Erreur : ' . $e->getMessage();
  require('views/VError.php');
}
