<?php
  include 'classes/usersview.class.php';
  session_start();

  $userviewr = new UsersView();

  if (isset($_SESSION["name"])){
    $message= $userviewr->welcomeUserByName($_SESSION["name"]);
    echo $message;
  }
  else {
    header("location: login.php");
  }

  if(isset($_POST["logout"])) {
    session_destroy();
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  method="post">
      <button type="submit" name="logout">Logout</button>
    </form>
  </body>
</html>
