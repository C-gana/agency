<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../styles/general.css" />
    <link rel="stylesheet" href="../styles/agency.css" />
    <link rel="stylesheet" href="../styles/nav-bar.css" />
    <link rel="stylesheet" href="../styles/inquiry.css" />
    <title>Z-agency | Book a Trip</title>
  </head>
  <body>

    <div class="nav-top" id="home">
      <div class="logout"><a href="logout.php">Logout</a></div>
    </div>
    <nav>
      <div class="logo">
        <img src="../images/LOGO.png" alt="" />
      </div>
      <div class="nav-links">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="#destinations">Destination</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
        </ul>
      </div>
    </nav>
    <form action="" method="post" class="booking-form">
      <p class="form-title">Book a Trip</p>
      <p class="description">
        Please fill in all fields with valid information to help us organize
        your trip.
      </p>

      <div class="content-grid">
        <label class="sites-label">Tourism site</label>
        <label class="budget-label">Trip Budget <i>(per person)</i></label>
        <div>
          <select name="site" id="sites" class="js-sites">
            <option value="">---- Please select an option ----</option>
            <option value="Likoma">Likoma</option>
            <option value="Mangochi">Mangochi</option>
            <option value="Mulanje">Mulanje</option>
            <option value="Rumphi">Rumphi</option>
          </select>
          <small style="color:red;"></small>
        </div>
        <div>
          <div class="field">
            <input
              type="text"
              placeholder="Amount in USD"
              class="budget-input js-budget"
              name="budget"
            />
            <small style="color:red;"></small>
          </div>
        </div>

        <label class="departure-label" id="depart-label">Departure Date</label>
        <label class="return-label">Return Date</label>

        <div>
          <input
            type="date"
            class="date-input js-departure-date"
            id="depart-input"
            name="departure"
          /><small style="color:red;"></small>
        </div>
        <div>
          <input type="date" class="date-input js-return-date" name="return" />
          
          <small style="color:red;"></small>
        </div>
      </div>

      <input
        type="submit"
        value="Submit"
        class="submit-button"
        id="submit"
        name="submit"
      />
    </form>
        <?php
    require ("../auth_session.php");
    require ("../db_conn.php");

    if(isset($_REQUEST['site'])){
      $site = htmlspecialchars($_REQUEST['site']);
      $budget = htmlspecialchars($_REQUEST['budget']);
      $departure = htmlspecialchars($_REQUEST['departure']);
      $return_date = htmlspecialchars($_REQUEST['return']);
      $email = $_SESSION['email'];

      //inserting values in the database
      $sql = "INSERT into `bookings` (site, budget, departure_date, return_date,email)
              VALUES('$site', '$budget', '$departure', '$return_date','$email' ) ";
      $result = mysqli_query($conn, $sql); 
      if($result){
        echo "<script>alert('Booking successful');</script>";
      }
  }

?>
    <script src="../scripts/book-validation.js"></script>
  </body>
</html>
