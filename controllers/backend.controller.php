<?php

require_once('models/SeriesManager.php');

function showVSeriesList() {
  $seriesManager = new B2\mb\Model\SeriesManager();
  $series = $seriesManager->getSeries();
  require('views/backend/VSeriesList.php');
}
