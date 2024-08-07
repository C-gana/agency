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
          <button class="book-button">
            <a href="book.php">Book a Trip</a>
          </button>
        </div>
      </section>
      <div id="destinations" class="home">
        <div class="title">Destinations</div>
        <div class="card-container">
          <div class="card">
            <img src="/agency/images/mulanje.jpg" alt="" />
            <div class="view">View images</div>
            <p>Mulanje Mountain</p>
          </div>
          <div class="card">
            <img src="/agency/images/salima.jpg" alt="" />
            <div class="view">View images</div>
            <p>Salima beaches</p>
          </div>
          <div class="card">
            <img src="/agency/images/mantchewe.jpg" alt="" />
            <div class="view">View images</div>
            <p>Livingstonia Plateau</p>
          </div>
          <div class="card">
            <img src="/agency/images/likoma-island.jpg" alt="" />

            <div class="view">View images</div>
            <p>Likoma Island</p>
          </div>
        </div>
        <div class="advert">
          <div class="title">Discover New Destinations</div>
          <p>To travel is to live</p>
          <img id="frame" src="/agency/images/Untitled-1.png" alt="" />
          <img id="discover-img" src="/agency/images/discover-1.jpg" alt="" />
        </div>
      </div>
    </main>
  </body>
</html>
