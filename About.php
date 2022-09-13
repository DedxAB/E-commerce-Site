<?php
session_start();
$d=$_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ELECTROCART</title>
  <script src="https://kit.fontawesome.com/82125ab8ed.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <section id="header">
    <a href="#"><img src="images/logo.jpg" class="logo" alt=""></a>
    <div>
      <ul id="navbar">
        <li><a href="index1.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>

        <li><a class="active" href="About.php">About</a></li>
        <li><a href="ContactUs.php">Contact Us</a></li>
        <!-- <li><a href="RegistrationForm.php"></a></li> -->
        <li><a id="lg-bag" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
        <li><a id="lg-acc" href="MyAccount.php"><i class="fa-solid fa-circle-user">
              <?php  $_SESSION['username']=$d; echo $_SESSION['username']; ?>
            </i></a></li>
        <a href="#" id="close"><i class="far fa-times"></i></a>

      </ul>
    </div>
    <div id="mobile">
      <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
      <i id="bar" class="fas fa-outdent"></i>

    </div>
  </section>
  <section id="page-head">

    <h2>#About Us</h2>

  </section>
  <div id="paradiv">
    <p>Hello, welcome to ElectroCart. So glad you are here. We are small team focused on making a Good connection
      between customer, product and us through our user-friendly ecommerce website founded in September 2022 based in
      Kolkata, India. We're
      Ankit, Gaurav,
      Bristi, Tubun & Arnab, a small team of five B.Tech students. </p>
  </div>
  <div id="wra" class="wrapper">

    <div class="Quad">
      <img src="images/ankit.png">
      <h3>Ankit Acharjee</h3>
      <p>Back-end Designer</p>
      <p>
        <i class="fa fa-facebook"></i>
        <i class="fa fa-linkedin"></i>
        <i class="fa fa-twitter"></i>
      </p>
    </div>
    <div class="Quad">
      <img src="images/gaurav.png">
      <h3>Gaurav Mitra</h3>
      <p>Front-end Designer</p>
      <p>
        <i class="fa fa-facebook"></i>
        <i class="fa fa-linkedin"></i>
        <i class="fa fa-twitter"></i>
      </p>
    </div>
    <div class="Quad">
      <img src="images/arnab.png">
      <h3>Arnab bhoumik</h3>
      <p>Front-end Designer</p>
      <p>
        <i class="fa fa-facebook"></i>
        <i class="fa fa-linkedin"></i>
        <i class="fa fa-twitter"></i>
      </p>
    </div>
    <div class="Quad">
      <img src="images/bristi.png">
      <h3>Bristi Sarkar</h3>
      <p>Designer</p>
      <p>
        <i class="fa fa-facebook"></i>
        <i class="fa fa-linkedin"></i>
        <i class="fa fa-twitter"></i>
      </p>
    </div>
    <div class="Quad">
      <img src="images/tubun.png">
      <h3>Tubun Jana</h3>
      <p>Back-end Designer</p>
      <p>
        <i class="fa fa-facebook"></i>
        <i class="fa fa-linkedin"></i>
        <i class="fa fa-twitter"></i>
      </p>
    </div>

  </div>



  <!-- // footer section -->
  <footer class="section-p1">
    <div class="col">
      <img class="logo" src="images/logo.jpg">
      <h4>Contact</h4>
      <p><strong>Address</strong> Brainware university barasat</p>
      <p><strong>Phone</strong> 975499758</p>
      <p><strong>Hours</strong> 10:00 - 18:00 , Mon - Sat</p>
      <div class="follow">
        <h4>Follow Us</h4>
        <div class="icon">
          <i class="fab fa-facebook-f"> </i>
          <i class="fab fa-instagram"> </i>
          <i class="fab fa-twitter"> </i>
          <i class="fab fa-pinterest-p"> </i>
          <i class="fab fa-youtube"> </i>
        </div>

      </div>
    </div>
    <div class="col">
      <h4> About Us</h4>
      <a href="About.php">About us</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms and Conditions</a>
      <a href="ContactUs.php">Contact Us</a>

    </div>
    <div class="col">
      <h4> My Account</h4>
      <a href="RegistrationForm.php">Sign in</a>
      <a href="#">View cart</a>
      <a href="#">My Wish List</a>
      <a href="ContactUs.php">Help</a>

    </div>
    <div class="col install">
      <h4>Install app</h4>
      <p>From App To Google play </p>
      <div class="row">
        <img src="images/app.jpg">
        <img src="images/play.jpg">

      </div>
      <p>Pay Secure Gateway</p>
      <img src="pay.png">
    </div>
  </footer>

  <script src="index.js"></script>

</body>

</html>