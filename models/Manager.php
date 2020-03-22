<?php

namespace B2\mb\Model;

class Manager {
  protected function dbConnect() {
    $db = new \PDO(
      'mysql: host=eu-cdbr-west-02.cleardb.net; dbname=heroku_9bf5c7181289ef8;', 
      'b4617340f03bcf', '39dd2ef5', 
      array(
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
      )
    );
    return $db;
  }
}
