<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOCIETY PLOT REGISTRATION FORM</title>
  <link rel="stylesheet" href="assets/css/home.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light " >
    <a class="navbar-brand" href="home.php">
      <img src="assets/logo.png" alt="" width="100" height="80" class="d-inline-block align-text-top">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php">Contact </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="about.php">About </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div id="container">
    <div class="product-details">
      <h1>Commercial Plots</h1>
      <p class="information">" 4 plots available, Hurry up!.</p>
      <div class="control">
        <a href="detail.php">
          <button class="btn">
            <span class="buy">Click to register</span>
          </button>
        </a>
      </div>
    </div>
    <div class="product-image">
      <img src="../myfirstproject/assets/plots.jpg" alt="">
      <div class="info">
        <h2> Description</h2>
        <ul>
          <li><strong>Total Plots : </strong>10  </li>
          <li><strong>Each plot Area : </strong>2 kanal</li>
        </ul>
      </div>
    </div>
  </div>

  <div id="container">
    <div class="product-details">
      <h1>Corner Plots</h1>
      <p class="information">" 3 plots available, Hurry up!</p>
      <div class="control">
        <a href="detail1.php">
          <button class="btn">
            <span class="buy">Click to register</span>
          </button>
        </a>
      </div>
    </div>
    <div class="product-image">
      <img src="../myfirstproject/assets/plot3.jpg" alt="">
      <div class="info">
        <h2> Description</h2>
        <ul>
          <li><strong>Total Plots : </strong>30  </li>
          <li><strong>Each plot Area : </strong>1 kanal</li>
        </ul>
      </div>
    </div>
  </div>

  <div id="container">
    <div class="product-details">
      <h1>Park facing plots</h1>
      <p class="information">" 5 plots available, Hurry up! .</p>
      <div class="control">
        <a href="detail2.php">
          <button class="btn">
            <span class="buy">Click to register</span>
          </button>
        </a>
      </div>
    </div>
    <div class="product-image">
      <img src="../myfirstproject/assets/plot4.jpg" alt="">
      <div class="info">
        <h2> Description</h2>
        <ul>
          <li><strong>Total Plots : </strong>50  </li>
          <li><strong>Each plot Area : </strong> 10 Marla</li>
        </ul>
      </div>
    </div>
  </div>

  <div id="container">
    <div class="product-details">
      <h1>Main Road plots</h1>
      <p class="information">"3 plots available, Hurry up!</p>
      <div class="control">
        <a href="detail3.php">
          <button class="btn">
            <span class="buy">Click to register</span>
          </button>
        </a>
      </div>
    </div>
    <div class="product-image">
      <img src="../myfirstproject/assets/plot5.jpg" alt="">
      <div class="info">
        <h2> Description</h2>
        <ul>
          <li><strong>Total Plots : </strong>50  </li>
          <li><strong>Plot Areas : </strong>5,7,10 Marla</li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>