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


</head>

<body>

  <!-- // header  -->
  <section id="header">
    <a href="#"><img src="images/logo.jpg" class="logo" alt=""></a>
    <div>
      <ul id="navbar">
        <li><a href="index1.php">Home</a></li>
        <li><a class="active" href="shop.php">Shop</a></li>

        <li><a href="about.php">About</a></li>
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

    <h2>#Gadgets</h2>

    <p>Discount upto 70% off</p>


  </section>

  <section id="pro-1" class="section-p1">

    <h2>Gadgets Have A Look</h2>
    <p>Best Sales Product</p>
    <div class="pro-con">
      <div class="pro" onclick="window.location.href='sproduct.php';">
        <img src="images/iphone13pro.jpg" alt="" width="500" height="300">

        <div class="pro-des">
          <span>iPhone</span>
          <h5>iPhone 13 Pro</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>₹1,19,999.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='sproduct2.php';">
        <img src="images/dellinspirion15.jpg" alt="" width="500" height="300">

        <div class="pro-des">
          <span>Dell</span>
          <h5>Ispiron 15 laptop</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <h4>₹59,499.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='sproduct3.php';">
        <img src="images/asusrogstrix.jpg" alt="" width="500" height="300">

        <div class="pro-des">
          <span>Asus</span>
          <h5>Asus Rog Strix Scar 15</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <h4>₹2,50,499.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='sproduct4.php';">
        <img src="images/samsungs22.jpg" alt="" width="500" height="300">

        <div class="pro-des">
          <span>Samsung</span>
          <h5>Galaxy S22</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <h4>₹74,999.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='sproduct5.php';">
        <img src="images/IMG-20220904-WA0010.jpg" alt="" width="500" height="300">

        <div class="pro-des">
          <span>Drone</span>
          <h5>Dji Mavic Mini Bundel fly 2 </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>₹90,499.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='sproduct6.php';">
        <img src="images/samsungs20new.jpg" alt="" width="500" height="300">

        <div class="pro-des">
          <span>Samsung</span>
          <h5>Galaxy S20</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <h4>₹49,999.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='sproduct7.php';">
        <img src="images/redminote8pro.jpg" alt="" width="500" height="300">

        <div class="pro-des">
          <span>Redmi </span>
          <h5>Note 8 Pro</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <h4>₹14,499.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='sproduct8.php';">
        <img src="images/IMG-20220904-WA0017.jpg" alt="" width="500" height="300">

        <div class="pro-des">
          <span>Drone</span>
          <h5>Dji Mini 3 Pro</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <h4>₹90,499.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>



      <div class="pro" onclick="window.location.href='sproduct9.php';">
        <img src="images/oneplus_10_pro.webp" alt="" width="500" height="300">

        <div class="pro-des">
          <span>OnePlus</span>
          <h5>OnePlus 10 Pro</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <h4>₹59,499.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='sproduct10.php';">
        <img src="images/msigf65thin.webp" alt="" width="500" height="300">

        <div class="pro-des">
          <span>MSI</span>
          <h5>MSI GF65 Thin</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <h4>₹89,990.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='sproduct11.php';">
        <img src="images/Nothing-Phone-1-PNG-Image-HD.png" alt="" width="500" height="300">

        <div class="pro-des">
          <span>Nothing</span>
          <h5>Nothing Phone 1</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <h4>₹33,499.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='sproduct12.php';">
        <img src="images/xiaomi12pro5g.jpg" alt="" width="500" height="300">

        <div class="pro-des">
          <span>Xiaomi</span>
          <h5>Xiaomi 12 Pro 5g</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <h4>₹62,499.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='sproduct13.php';">
        <img src="images/Galaxy-M51.webp" alt="" width="500" height="300">

        <div class="pro-des">
          <span>Samsung</span>
          <h5>Samsung Galaxy M51</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <h4>₹23,499.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='sproduct14.php';">
        <img src="images/poco-x4-pro-5g.png" alt="" width="500" height="300">

        <div class="pro-des">
          <span>POCO</span>
          <h5>POCO X4 Pro 5G</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <h4>₹19,499.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='sproduct15.php';">
        <img src="images/hppavilion.png" alt="" width="500" height="300">

        <div class="pro-des">
          <span>HP</span>
          <h5>HP Pavilion Gaming 15</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <h4>₹89,499.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='sproduct16.php';">
        <img src="images/alienware_laptop_category_page_mod02_x17.png" alt="" width="500" height="300">

        <div class="pro-des">
          <span>DELL</span>
          <h5>Alienware x14</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <h4>₹90,499.00</h4>
        </div>
        <a href="#"><i class=" fa-solid fa-cart-shopping cart"></i></a>
      </div>


    </div>
  </section>
  <section id="pageination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
  </section>

  <!-- // footer  -->
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
      <a href="AboutUs.php">About us</a>
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