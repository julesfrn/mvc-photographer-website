<?php

require_once('models/ImagesManager.php');
require_once('models/SeriesManager.php');

function showVhome() {
  $imagesManager = new B2\mb\Model\ImagesManager();
  $images = $imagesManager->get3RandomImages();
  require('views/frontend/VHome.php');
}

function showVAbout() {
  require('views/frontend/VAbout.php');
}

function showVSeries($serieName) {
  $imagesManager = new B2\mb\Model\ImagesManager();
  $seriesManager = new B2\mb\Model\SeriesManager();
  $images = $imagesManager->getImagesBySerieName($serieName);
  $series = $seriesManager->getSeries();
  require('views/frontend/VSeries.php');
}
