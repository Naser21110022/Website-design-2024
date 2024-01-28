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
  <link rel="stylesheet" href="styles1.css">
  <title>Products</title>
</head>

<body>
  <header class="header">
    <div class="logo">
        <img src="Logo.PNG" alt="Logo">
    </div>

    <nav class="nav">
      <ul>
        <li><a href="../Home/Home.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="../Aboutus/AboutUs.php">About Us</a></li>
        <li><a href="../Cart/cart.php">Cart</a></li>
      </ul>
    </nav>
    
    <div class="Account-buttons">
      <button class="signup-button" onclick="location.href='../Auth/logout.php'">Logout</button>
      </div>
  </header>

  <main class="main">
    <div class="grid-container">
      <div class="image-box">
        <a href="../Hardware/Hardware.php">
        <img src="PC.png" alt="Image 1">
      </a>
        <p>Hardware</p>
      </div>
      <div class="image-box">
        <a href="../Software/Software.php">
        <img src="Disk.png" alt="Image 2">
      </a>
        <p>Software</p>
      </div>
    </div>
  </main>

 
  <footer class="footer">
    <p>Phone: 07980553332 | Email: NJstore@outlook.com </p>
  </footer>

</body>
</html>