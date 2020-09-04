<?php
  session_start();
  $usercontrl= new UsersController();
  if(isset($_POST["signup-submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $phoneNumber = $_POST["phonenum"];
    $address = $_POST["address"];

    $field = array(
      'name' =>$name ,
      'email'=>$email,
      'password'=>$password,
      'phoneNumber'=>$phoneNumber,
      'address'=>$address
      );
    if(isset($_POST["signup-submit"]))
      if(empty($name)||empty($email)||empty($password)||empty($phoneNumber)||empty($address)){
          $message= $usercontrl->required_validation($field);

      }
      elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $message[0]="please enter a valid email <br>";
      }
      elseif (!is_numeric($phoneNumber)) {
        $message[0]="please enter a valid phoneNumber <br>";
      }
      else{
        if($usercontrl->canSignup($email)){
          $hashed_PWD = password_hash($password,PASSWORD_DEFAULT);
          $usercontrl->signUp($name, $email, $hashed_PWD, $phoneNumber, $address);
          $_SESSION["name"] = $name;
          echo "<script>alert('registration successful thank you for registration');
                window.location.href='home.php';
                </script>";
        }
        else{
          $message[0]="email already registered <br>";
        }

      }
  }
