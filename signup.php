<?php
  include 'classes/userscontroller.class.php';
  include 'includes/signup.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Signup</h1>
    <form  method="post">
      <?php
        if(isset($message)){
          echo implode($message);
        }
       ?>
      <label>name</label>
      <input style="margin-bottom: 10px; width: 200px; margin-left: 60px;" type="text" name="name" value="<?php echo (isset($_POST['name']) ? $_POST['name'] : ''); ?>" placeholder="name">
      <br>
      <label>email</label>
      <input style="margin-bottom: 10px; width: 200px; margin-left: 59px;" type="text" name="email" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : ''); ?>" placeholder="email">
      <br>
      <label>password</label>
      <input style="margin-bottom: 10px; width: 200px; margin-left: 35px;" type="password" name="pwd" value="<?php echo (isset($_POST['pwd']) ? $_POST['pwd'] : ''); ?>" placeholder="password">
      <br>
      <label>phone number</label>
      <input style="margin-bottom: 10px; width: 200px; margin-left: 3px;" type="text" name="phonenum" value="<?php echo (isset($_POST['phonenum']) ? $_POST['phonenum'] : ''); ?>" placeholder="phone number">
      <br>
      <label>address</label>
      <input style="margin-bottom: 10px; width: 200px; margin-left: 47px;" type="text" name="address" value="<?php echo (isset($_POST['address']) ? $_POST['address'] : ''); ?>" placeholder="address">
      <br>
      <button type="submit" name="signup-submit">Signup</button>
    </form>
    <a href="login.php">already have an account?</a>

  </body>
</html>
