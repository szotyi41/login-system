<?php
  
namespace LoginSystem\Install;

use mysqli;

class Install {

	public static $instance;
  public $database;
  public $connection;

  public static function getInstance() {
    if (self::$instance === null) {
      self::$instance = new Install();
    }
    return self::$instance;
  }

  public function __construct() {
    $this->database = Database::getInstance();
    $this->connection = $this->database->getConnection();
  }

  public function install() {
    $sql = "CREATE DATABASE $db; USE $db;";
    $result = $this->connection->query($sql);
    $this->connection->close();
    return $result;
  }

}
