<?php
include("../Auth/connect.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_SESSION['privilleged'])) {
        $name = $_POST['product_name'];
        $price = $_POST['product_price'];
        $quantity = $_POST['product_quantity'];
        $user = $_SESSION['privilleged'];


        $sql = "insert into `orders` (product_name, product_price, product_quantity,username) values ('$name',$price,$quantity,'$user')";
        $result = mysqli_query($con, $sql);
    } else {
        echo '<script>alert("Please sign in first")</script>';
    }
}

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles4.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title> Hardware </title>
</head>

<body>
  <header class="header">
    <div class="logo">
        <img src="Logo.PNG" alt="Logo">
    </div>

    <nav class="nav">
      <ul>
        <li><a href="../Home/home.php">Home</a></li>
        <li><a href="../Products/products.php">Products</a></li>
        <li><a href="../Aboutus/aboutus.php">About Us</a></li>
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
      <div class="container">
        <div class="row">
        <?php
 
            $sql = "select * from software;";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['ID'];
                $name = $row['Product_Name'];
                $desc = $row['Products_Desc'];
                $image = $row['Product_Image'];
                $price = $row['Product_Price'];

                
                echo '
                <div class=" bg-transparent card mx-auto " style="width: 18rem;">
                    <img src="' . $image . '" class="ccard-img-top mx-auto d-block" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #1584ce;">' . $name . '</h5>
                        <p class="card-text">' . $desc . '</p>
                        <p class="card-text"> price: ' . $price . ' JD</p>

                        <form method="post">
                            <input type="hidden" name="product_name" value= ' . $name . '>
                            <input type="hidden" name="product_image" value= ' . $image . '>
                            <input type="hidden" name="product_price" value= ' . $price . '>
                            <input type="number"  name="product_quantity" min="1" required>
                            <input type="submit" name="add_to_cart" value="Add to Cart">
                        </form>
                    </div>
                </div>
                ';

            }

            ?>
    </div>

    <div class="image-box">

          </div>

        
  </main>

 
  <footer class="footer">
    <p>Phone: 07980553332 | Email: NJstore@outlook.com </p>
  </footer>

</body>
</html>