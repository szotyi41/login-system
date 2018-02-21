<?php
  
namespace LoginSystem;

use mysqli;

class Database {

	public static $instance;
	public $connection;

  public static function getInstance() {
    if (self::$instance === null) {
      self::$instance = new Database();
    }
    return self::$instance;
  }

  public function __construct() {
	  $host = "127.0.0.1";
	  $user = "username";
	  $pass = "password";
	  $db = "login-system";

  	$this->connection = new mysqli($host, $user, $pass, $db);
  	$this->connection->set_charset("utf8");

  	if ($this->connection->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}		
  }

  public function getConnection() {
  	return $this->connection;
  }

}
