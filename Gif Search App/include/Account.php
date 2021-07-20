<?php

class Account {

  public $id;            // integer
  public $username;      // string
  public $password; // string
  public $email;
  public $name;

  public function __construct($id,$username, $password,$email,$name) {
    $this->id = $id;
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
    $this->name = $name;

  }

  public function getId(){
    return $this->id;
  }

  public function getUsername(){
    return $this->username;
  }

  public function getPassword(){
    return $this->password;
  }


  public function setUsername($username){
    $this->username = $username;

  }

  public function setPassword($password){
    $this->password = $password;
  }

  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }


  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }
}

?>
