<?php

require_once('models/SeriesManager.php');

function showVSeriesList() {
  $seriesManager = new B2\mb\Model\SeriesManager();
  $series = $seriesManager->getSeries();
  require('views/backend/VSeriesList.php');
}

function addComment($serieName) {
  $seriesManager = new B2\mb\Model\SeriesManager();
  $affectedLines = $seriesManager->postSerie($serieName);
  if ($affectedLines === false) {
    throw new Exception('Impossible d\'ajouter la série, veuillez réessayer plus tard');
  } else {
    header('Location: index.php?action=admin-listSeries');
  }
}
