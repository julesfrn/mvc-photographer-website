<?php

namespace B2\mb\Model;

require_once('Manager.php');

class SeriesManager extends Manager {
  public function getSeries() {
    $db = $this->dbConnect();
    $series = $db->query('SELECT * FROM series');
    return $series;
  }
}
