<?php

namespace B2\mb\Model;

require_once('Manager.php');

class ImagesManager extends Manager {
  public function getImagesBySerieName($serieName) {
    $db = $this->dbConnect();
    $images = $db->prepare('SELECT image_name, image_description, serie_name FROM images WHERE	`serie_name` = ?');
    $images->execute(array($serieName));
    return $images;
  }
}
