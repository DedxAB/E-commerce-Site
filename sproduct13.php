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
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>

                <li><a href="about.php">About</a></li>
                <li><a href="ContactUs.php">Contact Us</a></li>
                <!-- <li><a href="RegistrationForm.php">Sign Up/Sign In</a></li> -->
                <li><a id="lg-bag" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a id="lg-acc" href="MyAccount.php"><i class="fa-solid fa-circle-user"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
                <link rel="html" href="sproduct.php">

            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>
    <section id="prodetail" class="section-p1">
        <div class="single-pro-image">
            <img src="images/Galaxy-M51.webp" width="100%" id="mainimg">
            <div class="small-img-g">
                <div class="small-img-col">
                    <img src="images/samsungm511.jpg" width="100% " class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/samsungm512.jpg" width="100% " class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/samsungm51.png" width="100% " class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/Galaxy-M51.webp" width="100% " class="small-img">
                </div>
            </div>
        </div>
        <div class="sigle-pro-details">
            <!-- <h6>Mobile</h6> -->
            <h4>Samsung Galaxy M51</h4>
            <h2>MRP: ₹23,499.00</h2>
            <input type="number" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>8GB RAM, 256GB Storage) | Snapdragon 8 Gen 1 | 50+50+50MP Flagship Cameras(OIS) | 10bit
                2K+ Curved AMOLED Display | Sound by Harman Kardon | 50MP camera | 6.73'' WQHD+ 120Hz AMOLED display
            </span>

        </div>
    </section>
    <section id="pro-1" class="section-p1">

        <h2>NEW ARRIVAL</h2>
        <p>BEST OF BEST</p>
        <div class="pro-con">
            <div class="pro" onclick="window.location.href='sproduct14.php';">
                <img src="images/poco-x4-pro-5g.png" alt="" width="500" height="300">

                <div class="pro-des">
                    <span>POCO</span>
                    <h5>POCO X4 5G</h5>
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

        </div>
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
            <a href="#">About us</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">Contact Us</a>

        </div>
        <div class="col">
            <h4> My Account</h4>
            <a href="#">Sign in</a>
            <a href="#">View cart</a>
            <a href="#">My Wish List</a>
            <a href="#">Help</a>

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

    <script>
        var mainImg = document.getElementById("mainimg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function () {
            mainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function () {
            mainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function () {
            mainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function () {
            mainImg.src = smallimg[3].src;
        }
    </script>


    <script src="index.js"></script>

</body>

</html>