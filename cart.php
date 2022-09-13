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
  <link rel="html" href="shop.php">

</head>

<body>

  <!-- // Header section  -->
  <section id="header">
    <a href="#"><img src="images/logo.jpg" class="logo" alt=""></a>
    <div>
      <ul id="navbar">
        <li><a href="index1.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>

        <li><a href="about.php">About</a></li>
        <li><a href="ContactUs.php">Contact Us</a></li>
        <!-- <li><a href="RegistrationForm.php">Sign Up/Sign In</a></li> -->
        <li><a id="lg-bag" class="active" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
        <li><a id="lg-acc" href="MyAccount.php"><i class="fa-solid fa-circle-user">
        <?php  $_SESSION['username']=$d; 
        echo $_SESSION['username'];
        ?>
        </i></a></li>
        <a href="#" id="close"><i class="far fa-times"></i></a>

      </ul>
    </div>
    <div id="mobile">
      <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
      <i id="bar" class="fas fa-outdent"></i>

    </div>
  </section>

  <!-- // Cart section  -->
  <section id="page-head" class="cart-header">
    <h2>#CartSection</h2>
    <p>YOUR WISHLIST <i class="fa-solid fa-heart"></i></p>
  </section>
  <section id="cart" class="section-1">
    <table width="100%">
      <thead>
        <tr>
          <td>REMOVE</td>
          <td>IMAGES</td>
          <td>PRODUCT</td>
          <td>PRICE</td>
          <td>QUANTITY</td>
          <td>TOTAL</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="#"><i class="far fa-times-circle"></i></a></td>
          <td><img src="images/poco-x4-pro-5g.png"></td>
          <td>POCO X4 Pro 5G</td>
          <td>₹19,499.00</td>
          <td><input type="number" value="1"></td>
          <td>₹19,499.00</td>
        </tr>
        <tr>
          <td><a href="#"><i class="far fa-times-circle"></i></a></td>
          <td><img src="images/samsungs22.jpg"></td>
          <td>Samsung Galaxy S22</td>
          <td>₹74,999.00</td>
          <td><input type="number" value="1"></td>
          <td>₹74,999.00</td>
        </tr>
        <tr>
          <td><a href="#"><i class="far fa-times-circle"></i></a></td>
          <td><img src="images/asusrogstrix.jpg"></td>
          <td>Asus Rog Strix Scar 15</td>
          <td>₹2,50,499.00</td>
          <td><input type="number" value="1"></td>
          <td>₹2,50,499.00</td>
        </tr>
      </tbody>
    </table>
  </section>
  <section id="cart-add" class="section-p1">
    <div id="Total">
      <h3>Cart total</h3>
      <table>
        <tr>
          <td>Cart subtotal</td>
          <td>₹3,44,997.00</td>
        </tr>
        <tr>
          <td> Shipping</td>
          <td>Free</td>
        </tr>
        <tr>
          <td><strong>Total</strong></td>
          <td><strong>₹3,44,997.00</strong></td>
        </tr>
      </table>
      <button class="normal">Proceed To Checkout</button>
    </div>
  </section>

  <!-- // Footer section  -->
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
      <a href="cart.php">View cart</a>
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