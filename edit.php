<?php
session_start();
$d=$_SESSION['username'];
if(!isset($_SESSION['username'])){

header('location:index.php');
}
//session_destroy();
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
    <Style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Ubuntu:wght@300;400;500&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
        }

        html {
            font-size: 62.5%;
        }

        #mainsection {
            height: 65vh;
        }

        .maindiv {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 2rem 0;
        }

        .userRegForm {
            max-width: 50rem;
            background: rgb(255, 255, 255);
            padding: 19px 20px;
            /* box-shadow: 0 0 6px 2px rgb(220 220 220); */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border-radius: 1.1rem;
            border: 3px solid rgb(255, 255, 255);
        }

        .signupform {
            display: block;
        }

        .userRegForm form .user_details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
            max-height: 266px;
            /* overflow-y: scroll; */
        }

        form .user_details .input_box {
            /* margin-bottom: 15px; */
            width: 100%;
            margin-bottom: 15px;
        }

        .user_details .input_box input {
            height: 45px;
            width: 100%;
            border: 1px solid #ccc;
            outline: none;
            border-radius: 5px;
            padding-left: 15px;
            font-size: 16px;
            border-bottom-width: 2px;
            transition: all 300ms ease;
            text-align: center;
        }

        form .button {
            height: 4.3rem;
            margin: 30px 0;
        }

        form .button input {
            height: 100%;
            width: 100%;
            outline: none;
            color: #fff;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
            border: none;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 8px;
        }

        .user_details .input_box input:focus {
            border-color: #9b59b6;
        }

        form .button input:hover {
            background: #ffffff;
            color: #9b59b6;
            transition: all 300ms ease;
            border: 1px solid #9b59b6;
        }
    </Style>
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

        <h2>#EditDetails</h2>

    </section>
    <section id="mainsection">
        <div class="maindiv">
            <div class="userRegForm">
                <form class="form signup" action="/project/update.php" method="post" onsubmit="return validationfun()">
                    <div class="user_details">
                        <div class="input_box">
                            <input type="text" name="name1" id="" placeholder="First Name">
                        </div>
                        <div class="input_box">
                            <input type="text" name="name2" id="" placeholder="Last Name">
                        </div>
                        <div class="input_box">
                            <input type="text" placeholder="Mobile Number" name="num" id="numb" value="">
                        </div>
                        <div class="input_box">
                            <input type="text" placeholder="Address" name="address" value="">
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Save Changes">
                    </div>
                </form>
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
    <script>
        function validationfun() {
            // var pass = document.getElementById("pass").value;
            // var pass12 = document.getElementById("confirmpass").value;
            var mobilenum = document.getElementById("numb").value;
            if (mobilenum.length < 10) {
                window.alert("Please enter a valid Mobile Number");
                return false;
            }
            if (mobilenum.length > 10) {
                window.alert("Please enter a valid Mobile Number");
                return false;
            }
        }
    </script>
</body>

</html>