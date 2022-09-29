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
  <link rel="stylesheet" href="assets/css/detail.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="detail.php">
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
      <h1>Commercial Plot# 1-B</h1>
      <div class="control">
        <a href="contactdetail.php">
          <button class="btn">
            <span class="buy">Click to Buy</span>
          </button>
        </a>
      </div>
    </div>
    <div class="product-image">
      <img src="../myfirstproject/assets/plots.jpg" alt="">
    </div>
  </div>
  <div id="container">
    <div class="product-details">
      <h1>Commercial Plot# 2-B</h1>
      <div class="control">
        <a href="contactdetail.php">
          <button class="btn">
            <span class="buy">Click to Buy</span>
          </button>
        </a>
      </div>
    </div>
    <div class="product-image">
      <img src="../myfirstproject/assets/plot6.png" alt="">
    </div>
  </div>
  <div id="container">
    <div class="product-details">
      <h1>Commercial Plot# 3-B</h1>
      <div class="control">
        <a href="contactdetail.php">
          <button class="btn">
            <span class="buy">Click to Buy</span>
          </button>
        </a>
      </div>
    </div>
    <div class="product-image">
      <img src="../myfirstproject/assets/plot7.png" alt="">
    </div>
  </div>
  <div id="container">
    <div class="product-details">
      <h1>Commercial Plot# 4-B</h1>
      <div class="control">
        <a href="contactdetail.php">
          <button class="btn">
            <span class="buy">Click to Buy</span>
          </button>
        </a>
      </div>
    </div>
    <div class="product-image">
      <img src="../myfirstproject/assets/plot8.png" alt="">
    </div>
  </div>
</body>
</html>