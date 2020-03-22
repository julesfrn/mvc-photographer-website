<?php

require_once('models/ImagesManager.php');
require_once('models/SeriesManager.php');

function showVhome() {
  $imagesManager = new B2\mb\Model\ImagesManager();
  $images = $imagesManager->get3RandomImages();
  require('views/frontend/VHome.php');
}
