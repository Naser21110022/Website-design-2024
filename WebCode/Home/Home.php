<?php
session_start();
if(!isset($_SESSION['privilliged'])){
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>NJstore Homepage</title>
</head>

<body>
  <header class="header">
    <div class="logo">
        <img src="Logo.PNG" alt="Logo">
    </div>

    <nav class="nav">
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="../Products/products.php">Products</a></li>
        <li><a href="../Aboutus/AboutUs.php">About Us</a></li>
        <li><a href="../Cart/cart.php">Cart</a></li>
      </ul>
    </nav>
    
    <div class="Account-buttons">
      <button class="signup-button" onclick="location.href='../Auth/logout.php'">Logout</button>
      
    </div>
  </header>

  <main class="main">
    <div class="content-container">
      <div class="Text-box">
        <h1> Welcome to NJ Store 
        </br> </br>We Provide you with top quality hardware and software!
        </br> </br>- MAG Codex X5 (1015) Gaming Desktop
        </br> </br>- OMEN by HP 45L GT22-0003ne Gaming Desktop
        </br> </br>- HP Victus 15L TG02-0003NE Gaming Desktop
        </h1>
  </div>
      <div class="slideshow-container">
  <div class="mySlides fade">
    <img src="MSI2.webp" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="OMEN.webp" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="HP.webp" style="width:100%">
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
    <script src="Slider.js"></script>
    </div>
  </main>
 
  <footer class="footer">
    <p>Phone: 07980553332 | Email: NJstore@outlook.com </p>
  </footer>

</body>
</html>