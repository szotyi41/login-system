<?php

namespace LoginSystem;

class Login {

  public static $instance;
	public $database;
	public $connection;

  public static function getInstance() {
    if (self::$instance === null) {
      self::$instance = new Login();
    }
    return self::$instance;
  }

  public function __construct() {
  	$this->database = Database::getInstance();
  	$this->connection = $this->database->getConnection();
  }

  public function login($name, $pass) {
  	$sql = "SELECT * FROM user WHERE name = '$name' AND pass = '$pass'";
  	$result = $this->connection->query($sql) or die("Wrong username or password"); 
    $user = $result->fetch_array();
    echo "<script>console.log('logged in')</script>";
    return $user;
  }

  public function logout() {
    header("Location: /index.php");
  	session_destroy();
  }

  public function signup() {
  	$sql = "INSERT INTO user (user, pass, mail) VALUES ('$user', '$pass', '$mail')";
  	$result = $this->connection->query($sql);
  	$this->connection->close();
  	return $result;
  }

}
