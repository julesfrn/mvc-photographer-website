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

  public function postImage($imageName, $imageDescription, $serieName) {
    $db = $this->dbConnect();
    $query = $db->prepare('INSERT INTO `images` (`image_name`, `image_description`, `serie_name`) VALUES (?, ?, ?)');
    $affectedLines = $query->execute(array($imageName, $imageDescription, $serieName));
    return $affectedLines;
  }
}
