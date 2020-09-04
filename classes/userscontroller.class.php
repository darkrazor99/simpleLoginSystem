<?php
include 'users.class.php';
class UsersController extends Users{

    public function signUp($name, $email, $password, $phoneNumber, $address){//things u need to sight up go here
      $this->setUser($name, $email, $password, $phoneNumber, $address);
    }
    public function getUser($email){
      return $this->getUserbyemail($email);
    }

    public function canSignup($email){

      $check = $this->getUser($email);
      if(empty($check)){
        return true;
      }
      else{
        return false;
      }
    }
    public function required_validation($field ){
        $count=0;
        foreach ($field as $key => $value) {
          if(empty($value)){
            $error[$count]= "<p>" . $key . " is required </p>";
            $count++;

          }
        }
        return $error;
    }
}
