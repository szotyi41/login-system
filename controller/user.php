<?php

namespace LoginSystem;

class User {

	public $database;
	public $connection;

  public function __construct() {
  	$this->database = Database::getInstance();
  	$this->connection = $this->database->getConnection();
  }

  public function login($name, $pass) {
  	$sql = "SELECT * FROM user WHERE name == $name";
  	$result = $this->connection->query($sql); 
    $user = $result->fetch_row();

    return "siekr";

/*
    if(($name == $user["name"])) 
    {
      return json_encode($name);
    }
*/
  	//return json_encode($user);
  }

  public function logout() {
  	session_destroy();
  }

  public function signup($user, $pass, $mail) {
  	$sql = "INSERT INTO user (user, pass, mail) VALUES ('$user', '$pass', '$mail')";
  	$result = $this->connection->query($sql);
  	$this->connection->close();
  	return $result;
  }

}
