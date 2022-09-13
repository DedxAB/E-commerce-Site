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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/82125ab8ed.js" crossorigin="anonymous"></script>
    <title>ELECTROCART</title>
    <link rel="stylesheet" href="index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
        }

        html {
            font-size: 62.5%;
        }

        .contact {
            position: relative;
            /* min-height: 100vh; */
            padding: 5rem 10rem;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #fff;
            /* background: rgba(98, 98, 98, 0.619)url(images/c-d-x-PDX_a_82obo-unsplash.jpg) no-repeat center center/cover; */
            /* background-blend-mode: darken; */
            background-size: cover;
        }

        .contact .content {
            max-width: 80rem;
            text-align: center;
            margin-right: 6.4rem;
        }

        .contact .content h2 {
            font-size: 3.6rem;
            font-weight: 500;
            color: rgb(0, 0, 0);
        }

        .contact .content p {
            color: rgb(0, 0, 0);
            margin-top: 2.3rem;
            font-size: 1.6rem;
        }

        .container {
            width: 93%;
            display: flex;
            justify-content: center;
            align-items: center;
            /* margin-top: 3rem; */
        }

        .container .contactInfo {
            width: 50%;
            padding-right: 3rem;
            display: flex;
            flex-direction: column;
        }

        .container .contactInfo .box {
            position: relative;
            padding: 2rem 0;
            display: flex;
        }

        .container .contactInfo .box .icon {
            min-width: 6rem;
            height: 6rem;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5rem;
            font-size: 2.2rem;
        }

        .container .contactInfo .box .text {
            display: flex;
            margin-left: 2rem;
            font-size: 1.6rem;
            color: rgb(0, 0, 0);
            flex-direction: column;
            font-weight: 300;
        }

        .container .contactInfo .box .text h3 {
            font-weight: 500;
            color: #00bcd4;
        }

        /* Contact Form  */
        .contact-form {
            width: 40%;
            padding: 4rem;
            background: rgba(255, 255, 255, 0.527);
            border: .3rem solid rgb(255, 255, 255);
            box-shadow: 0 0 10px 5px rgb(222, 222, 222);
            border-radius: 1.2rem;
            margin-top: 3.2rem;
            /* margin-left: 22px; */
        }

        .contact-form h2 {
            font-size: 3rem;
            color: rgb(0, 0, 0);
            font-weight: 500;
        }

        .contact-form .inputBox {
            position: relative;
            width: 100%;
            margin-top: 1rem;
        }

        .contact-form .inputBox input,
        .contact-form .inputBox textarea {
            width: 100%;
            padding: .5rem 0;
            font-size: 1.6rem;
            margin: 1rem 0;
            border: none;
            border-bottom: .2rem solid #333;
            outline: none;
            resize: none;
            background: none;
        }

        .contact-form .inputBox span {
            position: absolute;
            left: 0;
            padding: .4rem 0;
            font-size: 1.6rem;
            margin: 1rem 0;
            pointer-events: none;
            transition: 0.3s;
            color: #666;
        }

        .contact-form .inputBox input:focus~span,
        .contact-form .inputBox input:valid~span,
        .contact-form .inputBox textarea:focus~span,
        .contact-form .inputBox textarea:valid~span {
            color: #000000;
            font-size: 1.2rem;
            transform: translateY(-2rem);
        }

        /* .contact-form .inputBox input[type="submit"] {
            width: 100px;
            background: #00bcd4;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
        } */

        .contact-form .inputBox button {
            width: 10rem;
            background: #00bcd4;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 1rem;
            font-size: 1.8rem;
            margin-top: 1rem;
            border-radius: .3rem;
        }

        .contact-form .inputBox button:hover {
            background: #53b5c2;
            color: #fff;
        }

        @media (max-width:998px) {
            html {
                font-size: 55%;
            }

            .contact {
                padding: 50px;
            }

            .container {
                flex-direction: column;
            }

            .container .contactInfo {
                margin-bottom: 40px;
            }

            .container .contactInfo,
            .contact-form {
                width: 100%;
            }
        }

        @media (max-width:768px) {
            html {
                font-size: 49%;
            }

            .contact {
                padding: 20px;
            }

            .container {
                flex-direction: column;
            }

            .container .contactInfo {
                margin-bottom: 30px;
            }

            .container .contactInfo,
            .contact-form {
                width: 80%;
            }

            .contact .content {
                margin-right: 19px;
            }
        }

        #whitecolor {
            color: rgb(0, 0, 0);
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
                <li><a href="ContactUs.php" class="active">Contact Us</a></li>
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

        <h2>#Contact Us</h2>
        <p>Share your exicitement with us. We would love to hear from you.</p>

    </section>

    <section class="contact">
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-map" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p id="whitecolor">398, Ramkrishnapur Rd, near Jagadighata Market, Barasat, Kolkata, West
                            Bengal 700125</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p id="whitecolor">+91 8837399618</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p id="whitecolor">bwubts20203@brainwareuniversity.ac.in</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form action="">
                    <h2>Drop us a line</h2>
                    <div class="inputBox">
                        <input type="text" name="" id="" required>
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="mail" name="" id="" required>
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" id="" required>
                        <span>Type Your Message...</span>
                    </div>
                    <div class="inputBox">
                        <!-- <input type="submit" value="Submit"> -->
                        <button>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- // footer section  -->
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
            <img src="./pay.png">
        </div>
    </footer>
    <script src="index.js"></script>
</body>

</html>