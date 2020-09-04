<?php
include 'dbh.class.php';
//only interacts with database (model)
class Users extends Dbh{

  protected function getUserbyemail($email){
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$email]);
    $results = $stmt->fetchAll();
    return $results;
  }
  protected function setUser($name, $email, $password, $phoneNumber, $address){
    $sql = "INSERT INTO users(name,email,password,phoneNumber,address) VALUES(?,?,?,?,?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name, $email, $password, $phoneNumber, $address]);

  }
}
