<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../styles/general.css" />
    <link rel="stylesheet" href="../styles/login.css" />
    <title>Z-agency | Login</title>
  </head>
  <body>
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
        <div class="error">Incorrect Email or Password</div>
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
          <a href="">Forgot password?</a>
        </div>
      </div>
    </div>
  </body>
</html>
