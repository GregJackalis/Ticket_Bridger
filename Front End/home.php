<?php
session_start();

if (!isset($_SESSION['loggedIn'])) {
  $_SESSION['loggedIn'] = 'nah';
}

include 'PHPtoJS.php';

if ($_SESSION['loggedIn'] == 'ye') {
  addClassesIcons();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- LINK FOR AJAX SUPPORT (AKA json_handler.js SCRIPT FOR HANDLING COMMUNICATION) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <!-- ---------------------------------------------------------------------- -->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Icons fontawesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" type="text/css" href="footer.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Libre+Baskerville&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="home.css" />

    <title>Ticket Bridger</title>
  </head>
  <!--body section-->
  <body class="HomePage">
    <!--navigation bar-->
    <header>
      <div class="navBar">
        <div class="logo">
          <img src="Images/LogoImage.png" alt="logoImage" onclick="window.location.href='home.php';"/>
        </div>
        <ul class="links">
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="actionButtons">
          <button class="getStarted">Get Started</button>
          <i class="carticon fa-solid fa-cart-shopping"></i>
          <i class="usericon fa-solid fa-user"></i>
          <div class="toggleButton">
            <i class="fa-solid fa-bars"> </i>
          </div>
        </div> 
      </div>

      <!--dropdown menu-->
      <div class="dropDownMenu">
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <button class="getStarted">Get Started</button>
      </div>
    </header>

    <!-- LOGIN & SIGN UP POP-UP WINDOWS -->
    <div class="wrapper">
      <span class="icon-close">
        <i class="fa-solid fa-xmark"></i>
      </span>

      <!-- LOGIN -->
      <div class="form-box login">
        <h2>Login</h2>
        <form id="loginForm"> 
          <div class="input-box">
            <span class="icon"
              ><i class="fa-sharp fa-solid fa-envelope"></i
            ></span>
            <input type="email" name="email_L"/>
            <label>Email</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="fa-sharp fa-solid fa-key"></i></span>
            <input type="password" name="password_L"/>
            <label>Password</label>
          </div>
          <input type="hidden" name="action" value="loginAction">
          <div class="remember-forgot">
            <label><input type="checkbox" />Remember me</label>
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submit" class="btn" id="loginBtn">Login</button>
          <div class="login-register">
            <p>
              Don't have an Account?
              <a href="#" class="register-link"> Register</a>
            </p>
          </div>
        </form>
      </div>

      <!-- SIGN UP -->
      <div class="form-box register">
        <h2>Sign Up</h2>
        <form id="signUpForm">
          <div class="input-box">
            <span class="icon"><i class="fa-solid fa-user"></i></span>
            <input type="text" name="username_R"/> <!-- Username Register -->
            <label>Username</label>
          </div>
          <div class="input-box">
            <span class="icon"
              ><i class="fa-sharp fa-solid fa-envelope"></i
            ></span>
            <input type="email" name="email_R"/> <!-- Email Register -->
            <label>Email</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="fa-sharp fa-solid fa-key"></i></span>
            <input type="password" name="password_R"/> <!-- Password Register -->
            <label>Password</label>
          </div>
          <input type="hidden" name="action" value="signUpAction">
          <div class="remember-forgot">
            <label
              ><input type="checkbox" />I agree to the terms & conditions</label
            >
          </div>
          <button type="submit" class="btn" id="submitBtn">Register</button>
          <div class="login-register">
            <p>
              Already have an account?
              <a href="#" class="login-link"> Login</a>
            </p>
          </div>
        </form>
      </div>
    </div>

    <div id="phpResponse" style="margin-top: 175px;">
      <span class="icon-close">
        <i class="fa-solid fa-xmark"></i>
      </span>
    </div>

    <!--Carousel-->
    <div class="slider">
      <div class="slides">
        <input type="radio" name="radio-btn" id="radio1" />
        <input type="radio" name="radio-btn" id="radio2" />
        <input type="radio" name="radio-btn" id="radio3" />
        <input type="radio" name="radio-btn" id="radio4" />
        <input type="radio" name="radio-btn" id="radio5" />

        <div class="slide first">
          <img src="./Images/people-2608316.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="./Images/concert-2527495_1920.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="./Images/rudy-dong-fYjyDGtD-0c-unsplash.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="./Images/arlinda-1CfBmk3VD2o-unsplash.jpg" alt="" />
        </div>
        <div class="slide">
          <img src="./Images/joe-yates-8LJViXSE_V8-unsplash.jpg" alt="" />
        </div>

        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
          <div class="auto-btn5"></div>
        </div>
      </div>

      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
        <label for="radio5" class="manual-btn"></label>
      </div>
    </div>

    <script type="text/javascript">
      var counter = 1;
      setInterval(function () {
        document.getElementById("radio" + counter).checked = true;
        counter++;
        if (counter > 5) {
          counter = 1;
        }
      }, 5000);
    </script>

    <!--Services-->
    <div class="services">
      <h2>Ticket Bridger's Services</h2>
      <div class="container">
        <div class="sports ticketservices">
          <i class="fa-solid fa-basketball" style="color: rgb(244, 79, 8)"></i>
          <p>
            Experience the thrill as a <br />
            spectator or sell your <br />sports event tickets to
            <br />passionate fans.
          </p>
        </div>
        <div class="cinema ticketservices">
          <i class="fa-solid fa-film" style="color: rgb(244, 193, 8)"></i>
          <p>
            Whether you're a movie <br />buff or a seller, discover <br />
            the magic of cinema on <br />our platform.
          </p>
        </div>
        <div class="theater ticketservices">
          <i
            class="fa-solid fa-masks-theater"
            style="color: rgb(157, 32, 210)"
          ></i>
          <p>Dive into the world <br />of theater!</p>
        </div>
        <div class="music ticketservices">
          <i class="fa-solid fa-music" style="color: rgb(201, 69, 111)"></i>
          <p>
            Immerse yourself in the <br />
            world of music as a buyer <br />or seller.
          </p>
        </div>
      </div>
    </div>
    <!--Search bar-->
    <div class="search">
      <div class="container">
        <form action="" class="search-bar">
          <input type="text" placeholder="Search for events" name="q" />
          <button type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>
      </div>
    </div>

    <div class="reselling">
      <div class="container">
        <img
          src="./Images/samuel-regan-asante-JjlkGAc4OUM-unsplash.jpg"
          class="samuel"
          alt=""
        />
        <img
          src="./Images/dylan-mullins-Ubhjpv7q0Pk-unsplash.jpg"
          class="dylan"
          alt=""
        />
        <p>
          Reselling tickets for
          <span style="font-weight: bold; color: rgb(230, 232, 111)"
            >cinema</span
          >,
          <span style="font-weight: bold; color: rgb(244, 79, 8)">sports</span>,
          <span style="font-weight: bold; color: rgb(227, 162, 255)"
            >theatre</span
          >, and
          <span style="font-weight: bold; color: rgb(201, 69, 111)"
            >music events</span
          >
          opens a gateway for enthusiasts to share their passion and for sellers
          to facilitate unforgettable experiences. <br />
          <br />
          Whether connecting movie buffs with cinematic wonders, uniting sports
          fans for live action, immersing individuals in the world of theatre,
          or enabling music lovers to partake in unforgettable performances,
          Ticket Bridger creates a dynamic marketplace where the excitement of
          diverse events can be shared, enjoyed, and cherished by a broader
          audience. <br />
          <br />
          Through Ticket Bridger, the process of reselling tickets is
          streamlined, ensuring a seamless exchange that benefits both sellers
          and buyers. This innovative platform not only fosters a sense of
          community among event enthusiasts but also amplifies the accessibility
          of captivating cultural and entertainment experiences.
        </p>
      </div>
    </div>

    <!-- FOOTER -->
    <div class="FOOTER">
      <div class="footercontainer">
        <div class="row">
          <div class="footer-col">
            <h4>Company</h4>
            <ul>
              <li><a href="about.php">About us</a></li>
              <li><a href="contact.php">Contact us</a></li>
              <li><a href="services.html">Services</a></li>
            </ul>
          </div>

          <div class="footer-col">
            <h4>Help</h4>
            <ul>
              <li><a href="#">Terms of use</a></li>
              <li><a href="#">Refund Policy</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>

          <div class="footer-col">
            <h4>Find us on social media</h4>
            <div class="social-links">
              <a href="https://www.facebook.com/mediterraneancollege/">
                <i class="fab fa-facebook-f"></i
              ></a>
              <a
                href="https://www.instagram.com/mediterranean_college?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
              >
                <i class="fab fa-instagram"></i
              ></a>
            </div>
          </div>

          <div class="footer-col">
            <h4>Copyright© Ticket Bridger</h4>
          </div>
        </div>
      </div>
    </div>

    <script src="home.js"></script>
    <script src="json_handler.js"></script>
  </body>
</html>
