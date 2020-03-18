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

function addImage($image, $imageDescription, $serieName) {
  $imagesManager = new B2\mb\Model\ImagesManager();
  $target = 'public/images/' . basename($image['name']);
  if (preg_match('#\.svg|\.jpg|\.jpeg|\.png|\.gif|\.webp|\.avif$#i', $image['name'])) {
    if (!file_exists($target)) {
      if (move_uploaded_file($image['tmp_name'], $target)) {
        $affectedLines = $imagesManager->postImage($image['name'], $imageDescription, $serieName);
        if ($affectedLines === false) {
          throw new Exception('Impossible d\'ajouter l\'image, veuillez réessayer plus tard');
        } else {
          header('Location: index.php?action=admin-showSerie&serie=' . $serieName);
        }
      } else {
        throw new Exception('there was a problem uploading the image...');
      }
    } else {
      throw new Exception('File allready exists! Please make sure that that this image has not been uploaded and that it doesn\'t have the same name as an existing image...');;
    }
  } else {
    throw new Exception('This file is not an image. Please make sure that the file you want to upload is a valid image...');
  }
}
