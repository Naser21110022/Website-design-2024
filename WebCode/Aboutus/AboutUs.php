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
  <link rel="stylesheet" href="styles2.css">
  <title>About Us</title>
</head>

<body>
  <header class="header">
    <div class="logo">
        <img src="Logo.PNG" alt="Logo">
    </div>

    <nav class="nav">
      <ul>
      <li><a href="../Home.php">Home</a></li>
        <li><a href="../Products/Products.php">Products</a></li>
        <li><a href="AboutUs.php">About Us</a></li>
        <li><a href="../Cart/cart.php">Cart</a></li>
      </ul>
    </nav>
    
    <div class="Account-buttons">
      <button class="signup-button" onclick="location.href='../Auth/logout.php'">Logout</button>
    </div>
  </header>

  <main class="main">
    <div class="image-with-text">
      <img src="PC.jfif" alt="Image 1">
      <p> Here at NJ store, we are dedicated to providing customers with top level computer products and services, for 
        both software and hardware, you can find a variety of products here, and browse the website as you like.
      </p>
    </div>

    <div class="image-with-text">
      <img src="Mall.jpg" alt="Image 2">
      <p> Our store is located at the City Mall of Amman, Jordan, find us on the 4th floor across from the food court,
        click here for our location on Google maps.
      </p>
    </div>
  </main>

  <footer class="footer">
    <p>Phone: 07980553332 | Email: NJstore@outlook.com </p>
  </footer>

</body>
</html>