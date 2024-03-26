<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="./sell.css">
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="stylesheet" href="home.css" />
    <title>Selling</title>
</head>
<body class="SellingPage">
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
            <button class="getStarted close">Get Started</button>
            <i class="carticon active fa-solid fa-cart-shopping"></i>
            <i class="usericon active fa-solid fa-user"></i>
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

<h1>Upload Your Tickets Here</h1>
<div class="description">
    <p>With our trusted system, you can rest assured that your transactions
    are protected.</p>
</div>

<div class="line"></div>


<div class="Image">
    <div class="container"> 
         <div class="box">
            <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <img src="./Images/young-beautiful-woman-blue-t-shirt-holding-air-tickets-looking-camera-smiling-cheerfully-standing-pink-background.jpg" alt="ticket woman" style="width:200px;height:200px; border-radius: 25%;">
                  </div>
                  <div class="flip-card-back">
                    <img src="./Images/young-beautiful-woman-blue-t-shirt-looking-camera-smiling-showing-open-palms-standing-pink.jpg" alt="" style="width:200px;height:200px; border-radius: 25%;">
                  </div>
                </div>
              </div>
        </div> 
     </div>
</div>
<div class="upload">
    <img src="./Images/rm373batch2-28.jpg" alt="upload_icon">
</div>

<div class="UploadForm">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <div class="form-column">
      <input type="text" name="title" placeholder="Title"<?php echo $name;?>>
      <span class="error"><?php echo $nameErr;?></span>
      <br><br>
      Date: <input type="date" name="date" value="<?php echo $email;?>">
      <span class="error"><?php echo $emailErr;?></span>
      <br><br>
      City: <input type="text" name="city" value="<?php echo $email;?>">
      <span class="error"><?php echo $emailErr;?></span>
      <br><br>
      Original Ticket Price: <input type="number" name="website" value="<?php echo $website;?>" min="0">
      <span class="coin">&euro;</span>
      <span class="error"><?php echo $websiteErr;?></span>
      <br><br>
      Selling Price: <input type="number" name="website" value="<?php echo $website;?>" step="any" min="0">
      <span class="coin">&euro;</span>
      <span class="error"><?php echo $websiteErr;?></span>
      <br><br>
      Number of Tickets: <input type="number" name="website" value="<?php echo $website;?>" min="1">
      <span class="error"><?php echo $websiteErr;?></span>
      <br><br>
    </div>
    <div class="form-column">
    <img src="./Images/scan_me_qr_code.jpg" alt="barcode">
      <br><br><br>
      <br><br>
      Kind:
      <br><br>
      <div class="kinds">
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Music
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Sport
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Cinema  
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Theater  
      <span class="error"><?php echo $genderErr;?></span>
      </div>
      <br>
      Upload Ticket: <input type="file" name="pdfFile" accept=".pdf" required>
      <span class="error"><?php echo $websiteErr;?></span>
      <br><br>
      <input type="submit" name="submit" value="Upload">
    </div>  
  </form>
</div>
    
</body>
</html>