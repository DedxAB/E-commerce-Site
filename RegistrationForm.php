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
            background: rgba(98, 98, 98, 0.619)url(images/pexels-fauxels-3183132.jpg) no-repeat center center/cover;
            background-blend-mode: darken;
            width: 100%;
            height: 100vh;

        }

        .maindiv {
            width: 100%;
            min-height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .userRegForm {
            max-width: 36rem;
            background: rgb(255, 255, 255);
            padding: 19px 20px;
            /* box-shadow: 0 0 6px 2px rgb(220, 220, 220); */

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border-radius: 1.1rem;
            border: 3px solid rgb(255, 255, 255);
        }

        .userRegForm .title {
            font-size: 2.5rem;
            font-weight: 500;
            position: relative;
        }

        .userRegForm form .user_details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
            max-height: 266px;
            overflow-y: scroll;
        }

        form .user_details .input_box {
            /* margin-bottom: 15px; */
            width: 100%;
            margin-bottom: 15px;
        }

        .user_details .input_box .details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
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
        }

        .user_details .input_box input:focus,
        .user_details .input_box input:valid {
            border-color: #9b59b6;
        }

        .gender_details .catagory {
            margin-top: 9px;
        }

        .catagory label {
            margin-left: 4px;
            margin-right: 6px;
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

        form .button input:hover {
            background: #ffffff;
            color: #9b59b6;
            transition: all 300ms ease;
            border: 1px solid #9b59b6;
        }

        .user_details::-webkit-scrollbar {
            width: 0;
        }

        .actionbtns {
            width: 80%;
            background-color: royalblue;
            margin: 1rem;
            display: flex;
            justify-content: space-between;
            position: relative;
            border-radius: 5rem;
            box-shadow: rgba(0, 0, 0, 0.9) 0px 3px 12px;
        }

        .actionBtn {
            padding: 1rem;
            width: 50%;
            outline: none;
            border: none;
            background-color: transparent;
            border-radius: 5rem;
            color: #fff;
            font-size: 1.5rem;
            font-weight: 500;
            cursor: pointer;
        }

        .movebtn {
            position: absolute;
            width: 50%;
            height: 90%;
            margin: .2rem;
            border: none;
            outline: none;
            border-radius: 5rem;
            background-color: #fff;
            font-size: 1.5rem;
            font-weight: 500;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            transform: translateX(0);
            transition: all 0.3s ease-in-out;
        }

        .rightbtn {
            transform: translateX(98%);
            transition: all 0.3s ease-in-out;
        }

        .form {
            display: none;
        }

        .signupform {
            display: block;
        }

        .loginform {
            display: block;
        }

        .gender_details .catagory .gender {
            font-size: 1.5rem;
        }

        #forgetpass {
            font-size: 1.6rem;
        }

        #forgetpass a {
            color: #9b59b6;
            margin-left: 0.3rem;
        }

        #forgetpass:hover {
            text-decoration: underline;
        }
    </Style>
</head>

<body>

    <!-- // header  -->
    <section id="header">
        <a href="#"><img src="images/logo.jpg" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="ContactUs.php">Contact Us</a></li>
                <!-- <li><a href="RegistrationForm.php">Sign Up/Sign In</a></li> -->
                <li><a id="lg-bag" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a id="lg-acc" href="MyAccount.php"><i class="fa-solid fa-circle-user"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>

            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>

    <section id="mainsection">
        <div class="maindiv">
            <div class="userRegForm">
                <div class="actionbtns">
                    <button class="actionBtn logIn">LogIn</button>
                    <button class="actionBtn signUp">SignUp</button>
                    <button class="movebtn">LogIn</button>
                </div>
                <form class="form login loginform" action="/project/vali.php" method="post">
                    <div class="user_details">
                        <div class="input_box">
                            <input type="email" placeholder="Email " name="email" required>
                        </div>
                        <div class="input_box">
                            <input type="password" placeholder="Password " name="pass" required>
                        </div>
                    </div>
                    <div id="forgetpass"><a href="#">Foreget Password?</a></div>
                    <div class="button">
                        <input type="submit" value="LogIn">
                    </div>
                </form>
                <form class="form signup" action="/project/reg.php" method="post" onsubmit="return validationfun()">
                    <div class="user_details">
                        <div class="input_box">
                            <input type="text" name="name1" id="" placeholder="First Name " required>
                        </div>
                        <div class="input_box">
                            <input type="text" name="name2" id="" placeholder="Last Name " required>
                        </div>
                        <div class="input_box">
                            <input type="email" placeholder="Email " name="email" required>
                        </div>
                        <div class="input_box">
                            <input type="text" placeholder="Number " name="num" id="numb" value="" required>
                        </div>
                        <div class="input_box">
                            <input type="password" placeholder="Password " name="pass" id="pass" value="" required>
                        </div>
                        <div class="input_box">
                            <input type="password" placeholder="Confirm Password " name="pass1" id="confirmpass"
                                value="" required>
                        </div>
                        <div class="gender_details">
                            <div class="catagory">
                                <input type="radio" name="gender" id="" value="Male" required>
                                <label for="">
                                    <span class="gender">Male</span>
                                </label>
                                <input type="radio" name="gender" id="" value="Female" required>
                                <label for="">
                                    <span class="gender">Female</span>
                                </label>
                                <input type="radio" name="gender" id="" value="not given" required>
                                <label for="">
                                    <span class="gender">Prefer not to say</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Register">
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
    <script>
        const loginbtn = document.querySelector(".logIn");
        const signupbtn = document.querySelector(".signUp");
        const movebtn = document.querySelector(".movebtn");
        const login = document.querySelector(".login");
        const signup = document.querySelector(".signup");
        signupbtn.addEventListener("click", () => {
            movebtn.classList.add("rightbtn");
            signup.classList.add("signupform");
            login.classList.remove("loginform")
            movebtn.innerHTML = "SignUp";
        })
        loginbtn.addEventListener("click", () => {
            movebtn.classList.remove("rightbtn");
            login.classList.add("loginform")
            signup.classList.remove("signupform")
            movebtn.innerHTML = "LogIn";
        })
    </script>
    <script src="index.js"></script>
    <script>
        function validationfun() {
            var pass = document.getElementById("pass").value;
            var pass12 = document.getElementById("confirmpass").value;
            var mobilenum = document.getElementById("numb").value;
            if (mobilenum.length < 10) {
                window.alert("Please enter a valid Mobile Number");
                return false;
            }
            if (mobilenum.length > 10) {
                window.alert("Please enter a valid Mobile Number");
                return false;
            }
            if (pass.length <= 5) {
                window.alert("Password Length must be greater than 5 characters")
                return false;
            }
            if (pass.length > 15) {
                window.alert("Password Length must be smaller than 15 characters")
                return false;
            }
            if (pass != pass12) {
                window.alert("Password are not same");
                return false;
            }
        }
    </script>
</body>

</html>