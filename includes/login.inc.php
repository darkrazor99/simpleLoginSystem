<?php
  session_start();
  $usercontrl= new UsersController();
  if(isset($_POST["login-submit"])){
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $field = array(
      'email'=>$email,
      'password'=>$password
      );
    if(empty($email)||empty($password)){
            $message= $usercontrl->required_validation($field);

      }
      else {
          $holder = $usercontrl->getUser($email);
          if($usercontrl->canSignup($email)){
            $message[0]= "wrong credentials <br>" ;
          }
          foreach ($holder as $key => $value) {
            if ($value['email']==$email && password_verify ($password ,$value['password'])) {

              $_SESSION["name"]=$value['name'];
              header("location: home.php");
            }
            else {
                $message[0]= "wrong credentials <br>";
            }

          }
        }
      }
