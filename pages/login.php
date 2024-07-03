<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../styles/general.css" />
    <link rel="stylesheet" href="../styles/login.css" />
    <title>Z-agency | Login</title>
  </head>
  <body>
    <?php
    require ('../db_conn.php');
    session_start();
    //check form submission
    if (isset($_POST['email'])){
      $email = htmlspecialchars($_REQUEST['email']);
      $password = htmlspecialchars($_REQUEST['password']);
      $sql = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
      $result = $conn->query($sql);
      $rows = mysqli_num_rows($result);

      if ($rows === 1) {
        $_SESSION['email'] = $email;
        header("Location:home.php");
      } else {
        header("Location:login.php?error=Incorect Email or Password");
      }
    }else{
    ?>
    <div class="container">
      <div class="desc">
        <div class="login-desc">
          <div>WELCOME</div>
          <p>Travelling is to live twice</p>
        </div>
        <div class="register-desc passive">
          <div>JOIN US!</div>
          <p>Your next adventure awaits</p>
        </div>
      </div>
      <div class="js-login-container login-container">
        <div class="logo-container">
          <img id="logo" src="../images/LOGO.png" alt="" />
        </div>
        <div class="title">LOGIN</div>
        <?php if (isset($_GET['error'])) { ?>
        <div class="error"><?php echo $_GET['error']; ?></div>
        <?php }?>
        <form action="" method="post">
          <input type="text" class="email" name="email" placeholder="Email" />
          <input
            type="password"
            class="pwd"
            name="password"
            placeholder="Password"
          />
          <input class="login-button" type="submit" value="Login" />
        </form>
        <div class="forgot-new">
          <a href="register.php">Create Account</a>
          <a href="recover.php">Forgot password?</a>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </body>
</html>