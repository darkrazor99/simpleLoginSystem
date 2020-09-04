<?php
  include 'classes/userscontroller.class.php';
  include 'includes/login.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      <h1>Login</h1>
      <form  method="post">
        <?php
          if(isset($message)){
            echo implode($message);
          }
         ?>
        <input type="text" name="email" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : ''); ?>"  placeholder="email">
        <input type="password" name="pwd" value="<?php echo (isset($_POST['pwd']) ? $_POST['pwd'] : ''); ?>" placeholder="password">
        <button type="submit" name="login-submit">Login</button>
      </form>
      <a href="signup.php">Signup</a>
    </div>
  </body>
</html>
