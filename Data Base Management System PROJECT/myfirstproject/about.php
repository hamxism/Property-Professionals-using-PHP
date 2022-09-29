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
    <link rel="stylesheet" href="/assets/css/about.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>    
    <style>
  body{
    background-image: url(../myfirstproject/assets/background.jpg);
    background-size: cover;
    background-repeat: no-repeat;
  }

  form{
    background-color: #878c8cb8;
    width: 40%;
    margin-left: 25%;
    padding: 30px;
    border-radius: 10px;
  }

  form input{
    height: 20px;
    border-radius: 10px;
    border: 1px solid white;
    padding-left: 10px;
  }

  .submitBtn{
    height: 30px;
    background-color: #afdee8;
    border-radius: 30px;
    color: white;
    border: 2px solid #afdee8;
    margin-top: 15px;
  }

  .submitBtn:hover{
    background-color: #394749;
    cursor: pointer;
    border: 2px solid #394749 !important;
  }
.bg-light{
  background-color: transparent !important;
}
  .container{
    width: 50%;
    margin-top: 100px;
    margin-left: 35%;
  }

  .formSection{
    width: 55%;
    background-color: #808080b3;
    height: 350px;
    padding: 50px;
    border-radius: 10px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    color: white;
  }

  #emailHelp{
    color: black !important;
    font-size: 12px;
  }

  a.navbar-brand {
    color: rgb(32, 18, 18) !important;
}

a.nav-link {
    color: rgb(90, 60, 60) !important;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
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
  <section style="width:100% ; background-color: #f8d3d3b3; height: 550px;padding: 50px;">
    <div>
      <p>
        Professional Property, established in 2022, is proud to be serving its stake-holders by providing them the right investment opportunities with a wide range of services. As part of our service, we offer advice on the best structure in which to place your investment for estate purposes.
        Believing in work standards that are the last word in quality, we often base significant amounts of our work on outsourcing. In addition to sell plots and construction, overall design work that may include interior as well as exterior designing and landscaping etc. are usually outsourced through dedicated teams having repute in their respective fields.
      </p>
      <p>
        Services:
        Professional Property is a one stop setup that provides not only investment opportunities but also a variety of solutions from buying, renting and selling of your properties up to building, renewing and transformation of your real estate investments aimed at enhancing stakeholder’s wealth.
      </p>
      <p>
        Vision:
        To be recognized as prestigious leaders in our field, evoking pride and a sense of belonging by offering unmatched quality and dedicated services.
      </p>
      <p>
        Mission:
        To provide worldwide investment opportunities that will assure a steady stream of benefits for all stakeholders – not forgetting the individual growth and development of every team member.
      </p>
      <p>
        Strategic Objective:
        Online Business,
        Internal automation of processes,
        Property Tax Consultancy.
      </p>
      <p>
          Contact Number: 03051927553
      </p>
      <p>
        Email: hf009307@gmail.com
      </p>  
    </div>
  </section>  
</body>
</html>