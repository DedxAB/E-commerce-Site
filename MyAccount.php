<?php
session_start();
$d=$_SESSION['username'];





//submit to detabase

//ways to connect mysql database

$servername='localhost';
$username='root';
$password='';
$database="e_kart";

//create connection object

$conn=mysqli_connect($servername,$username,$password);

//checking the connection


if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}



$conn=mysqli_connect($servername,$username,$password,$database);
$sql="SELECT * FROM `e_cart` WHERE EMAIL='$d';";
$result=mysqli_query($conn,$sql);

$array=mysqli_fetch_assoc($result);

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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Ubuntu:wght@300;400;500&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
            /* font-size: 1.8rem; */
        }

        html {
            font-size: 62.5%;
        }

        #mainSection {
            height: 59vh;
            margin-top: 5rem;
            margin-bottom: 5rem;
            width: 100%;
            background-color: rgb(255, 255, 255);
            font-size: 1.8rem;
            /* padding-top: 1px; */
        }

        main {
            margin: 0rem 25rem;
        }

        main .accountsection {
            display: flex;
            justify-content: space-between;
            padding: 1rem;
            background-color: rgb(255, 255, 255);
            margin-top: 3rem;
        }

        main .accountsection .profile {
            width: 30%;
            margin-left: 0.6rem;
        }

        main .accountsection .profile ul {
            list-style: none;
            padding: 1rem;
            margin: 1rem 0;
        }

        main .accountsection .profile ul li {
            /* margin-bottom: .2rem; */
            padding: 0.4rem;
        }

        main .accountsection .profile ul li a {
            color: rgb(14, 137, 110);
            text-decoration: none;
            padding: 5px 8px;
            font-weight: 500;
            display: block;
        }

        main .accountsection .profile ul li a span {
            float: right;
        }

        /* .active,
        main .accountsection .profile ul li:hover {
            color: aqua;
            background-color: rgb(255, 255, 255);
        } */

        main .accountsection .accountdetails {
            width: 60%;
        }

        .checkout-form .form-group {
            margin: 1rem .5rem;
            width: 100%;
        }

        .checkout-form label {
            display: block;
            color: rgb(14, 137, 110);
            margin-bottom: 0.6rem;
        }

        .checkout-form input,
        .checkout-form select,
        .checkout-form textarea {
            width: 97%;
            padding: 0.8rem 0.5rem;
            font-size: 1.8rem;
            border-radius: 0.5rem;
            outline: none;
            border: 1px solid rgb(163, 163, 163);
        }

        .checkout-form #update {
            cursor: pointer;

        }

        .checkout-form #update:hover {
            border: 1px solid rgb(179, 179, 179);
            background: rgb(255, 255, 255);
            color: rgb(43, 19, 66);
        }

        .checkout-form input:focus,
        .checkout-form select:focus,
        .checkout-form textarea:focus {
            /* width: 100%; */
            outline: .1rem solid darkmagenta;
            /* padding: 0.8rem .5rem; */
        }

        .form-inline {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }

        .patharea ul {
            padding-left: 3.7rem;
            display: flex;
            list-style: none;
            margin-bottom: 1rem;
        }

        .patharea ul li {
            margin: 0 2px;
        }

        .patharea ul li a {
            text-decoration: none;
            text-transform: uppercase;
            color: forestgreen;
        }

        .profiledetails h2,
        .profiledetails p {
            margin-left: 1.5rem;
        }

        #profile {
            border-radius: 1rem;
            box-shadow: 0 0 5px 1px gray;
        }

        #accountdetails {
            border-radius: 0.9rem;
            box-shadow: 0 0 5px 1px gray;
        }

        .billing-details {
            margin: 2rem;
        }
    </style>
</head>

<body>
    <!-- // header  -->
    <section id="header">
        <a href="#"><img src="images/logo.jpg" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index1.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="ContactUs.php">Contact Us</a></li>

                <li><a id="lg-bag" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>

                <a href="#" id="close"><i class="far fa-times"></i></a>

            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>

    <!-- // account details  -->
    <section id="page-head">

        <h2>#AccountDetails</h2>

    </section>
    <section id="mainSection">
        <main>
            <div class="patharea">
                <ul>
                    <li><a href="index1.php">Home</a></li>
                    <li> / </li>
                    <li>ACCOUNT</li>
                </ul>
            </div>
            <div class="accountsection">
                <div class="profile" id="profile">
                    <ul>
                        <li class="active"><a href="#">My Details <span>></span></a></li>
                        <!-- <li><a href="orders.php">My Orders<span>></span></a></li> -->
                        <li><a href="edit.php">Edit Profile<span>></span></a></li>
                        <li><a href="logout.php">Logout<span>></span></a></li>
                    </ul>
                </div>
                <div class="accountdetails" id="accountdetails">
                    <!-- <h2>Account</h2> -->
                    <div class="billing-details">
                        <form class="checkout-form">
                            <div class="form-inline">
                                <div class="form-group"><label>First Name : :
                                        <?php echo $array['FIRSTNAME']; ?>
                                    </label>

                                </div>
                                <div class="form-group"><label>Last Name : :
                                        <?php echo $array['LASTNAME']; ?>
                                    </label>

                                </div>
                            </div>
                            <div class="form-inline">
                                <div class="form-group">
                                    <label>Gender : :
                                        <?php echo $array['GENDER']; ?>
                                    </label>

                                </div>
                                <div class="form-group">
                                    <label>Address : :
                                        <?php echo $array['ADDRESS']; ?>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Email : :
                                        <?php echo $_SESSION['username']; ?>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Phone no : :
                                        <?php echo $array['NUMBER']; ?>
                                    </label>

                                </div>
                        </form>
                    </div>
                    <!-- <div class="form-group">
                        <label>Email : :
                            <?php echo $_SESSION['username']; ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Phone no : :
                            <?php echo $array['NUMBER']; ?>
                        </label>

                    </div> -->
                </div>
                <!-- <div class="form-group">
                                <label></label>

                            </div> -->
                <!-- <div class="form-inline">
                                
                            </div>
                            <br>
                            <div class="form-group">
                                <label></label>

                            </div> -->
                </form>
            </div>
            </div>
            </div>
        </main>
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
</body>

</html>