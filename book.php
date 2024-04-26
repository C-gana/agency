<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="styles/general.css" />
    <link rel="stylesheet" href="styles/agency.css" />
    <link rel="stylesheet" href="styles/nav-bar.css" />
    <link rel="stylesheet" href="styles/inquiry.css" />
    <title>Z-agency | Book a Trip</title>
  </head>
  <body>
    <div class="nav-top" id="home">
      <div class="login"><a href="login.html">Logout</a></div>
    </div>
    <nav>
      <div class="logo">
        <img src="LOGO.png" alt="" />
      </div>
      <div class="nav-links">
        <ul>
          <li><a href="agency.html">Home</a></li>
          <li><a href="#destinations">Destination</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
        </ul>
      </div>
    </nav>
    <form action="" class="booking-form">
      <p class="form-title">Book a Trip</p>
      <p class="description">
        Please fill in all fields with valid information to help us organize
        your trip.
      </p>
      <div class="content-grid">
        <label class="sites-label">Tourism site</label>
        <label class="budget-label">Trip Budget <i>(per person)</i></label>
        <div>
          <select name="sites" id="sites" class="js-sites">
            <option value="">---- Please select an option ----</option>
            <option value="Likoma">Likoma</option>
            <option value="Mangochi">Mangochi</option>
            <option value="Mulanje">Mulanje</option>
            <option value="Rumphi">Rumphi</option>
          </select>
          <small></small>
        </div>
        <div>
          <input
            type="text"
            placeholder="Amount in USD"
            class="budget-input js-budget"
          />
          <small></small>
        </div>
        <label class="departure-label" id="depart-label">Departure Date</label>
        <label class="return-label">Return Date</label>

        <div>
          <input
            type="date"
            class="date-input js-departure-date"
            id="depart-input"
          /><small></small>
        </div>
        <div>
          <input type="date" class="date-input js-return-date" /><small></small>
        </div>
      </div>
      <div class="insurance">
        <label class="insurance-label"
          >Should We Include Travel Insurance?</label
        >
        <div class="radio-buttons">
          <input type="radio" name="insurance" id="" class="js-insurance" />
          <div class="yes">Yes</div>
          <input type="radio" name="insurance" id="" class="js-insurance" />
          <div class="no">No</div>
        </div>
      </div>

      <input type="submit" value="Submit" class="submit-button" />
    </form>
    <script src="scripts/book-validation.js"></script>
  </body>
</html>
