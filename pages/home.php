<?php
include("../auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../styles/general.css" />
    <link rel="stylesheet" href="../styles/agency.css" />
    <link rel="stylesheet" href="../styles/nav-bar.css" />
    <title>Z-agency | Home</title>
  </head>
  <body>
    <div class="nav-top" id="home">
      <div class="login"><a href="logout.php">Logout</a></div>
    </div>
    <nav>
      <div class="logo">
        <img src="../images/LOGO.png" alt="" />
      </div>
      <div class="nav-links">
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#destinations">Destination</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
        </ul>
      </div>
    </nav>
    <main>
      <section>
        <div class="container">
          <p><span>DISCOVER</span>&nbsp;A World you have never seen</p>
          <button class="book-button"><a href="book.php">Book a Trip</a></button>
        </div>
      </section>
  </body>
</html>