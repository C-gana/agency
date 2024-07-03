<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../styles/general.css" />
    <link rel="stylesheet" href="../styles/login.css" />
    <link rel="stylesheet" href="../styles/recover.css" />
    <title>Z-agency | Login</title>
  </head>
  <body>
    <?php
    require ('../db_conn.php');
    session_start();
    //check form submission
    if (isset($_POST['email'])){
      $email = $_POST['email']; 
      $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
      $stmt->bind_param("s", $_POST['email']);
      $stmt->execute();
      $result = $stmt->get_result()->fetch_assoc();
      if ($result) {
        $token = bin2hex(random_bytes(32));
        $expires_at = date('Y-m-d H:i:s', strtotime('+3 hour'));
        //store token in db
        $stmt = $conn->prepare("INSERT INTO password_resets (email, token, expires_at) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $token, $expires_at);
        $stmt->execute();
        //send email
        $to = $email;
        $subject = "Password Reset";
        $msg = "Click the link below to reset your password: http://localhost/z-agency/pages/reset.php?token=$token";
        $headers = 'From: no-reply@ztravel.com';
        mail($to, $subject, $msg, $headers);
        header("Location: recover.php?error=Email sent");
        exit();     
      }else{
        header("Location: recover.php?error=Email not found");
        exit();
      }
    }else{
    ?>
    <div class="container">
      <div class="js-login-container login-container">
        <div class="logo-container">
          <img id="logo" src="../images/LOGO.png" alt="" />
        </div>
        <div class="title">Recover Account</div>
        <?php if (isset($_GET['error'])) { ?>
        <div class="error"><?php echo $_GET['error']; ?></div>
        <?php }?>
        <form action="" method="post">
          <input type="text" class="email" name="email" placeholder="Enter your Email to receive a verification code" />
          <input class="login-button" type="submit" value="Send code" />
        </form>
        <div class="forgot-new">
          <a href="login.php">Login</a>
          <a href="register.php">Register</a>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </body>
</html>