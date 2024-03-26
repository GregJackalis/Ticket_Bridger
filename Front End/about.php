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
    <link rel="stylesheet" href="about.css" />
    <link rel="stylesheet" type="text/css" href="footer.css" />
    <link rel="stylesheet" href="ourTeam.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="stylesheet" href="home.css" />
    <title>Ticket Bridger</title>
  </head>
  <body class="AboutPage">
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

    <section class="about">
      <div class="main">
        <div class="aboutImageContainer">
          <img
            src="Images/photo-1563841930606-67e2bce48b78.avif"
            class="aboutImage"
            id="aboutImage"
          />
        </div>
        <div class="about-text">
          <h1>About us</h1>
          <h3>Ticket<span> Bridger</span></h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
            obcaecati porro fugit cumque libero perferendis quod laudantium nam
            quibusdam est aspernatur nobis sint laboriosam, aliquid consequuntur
            iusto sunt ad! Rem molestiae corrupti sunt accusantium reprehenderit
            optio dolor expedita praesentium laudantium commodi nisi quis
            tempora possimus fugiat ex at quam repudiandae, quos assumenda odio
            dicta blanditiis debitis. Impedit porro praesentium mollitia.
          </p>
          <!--May a button hear that leeds to contact us-->
        </div>
      </div>
    </section>

    <div class="team-section">
      <div class="team-container">
        <div class="row">
          <div class="title">
            <h1>our team</h1>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Reprehenderit cupiditate sunt tenetur at mollitia odit saepe
              adipisci ducimus dignissimos. At?
            </p>
          </div>
        </div>
        <div class="team-card">
          <div class="card">
            <div class="image-section">
              <img src="Images/Kostas.png" />
            </div>
            <div class="content">
              <h3>Kostas</h3>
              <h4>Database Designer</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Nostrum illo explicabo architecto.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="image-section">
              <img src="Images/Gregory.png" />
            </div>
            <div class="content">
              <h3>Grigoris</h3>
              <h4>Back-end Developer</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Nostrum illo explicabo architecto.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="image-section">
              <img src="Images/Giorgos.png" />
            </div>
            <div class="content">
              <h3>George</h3>
              <h4>Web Developer/Designer</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Nostrum illo explicabo architecto.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="image-section">
              <img src="Images/Fanis.png" />
            </div>
            <div class="content">
              <h3>Fanis</h3>
              <h4>Web Developer/Designer</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Nostrum illo explicabo architecto.
              </p>
            </div>
          </div>
        </div>
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
    <script src="aboutImages.js"></script>
    <script src="json_handler.js"></script>
  </body>
</html>
