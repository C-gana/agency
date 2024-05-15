<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../styles/general.css" />
    <link rel="stylesheet" href="../styles/reg.css" />
    <title>Z-agency | Register</title>
  </head>
  <body>
    <?php
    require('../db_conn.php');
    if (isset($_REQUEST['fname'])) {
      $first_name = htmlspecialchars($_REQUEST['fname']);
      $last_name = htmlspecialchars($_REQUEST['lname']);
      $phone_number = htmlspecialchars($_REQUEST['pnumber']);
      $email = htmlspecialchars($_REQUEST['email']);
      $password = htmlspecialchars($_REQUEST['password']);

      //inserting values in the database
      $sql = "INSERT into `users` (first_name, last_name, email, phone_number, password)
              VALUES('$first_name', '$last_name', '$email', '$phone_number','".md5($password)."' ) ";
      $result = mysqli_query($conn, $sql);
      
      if($result){
        echo "Registration successful";
        header("Location:../index.php");
      }
  }
?>
    <div class="container">
      <div class="desc">
        <div class="register-desc">
          <div>JOIN US!</div>
          <p>Your next adventure awaits</p>
        </div>
      </div>
      <div class="js-register-container register-container">
        <div class="logo-container">
          <img id="logo" src="../images/LOGO.png" alt="" />
        </div>
        <div class="title">REGISTER</div>
        <form action="" method="post" class="reg-form">
          <div>
            <input
              type="text"
              class="fname"
              name="fname"
              placeholder="First Name"
            />
            <small></small>
          </div>
          <div>
            <input
              type="text"
              class="lname"
              name="lname"
              placeholder="Last Name"
            /><small></small>
          </div>
          <div>
            <input
              type="text"
              class="email reg-email"
              name="email"
              placeholder="Email e.g example@mail.com"
            /><small></small>
          </div>
          <div>
            <input
              type="text"
              class="pnumber"
              name="pnumber"
              placeholder="Phone Number e.g 0912345678"
            /><small></small>
          </div>
          <div>
            <input
              type="password"
              class="pwd"
              id="pwd"
              name="password"
              placeholder="Password"
            /><small></small>
          </div>
          <div>
            <input
              type="password"
              id="pwd-confirm"
              class="pwd-confirm"
              name="password"
              placeholder="Confirm Password"
            /><small></small>
          </div>
          <input class="login-button" type="submit" value="Register" />
        </form>
        <div class="register-footer">
          <a href="login.php">Already have account?</a>
        </div>
      </div>
    </div>
    <script src="../scripts/register-validation.js"></script>
  </body>
</html>
