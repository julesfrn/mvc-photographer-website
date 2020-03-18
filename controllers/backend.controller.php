<?php

require_once('models/ImagesManager.php');
require_once('models/SeriesManager.php');

function showVASeriesList() {
  $seriesManager = new B2\mb\Model\SeriesManager();
  $series = $seriesManager->getSeries();
  require('views/backend/VASeriesList.php');
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

function showVASerie($serieName) {
  $imagesManager = new B2\mb\Model\ImagesManager();
  $seriesManager = new B2\mb\Model\SeriesManager();
  $images = $imagesManager->getImagesBySerieName($serieName);
  $serie = $seriesManager->getSerieByName($serieName);
  require('views/backend/VASerie.php');
}
