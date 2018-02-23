<?php

namespace LoginSystem;

class Signup {

	public $database;
	public $connection;

  public function __construct() {
  	$this->database = Database::getInstance();
  	$this->connection = $this->database->getConnection();
  }

  public function signup() {
  	$sql = "INSERT INTO user (user, pass, mail) VALUES ('$user', '$pass', '$mail')";
  	$result = $this->connection->query($sql);
  	$this->connection->close();
  	return $result;
  }

}
