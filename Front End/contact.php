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
    
    <link rel="stylesheet" href="contact.css" />

    <link rel="stylesheet" type="text/css" href="footer.css" />
    
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="stylesheet" href="home.css" />
    <title>Ticket Bridger</title>
  </head>
  <body class="ContactPage">
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
  <!-- Contact -->
    <section class="contact">
        <div class="content">
          <h1>Contact Us</h1>
        </div>
        <div class="contact-container">
         <div class="contactInfo">
            <div class="box">
               <div class="icon">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
               </div>
               <div class="text">
                <h3>13 Kodrigktonos & 94 Patission Ave, 104 34 | 107</h3>
               
               </div>
            </div>
            <div class="box">
              <div class="icon">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </div>
              <div class="text">
               <h3>697123456</h3>
               
              </div>
           </div>
           <div class="box">
             <div class="icon">
               <i class="fa fa-envelope" aria-hidden="true"></i>
             </div>
             <div class="text">
               <h3>TicketBridger/Support@gmail.com</h3>
               
             </div>
            </div>
          </div>

          <div class="ContactForm">
            <form target="_blank" action="https://formsubmit.co/gjpetrakas@gmail.com" method="post">
             <h2 style="color: #fff;">Send Message</h2>
             <div class="inputBox">                   
               <input type="text" name="name"  required="required"> 
               <span>Full name</span>                          
             </div>
             <div class="inputBox">
               <input type="email" name="email"  required="required"> 
               <span>email</span>  
             </div>

             <div class="inputBox"> 
               <textarea   required="required" name="message"></textarea>  
               <span>Type your Message...</span>     
             </div>

             <div class="inputBox">
               <label for="Problem" style="color: #fff;">What problem do you have?</label>
               <select class="selected" name="Problem" >
                 <option>Refund</option>
                 <option>Unable to use my ticket</option>
                 <option>Ticket not received</option>
                 <option>Scam</option>
                 <option>Other</option>
               </select>
             </div>
                          
            
             <div class="inputBox">
               <input type="submit" name="" value="Send"  style="border-radius: 25px; ">
                           
             </div>
            </form>

          </div>
          


        </div>
       
      </section>



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
