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
  <link rel="stylesheet" href="assets/css/contact.css">
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php">
      <img src="assets/logo.png" alt="" width="100" height="80" class="d-inline-block align-text-top">
    </a>
  </nav>    
  <form action="contactinsert.php" method="POST">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td>Phone no :</td>
    <td>
     <input type="phone" name="phone" required>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="submit" class="submitBtn"></td>
   </tr>
  </table>
 </form>
</body>
</html>